@extends('layouts.app')

@section('content')
	<div class="columns">
        <div class="column is-8">
            <h1 class="h1-content">{{ $story->title }}</h1>
            <h3 class="h3-content">{{ $story->cDeck }}</h3>
            <div class="main-picture">
                @if(count($story->headerPhotos) > 0)
                    <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
                @endif
            </div>
            <div class="columns">
                <div class="column is-2">
                    <section class='articleInfo is-flex'>
                        @if (count($story->writers) == 1)
                            <p class="byline">By <a href="{{ $story->writers[0]->path() }}" class="is-m-green">{{ $story->writers[0]->first_name }} {{ $story->writers[0]->last_name }}</a></p>
                            @else
                                <p class="byline">By
                                    @foreach ($story->writers as $writer)
                                        {{ $writer->first_name }} {{ $writer->last_name }}
                                            @if (!$loop->last)
                                                and
                                            @endif
                                    @endforeach
                                </p>
                            @endif
                        <p class="published"> {{ $story->formattedPublishDate->format('M. d, Y') }} </p>
                            <div class="tags">
                                <ul>
                                    @if(count($story->tags) > 0)
                                        <li class="sharevia">Tags</li>
                                        @foreach($story->tags as $tag)
                                            <li><a href="{{ url("/tags/$tag->slug") }}">{{ $tag->name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="share">
                                <ul>
                                    <li class="sharevia">Share via</li>
                                    <li><a onclick="fbShare()">Facebook</a></li>
                                    <li><a onclick="twShare()">Twitter</a></li>
                                    <li><a onclick="gpShare()">Google+</a></li>
                                </ul>
                            </div>
                    </section>
                </div>
                <div class="column is-10">
                    <div class="body">
                        {!! Markdown::parse(nl2br($story->body)) !!}
                    </div>
                    <div id="bottomshare">
                        <p>Share: <a onclick="fbShare()">Facebook</a> / <a onclick="twShare()">Twitter</a> / <a onclick="gpShare()">Google+</a></p>
                    </div>
                    @if(isset($ads['banner'][0]))
                        <img src="{{ $ads['banner'][0]->image_url }}" alt="" class="top-ad">
                    @endif
                </div>
            </div>
            <div class="related">
                <h2 class="sectionlabel">Related articles</h2>
                <ol>
                    @foreach($relatedArticles as $article)
                        <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>

            <div id="comments">
                <h5>Article comments</h5>
                <div class="commenttime"><p>0 comments</p></div>
                <div class="commentbody"><p>This item does not have any approved comments yet.</p></div>

            </div>

            <div id="commentpost">
                <h5>Post a comment</h5>
                <p>Please provide a full name for all comments. We don't post obscene, offensive or pure hate speech.</p>

                <form action="/comments/post/" method="post">
                    <div id="inputfields">
                        <div style="display:none;"><input type="text" name="emailconfirm" id="id_emailconfirm"></div>
                        <div class="formpadding"><input id="id_name" type="text" name="name" maxlength="50"></div> <label for="id_name" class="input">Name</label>
                        <div class="formpadding"><input type="text" name="email" id="id_email"></div> <label for="id_email" class="input">Email address</label>
                        <div class="formpadding"><input type="text" name="url" id="id_url"></div> <label for="id_url" class="input">Website</label>
                    </div>
                    <div id="textareafields">
                        <div class="formpadding">
                            <textarea id="id_comment" rows="10" cols="40" name="comment"></textarea>
                        </div>
                        <label for="id_comment" class="textarea">Comment</label>
                        <input type="submit" name="post" class="submit" value="Post"> <input type="submit" name="preview" class="submit" value="Preview">
                    </div>
                </form>

            </div>
        </div>
        <div class="column is-4">
            <div class="related">
                <h2 class="sectionlabel">Related articles</h2>
                <ol>
                    @foreach($relatedArticles as $article)
                        <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>
            @if(isset($ads['cubes'][0]))
                <img src="{{ $ads['cubes'][0]->image_url }}" alt="" class="bottom-ad">
            @endif
            @if(isset($ads['cubes'][1]))
                <img src="{{ $ads['cubes'][1]->image_url }}" alt="" class="bottom-ad">
            @endif
            <div class="twitter-box">
                <h2 class="sectionlabel is-primary">LATEST TWEETS</h2>
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>
            @if(isset($ads['cubes'][2]))
                <img src="{{ $ads['cubes'][2]->image_url }}" alt="" class="bottom-ad">
            @endif

            @if(isset($ads['cubes'][3]))
                <img src="{{ $ads['cubes'][3]->image_url }}" alt="" class="bottom-ad">
            @endif
        </div>
	</div>
@endsection
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
	{{--<title>The Maneater - {{ $story->title }}</title>--}}
	{{--<style>--}}
		{{--.article{--}}
			{{--display: flex;--}}
			{{--flex-flow: row;--}}
			{{--width:65%;--}}
		{{--}--}}
		{{--.articleInfo{--}}
			{{--width:20%;--}}
		{{--}--}}
		{{--.content{--}}
			{{--width:74%;--}}
			{{--padding-left:6%;--}}
		{{--}--}}
		{{--.mainContent{--}}
			{{--margin-left: auto;--}}
			{{--margin-right: auto;--}}
			{{--max-width:1440px;--}}
		{{--}--}}
	{{--</style>--}}
{{--</head>--}}
{{--<body>--}}
	{{--<div class="mainContent">--}}
		{{--<h1> {{ $story->title }} </h1>--}}
		{{--<h3> {{ $story->cDeck }} </h3>--}}
		{{--<h5> Photo placeholder </h5>--}}
		{{--<article class='article'>--}}
			{{--<section class='articleInfo'>--}}
				{{--@if (count($story->writers) == 1)--}}
					{{--<p>By {{ $story->writers[0]->first_name }} {{ $story->writers[0]->last_name }}</p>--}}
				{{--@else--}}
					{{--<p>By--}}
					{{--@foreach ($story->writers as $writer)--}}
						{{--{{ $writer->first_name }} {{ $writer->last_name }}--}}
						{{--@if (!$loop->last)--}}
							 {{--and --}}
						{{--@endif--}}
					{{--@endforeach--}}
					{{--</p>--}}
				{{--@endif--}}
				{{--<p> {{ \Carbon\Carbon::parse($story->publish_date)->format('M. d, Y') }} </p>--}}
			{{--</section>--}}
			{{--<section class="content">--}}
				 {{--{!! Markdown::parse(nl2br($story->body)) !!}--}}
			{{--</section>--}}
		{{--</article>--}}
	{{--</div>--}}
{{--</body>--}}
{{--</html>--}}