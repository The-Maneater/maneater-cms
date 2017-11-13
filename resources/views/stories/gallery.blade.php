@extends('layouts.app')

@section('content')
    <div class="gallery-wrapper">
        <div class="content gallery-content">
            <h1>Gallery: {{ $story->title }}</h1>
            <h3>{{ $story->cDeck }}</h3>
            <p class="byline">By
                <a href="{{ $story->writers[0]->path() }}" class="is-m-green">
                    {{ $story->writers[0]->first_name }} {{ $story->writers[0]->last_name }}
                </a> | {{ $story->formattedPublishDate->format('M. d, Y') }}
            </p>
            <div class="share">
                <p>Share: <a href="{{ $urls['facebook'] }}" target="_blank">Facebook</a> / <a href="{{ $urls['twitter'] }}" target="_blank">Twitter</a> / <a href="{{ $urls['google'] }}" target="_blank">Google+</a></p>
            </div>
            <div class="body">
                {!! Markdown::parse($story->body) !!}
                @foreach($story->headerPhotos as $photo)
                    <div class="main-picture-wrap">
                        <img src="{{ $photo->path() }}" alt="">
                    </div>
                    @if($photo->static_byline === null)
                        <div class="caption">
                            <span>{{ $photo->description }}</span>
                            <span class="all-caps">
                                    <a href="{{$photo->photographer->path()}}">{{ $photo->photographer->fullName }}</a> / {{ $photo->photographer->photo_pos }}
                                </span>
                        </div>
                    @else
                        <div class="caption">
                            <span>{{ $photo->description }}</span>
                            <span class="all-caps">
                                    {{ $photo->static_byline }}
                                </span>
                        </div>
                    @endif
                @endforeach
            </div>
            @if(isset($ads['banner'][0]))
                <div class="center-ad">
                    <a href="{{ $ads['banner'][0]->provider_url }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-top-ad"></a>
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
                    <div class="columns">
                        <div id="inputfields" class="column is-3">
                            <div style="display:none;"><input type="text" name="emailconfirm" id="id_emailconfirm"></div>
                            <div class="formpadding"><input id="id_name" type="text" name="name" maxlength="50"></div> <label for="id_name" class="input">Name</label>
                            <div class="formpadding"><input type="text" name="email" id="id_email"></div> <label for="id_email" class="input">Email address</label>
                            <div class="formpadding"><input type="text" name="url" id="id_url"></div> <label for="id_url" class="input">Website</label>
                        </div>
                        <div id="textareafields" class="column is-9">
                            <div class="formpadding">
                                <textarea id="id_comment" rows="10" cols="40" name="comment"></textarea>
                            </div>
                            <label for="id_comment" class="textarea">Comment</label>
                            <input type="submit" name="post" class="submit" value="Post"> <input type="submit" name="preview" class="submit" value="Preview">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection