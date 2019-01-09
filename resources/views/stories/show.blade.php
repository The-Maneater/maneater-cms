@extends('layouts._maneater')

@section('title')
Maneater | {{ $story->full_title }}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">

            <div id="articleContent">
                <h3 id="articleTitle">{{ $story->full_title }}</h3>
                <h5 id="articleCDeck">{{ $story->cDeck }}</h5>



                <div id="articlePictureBox">
                    @if(count($story->headerPhotos) > 0)

                        <figure class="crop-article-photo">
                            <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
                        </figure>

                        @if($story->headerPhotos[0]->static_byline === null)
                            <div class="articlePhotoCaptionBox">
                                <span class="articlePhotoCaption">{{ $story->headerPhotos[0]->description }}</span>
                                <span>
                                    <a href="{{$story->headerPhotos[0]->photographer->path()}}">{{ $story->headerPhotos[0]->photographer->fullName }}</a> / {{ $story->headerPhotos[0]->photographer->photo_pos }}
                                </span>
                            </div>
                        @else
                            <div class="articlePhotoCaptionBox">
                                <span class="articlePhotoCaption">{{ $story->headerPhotos[0]->description }}</span>
                                <span>
                                    {{ $story->headerPhotos[0]->static_byline }}
                                </span>
                            </div>
                        @endif
                    @elseif(count($story->graphics) > 0)
                        <figure class="crop-article-photo">
                            <img src="{{ $story->graphics[0]->linkPath() }}" alt="">
                        </figure>
                        @if($story->graphics[0]->static_byline === null || $story->graphics[0]->static_byline === "")
                            <div class="articlePhotoCaptionBox">
                                <span>
                                    <a href="{{$story->graphics[0]->staffer->path()}}">{{ $story->graphics[0]->staffer->fullName }}</a> / Graphic Designer
                                </span>
                            </div>
                        @else
                            <div class="articlePhotoCaptionBox">
                                <span>{{ $story->graphics[0]->description }}</span>
                                <span>
                                    {{ $story->grahpics[0]->static_byline }}
                                </span>
                            </div>
                        @endif
                    @else
                        <figure class="crop-article-photo">
                            <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
                        </figure>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <section class='articleInfo'>
                            @if($story->type === "editorial")
                                <p class="disclaimer">Editorials represent the majority opinion of The Maneater editorial board.</p>
                            @elseif(count($story->writers) == 1)
                                <p class="byline">By <a href="{{ $story->writers[0]->path() }}" class="is-m-green">{{ $story->writers[0]->first_name }} {{ $story->writers[0]->last_name }}</a></p>
                            @elseif (count($story->writers) > 1)
                                <p class="byline">By
                                    @foreach ($story->writers as $writer)
                                        {{ $writer->first_name }} {{ $writer->last_name }}
                                        @if (!$loop->last)
                                            and
                                        @endif
                                    @endforeach
                                </p>
                            @else
                                <p class="byline">{{ $story->static_byline }}</p>
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
                    <div class="col-md-10">
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
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-12">
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
                                    <div class="formpadding"><input id="id_name" type="text" name="name" maxlength="50"></div> <label for="id_name" class="input">> NAME</label>
                                    <div class="formpadding"><input type="text" name="email" id="id_email"></div> <label for="id_email" class="input">> EMAIL ADDRESS</label>
                                    <div class="formpadding"><input type="text" name="url" id="id_url"></div> <label for="id_url" class="input">> WEBSITE</label>
                                </div>
                                <div id="textareafields">
                                    <div class="formpadding">
                                        <textarea id="id_comment" rows="10" cols="40" name="comment"></textarea>
                                    </div>
                                    <label for="id_comment" class="textarea">> COMMENT</label>
                                    <br>
                                    <input type="submit" name="post" class="submit" value="POST"> 
                                    <input type="submit" name="preview" class="submit" value="PREVIEW">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            @if(count($relatedArticles) > 0)
            <div class="relatedArticlesBox">

                <h2 class="relatedArticlesLabel">Related Articles</h2>
                <hr id="relatedArticlesHR">
                <ol id="relatedArticlesList">
                    @foreach($relatedArticles as $article)
                        <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                    @endforeach
                </ol>
            </div>
            @endif
            <div id="stickySideContent">
                @if(isset($ads['cubes'][0]))
                    @if(!is_null($ads['cubes'][0]->raw_content))
                        {!! $ads['cubes'][0]->raw_content !!}
                    @else
                        <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                    @endif
                @else
                    <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                @endif

                <div class="twitter-box mt-md-3">
                    <a class="twitter-timeline" data-height="500" data-theme="dark" data-border-color="#2F7A32" data-link-color="#2F7A32" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
                </div>
            </div>

        </div>
    </div>

@endsection