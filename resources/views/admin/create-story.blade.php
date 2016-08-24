<!DOCTYPE html>
<html>
<head>
	<title>Create Story</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action={{ route('store-story') }}>
		{{ csrf_field() }}
		<button type="submit">Submit</button>
	</form>
</body>
</html>