@extends('layouts.admin')
@section('title')
    Edit Story
@endsection
@section('content')
    <div class="page-content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action={{ route('update-story', [$section, $slug]) }} id="storyForm">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="field-group">
                <p>Article Information:</p>
                <div class="field">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="wideTextField form-control" onchange="createSlug()" value="{{ $article->title }}">
                </div>
                <div class="field">
                    <label for="cDeck">C-deck:</label>
                    <input type="text" name="cDeck" id="cDeck" class="wideTextField form-control" value="{{ $article->cDeck }}">
                </div>
                <div class="field">
                    <label for="runsheet_slug">Runsheet Slug:</label>
                    <input type="text" name="runsheet_slug" id="runsheet_slug" class="wideTextField form-control" value="{{ $article->runsheet_slug }}">
                </div>
                <div class="field">
                    <label for="byline">Byline:</label>
                    {{--<input type="text" name="byline" id="byline" class="wideTextField form-control" value="{{ old('byline') }}">--}}
                    <select name="byline[]" id="byline" multiple="multiple">
                        @foreach (\App\Staffer::all() as $staffer)
                            <option value="{{ $staffer->id }}" {{ ($article->writers->contains($staffer->id) ? "selected":"") }}>{{ $staffer->fullname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="field">
                    <label for="static_byline">Static Byline:</label>
                    <input type="text" name="static_byline" id="static_byline" class="wideTextField form-control" value="{{ $article->static_byline }}">
                </div>
            </div>
            <div class="field-group">
                <p>Publication Information:</p>
                <div class="field">
                    <label for="publish_date">Publish Date</label>
                    <input type="text" name="publish_date" id="publish_date" class="wideTextField form-control flatpickr" data-default-date="{{ old('publish_date') === null ? $article->publish_date : old('publish_date')}}">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Published
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Updated
                    </label>
                </div>
                <div class="field">
                    <label for="issue">Issue:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                        <select name="issue" id="issue">
                            @foreach (\App\Issue::all() as $issue)
                                <option value="{{ $issue->id }}" {{ ($article->issue->id === $issue->id ? "selected":"") }}>{{ $issue->issueName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="section" >Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="field">
                        <select name="section" id="section">
                            @foreach (\App\Section::all() as $section)
                                <option value="{{ $section->id }}" {{ ($article->section->id === $section->id ? "selected":"") }}>{{ $section->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="priority">Priority:</label>
                    <input type="number" name="priority" id="priority" class="wideTextField form-control" value="{{ $article->priority }}">
                </div>
            </div>
            <div class="field-group">
                <p>The Story:</p>
                <div class="field">
                    <label for="body">Body:</label>
                    <textarea name="body" id="body" class="wideTextField form-control">{{ $article->body }}</textarea>
                </div>
                <div class="field">
                    <label for="photo">Photos:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                        <select name="topPhotos[]" id="photo" multiple>
                            @foreach (\App\Photo::all() as $photo)
                                <option value="{{ $photo->id }}" {{ ($article->headerPhotos()->contains($photo->id) ? "selected":"") }}>{{ $photo->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label>Inline Photos:</label>
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Reference</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($article->inlinePhotos()) > 0)
                            @foreach($article->inlinePhotos() as $inlinePhoto)
                                @if($loop->first)
                                <tr class="firstRow" id="firstRow">
                                @else
                                <tr class="firstRow">
                                @endif
                                    <td class="photoSelect">
                                        <select name="inlinePhotos[{{$loop->index}}][photo]" class="inline-photo">
                                            <option></option>
                                            @foreach (\App\Photo::all() as $photo)
                                                <option value="{{ $photo->id }}" {{ $inlinePhoto->id == $photo->id ? "selected" : "" }}>{{ $photo->title }}</option>
                                            @endforeach
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
                                        @foreach (\App\Photo::all() as $photo)
                                            <option value="{{ $photo->id }}" >{{ $photo->title }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="reference">
                                    <input type="text" name="inlinePhotos[0][reference]" value="">
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <a onclick="addTableRow()" class="btn btn-info">Add Row</a>
                </div>
                <div class="field">
                    <label for="issue">Graphics:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                        <select name="graphics[]" id="graphics" multiple>
                            @foreach (\App\Graphic::all() as $graphic)
                                <option value="{{ $graphic->id }}" {{ ($article->graphics->contains($graphic->id) ? "selected":"") }}>{{ $graphic->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="tags">Tags:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                        <select name="tags[]" id="tags" multiple>
                            @foreach (\Spatie\Tags\Tag::all() as $tag)
                                <option value="{{ $tag->name }}" {{ $article->tagExists($tag->name) }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label for="slug">Slug:</label>
                    <input type="text" name="slug" id="slug" class="wideTextField form-control" value="{{ $article->slug }}">
                </div>
            </div>
        </form>
    </div>
    <div class="sticky-footer">
        <button class="btn btn-info" onclick="submitForm()">Save</button>
    </div>
    @endsection
@section('scripts')
    <script>
        let inlineIndex = {{ count($article->inlinePhotos()) }} + 1;
        function createSlug(){
            var slug = document.getElementById("title").value;
            slug = slug.toLowerCase();
            slug = slug.replace(/ /g, "-");
            document.getElementById("slug").value = slug;
        }

        function addTableRow(){
            $(".inline-photo").select2("destroy");
            let el = $("#firstRow").clone();
            $(el).find('td.photoSelect select').attr("name", "inlinePhotos[" + inlineIndex + "][photo]").val([]);
            $(el).find('td.reference input').attr("name", "inlinePhotos[" + inlineIndex + "][reference]").val("");
            $(el).attr('id', '');
            $("tbody").append(el);
            $('.inline-photo').select2({
                placeholder: 'Select an option',
                allowClear: true
            });
            inlineIndex++;
            console.log("hi");
        }

        function submitForm(){
            $("#storyForm").submit();
        }

        $(document).ready(function(){
            $('select').select2();
            //setInputDate("input[name=publish_date]", "{{ $article->publish_date }}");
        })

    </script>
@endsection