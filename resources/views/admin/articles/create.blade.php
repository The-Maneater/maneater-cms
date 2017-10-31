@extends('layouts.admin')
    @section('title')
        Create Story
    @endsection

    @section('content')
        <div class="theader">
            <h2 class="">Create Article</h2>
        </div>
        @include("admin.shared.errors")
        <form method="POST" enctype="multipart/form-data" action={{ route('store-story') }} id="storyForm">
            {{ csrf_field() }}
            <div class="box">
                <h4>Article Information:</h4>
                <b-field label="Title">
                    <b-input name="title" id="title" value="{{ old('title') }}" v-on:change="createSlug"></b-input>
                </b-field>
                <b-field label="C-Deck:">
                    <b-input name="cDeck" id="cDeck" value="{{ old('title') }}"></b-input>
                </b-field>
                <b-field label="Runsheet Slug:">
                    <b-input name="runsheet_slug" id="runsheet_slug" value="{{ old('runsheet_slug') }}"></b-input>
                </b-field>
                <b-field label="Byline:">
                    <select2 name="byline[]" id="byline" multiple="true">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ old('static_byline') }}"></b-input>
                </b-field>
            </div>
            <div class="box">
                <h4>Publication Information:</h4>
                <b-field label="Publish Date:">
                    <flatpickr name="publish_date" default-date="{{ old('publish_date') === null ? \Carbon\Carbon::now() : old('publish_date')}}"></flatpickr>
                </b-field>
                <div class="field">
                    <b-checkbox>Published</b-checkbox>
                </div>
                <div class="field">
                    <b-checkbox>Updated</b-checkbox>
                </div>
                <b-field label="Issue:">
                    <select2 name="issue" id="issue">
                        @foreach (\App\Issue::latest()->take(10)->get() as $issue)
                            <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Section:">
                    <select2 id="section" name="section">
                        @foreach (\App\Section::all() as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <b-field label="Priority:">
                    <b-input name="priority" type="number" id="priority" value="{{ old('priority') }}"></b-input>
                </b-field>
            </div>
            <div class="box">
                <h4>The Story:</h4>
                <b-field label="Body:">
                    <b-input name="body" id="priority" type="textarea" value="{{ old('body') }}"></b-input>
                </b-field>
                <b-field label="Header Photos:">
                    <select2 name="topPhotos[]" id="topPhotos" multiple="true">
                        {{--@foreach (\App\Photo::all() as $photo)--}}
                            {{--<option value="{{ $photo->id }}">{{ $photo->title }}</option>--}}
                        {{--@endforeach--}}
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
                        <tbody>
                            <tr class="firstRow">
                                <td class="photoSelect">
                                    <select name="inlinePhotos[0][photo]" id="first-inline" class="inline-photo">
                                        <option></option>
                                        {{--@foreach (\App\Photo::all() as $photo)--}}
                                            {{--<option value="{{ $photo->id }}">{{ $photo->title }}</option>--}}
                                        {{--@endforeach--}}
                                    </select>
                                </td>
                                <td class="reference">
                                    <input type="text" class="input" name="inlinePhotos[0][reference]">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a onclick="addTableRow()" class="button">Add Row</a>
                </div>
                <b-field label="Graphics:">
                    <select2 name="graphics[]" id="graphics" multiple="true">
                        {{--@foreach (\App\Graphic::all() as $graphic)--}}
                            {{--<option value="{{ $graphic->id }}">{{ $graphic->title }}</option>--}}
                        {{--@endforeach--}}
                    </select2>
                </b-field>
                <b-field label="Tags:">
                    <select2 name="tags[]" id="tags" multiple="true">
                        @foreach (\Spatie\Tags\Tag::all() as $tag)
                            <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                        @endforeach
                    </select2>
                </b-field>
                <div class="field">
                    <label for="slug" class="label">Slug:</label>
                    <p class="control">
                        <input type="text" name="slug" id="slug" class="wideTextField input" value="{{ old('slug') }}">
                    </p>
                </div>
            </div>
        </form>
@endsection

@include("admin.shared.form-footer")

@section('scripts')
    <script>
        let inlineIndex = 1;
        function submitForm(){
            $("#storyForm").submit();
        }

        let config = {
            ajax: {
                url: 'http://maneater-cms.dev/photos/search',
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
        let graphicsConfig = {
            ajax: {
                url: 'http://maneater-cms.dev/graphics/search',
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
            let el = $(".firstRow").clone();
            $(el).find('td.photoSelect select').attr("name", "inlinePhotos[" + inlineIndex + "][photo]").val([]);
            $(el).find('td.reference input').attr("name", "inlinePhotos[" + inlineIndex + "][reference]").val("");
            $(el).removeClass('firstRow');
            $("tbody").append(el);
            $('.inline-photo').select2({
                placeholder: 'Select an option',
                allowClear: true,
                ajax: config.ajax,
                minimumInputLength: config.minimumInputLength
            });
            inlineIndex++;
        }

        $(document).ready(function(){
            $('select').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            $('#tags').select2({
                tags: true
            });
            $('#topPhotos').select2(config);
            $('#first-inline').select2(config);
            $('#graphics').select2(graphicsConfig);
        })

    </script>
@endsection