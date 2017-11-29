@extends('layouts.admin')
@section('title')
    Edit Story
@endsection
@section('content')
        <div class="theader">
            <h2 class="">Edit Article</h2>
        </div>
       @include("admin.shared.errors")
        <form method="POST" enctype="multipart/form-data" action={{ route('update-story', [$section, $slug]) }} id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="box">
                <h4>Article Information:</h4>
                <b-field label="Title">
                    <b-input name="title" id="title" value="{{ $article->title }}" v-on:change="createSlug"></b-input>
                </b-field>
                <b-field label="C-Deck:">
                    <b-input name="cDeck" id="cDeck" value="{{ $article->cDeck }}"></b-input>
                </b-field>
                <b-field label="Runsheet Slug:">
                    <b-input name="runsheet_slug" id="runsheet_slug" value="{{ $article->runsheet_slug }}"></b-input>
                </b-field>
                <b-field label="Byline:">
                    <select2 name="byline[]" id="byline" multiple="true">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ ($article->writers->contains($staffer->id) ? "selected":"") }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ $article->static_byline }}"></b-input>
                </b-field>
                <b-field label="Type:">
                    <select2 name="type" id="type">
                        <option value="online" {{ $article->type === "online" ? "selected" : "" }}>Online</option>
                        <option value="editorial" {{ $article->type === "editorial" ? "selected" : "" }}>Editorial</option>
                        <option value="letter" {{ $article->type === "letter" ? "selected" : "" }}>Letter to the Editor</option>
                        <option value="column" {{ $article->type === "column" ? "selected" : "" }}>Column</option>
                        <option value="gallery" {{ $article->type === "gallery" ? "selected" : "" }}>Gallery</option>
                        <option value="feature" {{ $article->type === "feature" ? "selected" : "" }}>Feature</option>
                    </select2>
                </b-field>
            </div>
            <div class="box">
                <h4>Publication Information:</h4>
                <b-field label="Publish Date:">
                    <flatpickr name="publish_date" default-value="{{ old('publish_date') === null ? $article->publish_date : old('publish_date') }}"></flatpickr>
                </b-field>
                <div class="field">
                    <b-checkbox>Published</b-checkbox>
                </div>
                <div class="field">
                    <b-checkbox>Updated</b-checkbox>
                </div>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach (\App\Issue::latest('id')->take(10)->get() as $issue)
                            <option value="{{ $issue->id }}" {{ ($article->issue->id === $issue->id ? "selected":"") }}>{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 id="section" name="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}" {{ ($article->section->id === $section->id ? "selected":"") }}>{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Priority:">
                    <b-input name="priority" type="number" id="priority" value="{{ $article->priority }}"></b-input>
                </b-field>
            </div>
            <div class="box">
                <h4>The Story:</h4>
                <b-field label="Body:">
                    <b-input name="body" id="priority" type="textarea" value="{{ $article->body }}"></b-input>
                </b-field>
                <b-field label="Header Photos:">
                    <select2 name="topPhotos[]" id="topPhotos" multiple="true">
                        @foreach ($article->headerPhotos as $photo)
                            <option value="{{ $photo->id }}" selected>{{ $photo->title }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <div class="field">
                    <label class="label">Inline Photos:</label>
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Reference</th>
                        </tr>
                        </thead>
                        <tbody class="inline-body">
                        @if(count($article->inlinePhotos) > 0)
                            @foreach($article->inlinePhotos as $inlinePhoto)
                                @if($loop->first)
                                    <tr class="firstRow" id="firstRow">
                                @else
                                    <tr class="firstRow">
                                        @endif
                                        <td class="photoSelect">
                                            <select name="inlinePhotos[{{$loop->index}}][photo]" class="inline-photo">
                                                <option></option>
                                                <option value="{{ $inlinePhoto->id }}" selected>{{ $inlinePhoto->title }}</option>
                                            </select>
                                        </td>
                                        <td class="reference">
                                            <input type="text" name="inlinePhotos[{{$loop->index}}][reference]" value="{{ $inlinePhoto->pivot->reference }}">
                                        </td>
                                    </tr>
                                    @endforeach
                        @else
                            <tr class="firstRow" id="firstRow">
                                <td class="photoSelect">
                                    <select name="inlinePhotos[0][photo]" class="inline-photo">
                                        <option></option>
                                        @foreach (\App\Photo::latest()->take(30)->get() as $photo)
                                            <option value="{{ $photo->id }}" >{{ $photo->title }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="reference">
                                    <input type="text" class="input" name="inlinePhotos[0][reference]" value="">
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <a onclick="addTableRow()" class="button">Add Row</a>
                </div>
                <b-field label="Graphics:">
                    <select2 name="graphics[]" id="graphics" multiple="true">
                        @foreach (\App\Graphic::latest('id')->take(50)->get() as $graphic)
                            <option value="{{ $graphic->id }}" {{ ($article->graphics->contains($graphic->id) ? "selected":"") }}>{{ $graphic->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Tags:">
                    <select2 name="tags[]" id="tags" multiple="true">
                        @foreach (\Spatie\Tags\Tag::all() as $tag)
                            <option value="{{ $tag->name }}" {{ $article->tagExists($tag->name) }}>{{ $tag->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <div class="field">
                    <label class="label">Corrections:</label>
                    <table>
                        <thead>
                        <tr>
                            <th>Content</th>
                        </tr>
                        </thead>
                        <tbody class="correction-body">
                        @if(count($article->corrections) > 0)
                            @foreach($article->corrections as $correction)
                                @if($loop->first)
                                    <tr class="firstRow" id="correctionFirstRow">
                                @else
                                    <tr class="firstRow">
                                @endif
                                        <td class="photoSelect">
                                            <input type="text" class="input" name="corrections[{{$loop->index}}]" value="{{ $correction->content }}">
                                        </td>
                                    </tr>
                            @endforeach
                        @else
                            <tr class="firstRow" id="correctionFirstRow">
                                <td class="correction">
                                    <input type="text" class="input" name="corrections[0]" placeholder="Correction Content">
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <a onclick="addCorrectionTableRow()" class="button">Add Row</a>
                </div>
                <div class="field">
                    <label for="slug" class="label">Slug:</label>
                    <p class="control">
                        <input type="text" name="slug" id="slug" class="wideTextField input" value="{{ $article->slug }}">
                    </p>
                </div>
            </div>
        </form>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        let inlineIndex = {{ count($article->inlinePhotos()) }} + 1;
        let correctionIndex = {{ count($article->corrections) }} +1;

        let config = {
            ajax: {
                url: '{{ config('app.url') }}/photos/search',
                dataType: 'json',
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    var mappedData = $.map(data.data, function (obj) {
                        var filename = obj.location.split('/').pop();
                        obj.text = filename; // replace name with the property used for the text

                        return obj;
                    });

                    return {
                        results: mappedData,
                        pagination: {
                            more: (params.page * 25) < data.total
                        }
                    };
                },
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            },
            minimumInputLength: 4,
            placeholder: 'Select an option',
            allowClear: true
        };
        let graphicsConfig = {
            ajax: {
                url: '{{ config('app.url') }}/graphics/search',
                dataType: 'json',
                processResults: function (data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    var mappedData = $.map(data.data, function (obj) {
                        obj.text = obj.text || obj.title; // replace name with the property used for the text

                        return obj;
                    });

                    return {
                        results: mappedData,
                        pagination: {
                            more: (params.page * 25) < data.total
                        }
                    };
                },
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            },
            minimumInputLength: 4,
            placeholder: 'Select an option',
            allowClear: true
        };

        function addTableRow(){
            $(".inline-photo").select2("destroy");
            let el = $("#firstRow").clone();
            $(el).find('td.photoSelect select').attr("name", "inlinePhotos[" + inlineIndex + "][photo]").val([]);
            $(el).find('td.reference input').attr("name", "inlinePhotos[" + inlineIndex + "][reference]").val("");
            $(el).attr('id', '');
            $("tbody.inline-body").append(el);
            $('.inline-photo').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            inlineIndex++;
            console.log("hi");
        }

        function addCorrectionTableRow(){
            let el = $("#correctionFirstRow").clone();
            $(el).find('td.correction input').attr("name", "corrections[" + correctionIndex + "]").val("");
            $(el).attr('id', '');
            $("tbody.correction-body").append(el);
            correctionIndex++;
            console.log("hi");
        }

        function submitForm(){
            $("#storyForm").submit();
        }

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });

            $('#tags').select2({
                tags: true
            });

            $("#topPhotos").select2(config);
            $(".inline-photo").select2(config);
            $("#graphics").select2(graphicsConfig);
        })

    </script>
@endsection