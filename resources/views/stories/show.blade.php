<!DOCTYPE html>
<html>
<head>
	<title>The Maneater - {{ $story->title }}</title>
	<style>
		.article{
			display: flex;
			flex-flow: row;
			width:65%;
		}
		.articleInfo{
			width:20%;
		}
		.content{
			width:74%;
			padding-left:6%;
		}
		.mainContent{
			margin-left: auto;
			margin-right: auto;
			max-width:1440px;
		}
	</style>
</head>
<body>
	<div class="mainContent">
		<h1> {{ $story->title }} </h1>
		<h3> {{ $story->cDeck }} </h3>
		<h5> Photo placeholder </h5>
		<article class='article'>
			<section class='articleInfo'>
				@if (count($story->writers) == 1)
					<p>By {{ $story->writers[0]->first_name }} {{ $story->writers[0]->last_name }}</p>
				@else
					<p>By
					@foreach ($story->writers as $writer)
						{{ $writer->first_name }} {{ $writer->last_name }}
						@if (!$loop->last)
							 and 
						@endif
					@endforeach
					</p>
				@endif
				<p> {{ \Carbon\Carbon::parse($story->publish_date)->format('M. d, Y') }} </p>
			</section>
			<section class="content">
				 {!! Markdown::parse(nl2br($story->body)) !!}
			</section>
		</article>
	</div>
</body>
</html>