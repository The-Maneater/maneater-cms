@extends('layouts.admin')
    @section('title')
        Create Story
    @endsection

    @section('content')
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <form method="POST" enctype="multipart/form-data" action={{ route('store-story') }} id="storyForm">
            {{ csrf_field() }}
            <div class="field-group">
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
                <div class="field">
                    <label for="byline" class="label">Byline:</label>
                    <p class="control">
                        <select name="byline" id="byline" class="select" multiple="multiple">
                            @foreach (\App\Staffer::all() as $staffer)
                                <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <b-field label="Static Byline:">
                    <b-input name="static_byline" id="static_byline" value="{{ old('static_byline') }}"></b-input>
                </b-field>
            </div>
            <div class="field-group">
                <h4>Publication Information:</h4>
                <div class="field">
                    <label for="publish_date" class="label">Publish Date</label>
                    <p class="control">
                        <input type="text" name="publish_date" id="publish_date" class="input flatpickr" data-default-date="{{ old('publish_date') === null ? \Carbon\Carbon::now() : old('publish_date')}}">
                    </p>
                </div>
                <div class="field">
                    <b-checkbox>Published</b-checkbox>
                </div>
                <div class="field">
                    <b-checkbox>Updated</b-checkbox>
                </div>
                <div class="field">
                    <label for="issue" class="label">Issue:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                       <p class="control">
                           <select name="issue" class="select" id="issue">
                                @foreach (\App\Issue::all() as $issue)
                                   <option value="{{ $issue->id }}">{{ $issue->issueName }}</option>
                               @endforeach
                            </select>
                       </p>
                    </div>
                </div>
                <div class="field">
                    <label for="section" class="label">Section:</label>
                    <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                    <div class="field">
                        <p class="control">
                            <select name="section" class="select" id="section">
                                @foreach (\App\Section::all() as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
                <b-field label="Priority:">
                    <b-input name="priority" type="number" id="priority" value="{{ old('priority') }}"></b-input>
                </b-field>
            </div>
            <div class="field-group">
                <h4>The Story:</h4>
                <div class="field">
                    <label for="body" class="label">Body:</label>
                    <p class="control">
                        <textarea name="body" id="body" class="wideTextField textarea">{{ old('body') }}</textarea>
                    </p>
                </div>
                <div class="field">
                    <label for="topPhotos" class="label">Header Photos:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                       <p class="control">
                           <select name="topPhotos[]" id="topPhotos" class="select" multiple>
                            @foreach (\App\Photo::all() as $photo)
                                <option value="{{ $photo->id }}">{{ $photo->title }}</option>
                            @endforeach
                        </select>
                       </p>
                    </div>
                </div>
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
                                    <select name="inlinePhotos[0][photo]" class="inline-photo">
                                        <option></option>
                                        @foreach (\App\Photo::all() as $photo)
                                            <option value="{{ $photo->id }}">{{ $photo->title }}</option>
                                        @endforeach
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
                <div class="field">
                    <label for="graphics" class="label">Graphics:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                       <p class="control">
                           <select name="graphics[]" id="graphics" multiple>
                                @foreach (\App\Graphic::all() as $graphic)
                                    <option value="{{ $graphic->id }}">{{ $graphic->title }}</option>
                                @endforeach
                            </select>
                       </p>
                    </div>
                </div>
                <div class="field">
                    <label for="tags" class="label">Tags:</label>
                    {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                    <div class="field">
                        <p class="control">
                            <select name="tags[]" id="tags" multiple>
                                @foreach (\Spatie\Tags\Tag::all() as $tag)
                                    <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
                <div class="field">
                    <label for="slug" class="label">Slug:</label>
                    <p class="control">
                        <input type="text" name="slug" id="slug" class="wideTextField input" value="{{ old('slug') }}">
                    </p>
                </div>
            </div>
        </form>
@endsection

@section('footer')
    <div class="sticky-footer is-flex is-flex-end is-flex-justify-center">
        <button class="button is-success " onclick="submitForm()">Save</button>
    </div>
@endsection

@section('scripts')
    <script>
        let inlineIndex = 1;
        function submitForm(){
            $("#storyForm").submit();
        }

        function addTableRow(){
            $(".inline-photo").select2("destroy");
            let el = $(".firstRow").clone();
            $(el).find('td.photoSelect select').attr("name", "inlinePhotos[" + inlineIndex + "][photo]").val([]);
            $(el).find('td.reference input').attr("name", "inlinePhotos[" + inlineIndex + "][reference]").val("");
            $(el).removeClass('firstRow');
            $("tbody").append(el);
            $('.inline-photo').select2({
                placeholder: 'Select an option',
                allowClear: true
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
        })

    </script>
@endsection