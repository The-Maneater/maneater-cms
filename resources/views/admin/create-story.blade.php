@extends('layouts.admin')
    @section('title')
        Create Story
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
            <form method="POST" enctype="multipart/form-data" action={{ route('store-story') }} id="storyForm">
                {{ csrf_field() }}
                <div class="field-group">
                    <p>Article Information:</p>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="wideTextField form-control" onchange="createSlug()" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="cDeck">C-deck:</label>
                        <input type="text" name="cDeck" id="cDeck" class="wideTextField form-control" value="{{ old('cDeck') }}">
                    </div>
                    <div class="form-group">
                        <label for="runsheet_slug">Runsheet Slug:</label>
                        <input type="text" name="runsheet_slug" id="runsheet_slug" class="wideTextField form-control" value="{{ old('runsheet_slug') }}">
                    </div>
                    <div class="form-group">
                        <label for="byline">Byline:</label>
                        {{--<input type="text" name="byline" id="byline" class="wideTextField form-control" value="{{ old('byline') }}">--}}
                        <select name="byline" id="byline" multiple="multiple">
                            @foreach (\App\Staffer::all() as $staffer)
                                <option value="{{ $staffer->id }}">{{ $staffer->fullname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="static_byline">Static Byline:</label>
                        <input type="text" name="static_byline" id="static_byline" class="wideTextField form-control" value="{{ old('static_byline') }}">
                    </div>
                </div>
                <div class="field-group">
                    <p>Publication Information:</p>
                    <div class="form-group">
                        <label for="publish_date">Publish Date</label>
                        <input type="text" name="publish_date" id="publish_date" class="wideTextField form-control" value="2016-08-22 12:00:00">
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
                    <div class="form-group">
                        <label for="issue">Issue:</label>
                        {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                        <div class="form-group">
                            <select name="issue" id="issue">
                                @foreach (\App\Issue::all() as $issue)
                                    <option value="{{ $issue->id }}">Maneaver v.{{ $issue->issue_number }}, Issue {{ $issue->volume->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section" >Section:</label>
                        <!-- <input type="text" name="section" id="section" class="wideTextField"> -->
                        <div class="form-group">
                            <select name="section" id="section">
                                @foreach (\App\Section::all() as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <input type="number" name="priority" id="priority" class="wideTextField form-control" value="{{ old('priority') }}">
                    </div>
                </div>
                <div class="field-group">
                    <p>The Story:</p>
                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea name="body" id="body" class="wideTextField form-control" value="{{ old('body') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="issue">Photos:</label>
                        {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                        <div class="form-group">
                            <select name="photo" id="photo" multiple>
                                @foreach (\App\Photo::all() as $photo)
                                    <option value="{{ $photo->id }}">{{ $photo->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="issue">Graphics:</label>
                        {{--<input type="text" name="issue" id="issue" class="wideTextField form-control" value="{{ old('issue') }}">--}}
                        <div class="form-group">
                            <select name="graphics" id="graphics" multiple>
                                @foreach (\App\Graphic::all() as $graphic)
                                    <option value="{{ $graphic->id }}">{{ $graphic->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" id="slug" class="wideTextField form-control" value="{{ old('slug') }}">
                    </div>
                </div>
            </form>
        </div>
	<div class="sticky-footer">
		<button class="btn btn-info" onclick="submitForm()">Save</button>
	</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.1/js/tether.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        function createSlug(){
            var slug = document.getElementById("title").value;
            slug = slug.toLowerCase();
            slug = slug.replace(" ", "-");
            document.getElementById("slug").value = slug;
        }
        function submitForm(){
            $("#storyForm").submit();
        }

        $(document).ready(function(){
            $('select').select2();
        })

    </script>
@endsection