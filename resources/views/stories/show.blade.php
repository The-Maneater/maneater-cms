@extends('layouts.app')

@section('content')
	<div class="columns">
        <div class="column is-8">
            <h1 class="h1-content">{{ $story->full_title }}</h1>
            <h3 class="h3-content">{{ $story->cDeck }}</h3>
            <div class="main-picture">
                @if(count($story->headerPhotos) > 0)
                    <div class="main-picture-wrap">
                        <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
                    </div>
                    @if($story->headerPhotos[0]->static_byline === null)
                        <div class="caption">
                            <span>{{ $story->headerPhotos[0]->description }}</span>
                            <span class="all-caps">
                                <a href="{{$story->headerPhotos[0]->photographer->path()}}">{{ $story->headerPhotos[0]->photographer->fullName }}</a> / {{ $story->headerPhotos[0]->photographer->photo_pos }}
                            </span>
                        </div>
                    @else
                        <div class="caption">
                            <span>{{ $story->headerPhotos[0]->description }}</span>
                            <span class="all-caps">
                                {{ $story->headerPhotos[0]->static_byline }}
                            </span>
                        </div>
                    @endif
                @elseif(count($story->graphics) > 0)
                    <div class="main-picture-wrap">
                        <img src="{{ $story->graphics[0]->linkPath() }}" alt="">
                    </div>
                    @if($story->graphics[0]->static_byline === null)
                        <div class="caption">
                            {{--<span>{{ $story->graphics[0]->description }}</span>--}}
                            <span class="all-caps">
                                <a href="{{$story->graphics[0]->staffer->path()}}">{{ $story->graphics[0]->staffer->fullName }}</a> / Graphic Designer
                            </span>
                        </div>
                    @else
                        <div class="caption">
                            <span>{{ $story->graphics[0]->description }}</span>
                            <span class="all-caps">
                                {{ $story->grahpics[0]->static_byline }}
                            </span>
                        </div>
                    @endif
                @endif
            </div>
            <div class="columns">
                <div class="column is-2">
                    <section class='articleInfo is-flex'>
                        @if($story->type === "editorial")
                            <p class="disclaimer">Editorials represent the majority opinion of The Maneater editorial board.</p>
                        @elseif($story->static_byline !== null && $story->static_byline !== "")
                            <p class="byline">{{ $story->static_byline }}</p>
                        @elseif (count($story->writers) == 1)
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
                        @if($story->type === "column")
                                <p class="disclaimer">The opinions expressed by The Maneater columnists do not represent the opinions of The Maneater editorial board.</p>
                        @elseif($story->type === "letter")
                                <p class="disclaimer">The Maneater reserves the right to edit letters and columns for style and length.</p>
                        @endif
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
                                    <li><a href="{{ $urls['facebook'] }}" target="_blank">Facebook</a></li>
                                    <li><a href="{{ $urls['twitter'] }}" target="_blank">Twitter</a></li>
                                    <li><a href="{{ $urls['google'] }}" target="_blank">Google+</a></li>
                                </ul>
                            </div>
                    </section>
                </div>
                <div class="column is-10">
                    <div class="body">
                        @if(count($story->corrections) > 0)
                            @foreach($story->corrections as $correction)
                                <p class="disclaimer">{{ $correction->content }}</p>
                            @endforeach
                        @endif
                        {!! Markdown::parse($story->body) !!}
                    </div>
                    <div id="bottomshare">
                        <p>Share: <a href="{{ $urls['facebook'] }}" target="_blank">Facebook</a> / <a href="{{ $urls['twitter'] }}" target="_blank">Twitter</a> / <a href="{{ $urls['google'] }}" target="_blank">Google+</a></p>
                    </div>
                    @if(isset($ads['banner'][0]))
                        <a href="{{ $ads['banner'][0]->provider_url }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-top-ad"></a>
                    @endif
                </div>
            </div>
            @if(count($relatedArticles) > 0)
            <div class="related">

                <h2 class="sectionlabel">Related articles</h2>
                <ol>
                    @foreach($relatedArticles as $article)
                        <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>
            @endif

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
            @if(count($relatedArticles) > 0)
            <div class="related">
                <h2 class="sectionlabel">Related articles</h2>
                <ol>
                    @foreach($relatedArticles as $article)
                        <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>
            @endif
            @if(isset($ads['cubes'][0]))
                    <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="bottom-ad"></a>
            @endif
            @if(isset($ads['cubes'][1]))
                    <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][1]->url() }}" alt="" class="bottom-ad"></a>
            @endif
            <div class="twitter-box">
                <h2 class="sectionlabel is-primary">LATEST TWEETS</h2>
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>
            @if(isset($ads['cubes'][2]))
                    <a href="{{ $ads['cubes'][2]->provider_url }}"><img src="{{ $ads['cubes'][2]->url() }}" alt="" class="bottom-ad"></a>
            @endif

            @if(isset($ads['cubes'][3]))
                    <a href="{{ $ads['cubes'][3]->provider_url }}"><img src="{{ $ads['cubes'][3]->url() }}" alt="" class="bottom-ad"></a>
            @endif
        </div>
	</div>
@endsection