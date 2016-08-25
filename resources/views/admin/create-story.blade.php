<!DOCTYPE html>
<html>
<head>
	<title>Create Story</title>
	<script>
		function createSlug(){
			var slug = document.getElementById("title").value;
			slug = slug.toLowerCase();
			slug = slug.replace(" ", "-");
			document.getElementById("slug").value = slug;
		}
	</script>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form method="POST" enctype="multipart/form-data" action={{ route('store-story') }}>
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" class="wideTextField" onchange="createSlug()" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="cDeck">C-deck:</label>
			<input type="text" name="cDeck" id="cDeck" class="wideTextField" value="{{ old('cDeck') }}">
		</div>
		<div class="form-group">
			<label for="runsheet_slug">Runsheet Slug:</label>
			<input type="text" name="runsheet_slug" id="runsheet_slug" class="wideTextField" value="{{ old('runsheet_slug') }}">
		</div>
		<div class="form-group">
			<label for="byline">Byline:</label>
			<input type="text" name="byline" id="byline" class="wideTextField" value="{{ old('byline') }}">
		</div>
		<div class="form-group">
			<label for="static_byline">Static Byline:</label>
			<input type="text" name="static_byline" id="static_byline" class="wideTextField" value="{{ old('static_byline') }}">
		</div>
		<div class="form-group">
			<label for="publish_date">Publish Date</label>
			<input type="text" name="publish_date" id="publish_date" class="wideTextField" value="2016-08-22 12:00:00">
		</div>
		<div class="form-group">
			<label for="issue">Issue:</label>
			<input type="text" name="issue" id="issue" class="wideTextField" value="{{ old('issue') }}">
		</div>
		<div class="form-group">
			<label for="section" >Section:</label>
			<!-- <input type="text" name="section" id="section" class="wideTextField"> -->
			<select name="section" id="section">
				@foreach (\App\Section::all() as $section)
					<option value="{{ $section->id }}">{{ $section->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="priority">Priority:</label>
			<input type="number" name="priority" id="priority" class="wideTextField" value="{{ old('priority') }}">
		</div>

		<div class="form-group">
			<label for="body">Body:</label>
			<textarea name="body" id="body" class="wideTextField" value="{{ old('body') }}"></textarea>
		</div>

		<div class="form-group">
			<label for="slug">Slug:</label>
			<input type="text" name="slug" id="slug" class="wideTextField" value="{{ old('slug') }}">
		</div>

		<button type="submit">Submit</button>
	</form>
</body>
</html>