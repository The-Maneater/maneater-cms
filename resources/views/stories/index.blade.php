@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-8">
            @if(isset($ads['banner'][0]))
                <a href="{{ $ads['banner'][0]->provider() }}"><img src="{{ $ads['banner'][0]->url() }}" alt="" class="banner-bottom-ad"></a>
            @endif
            <div class="columns">
                <div class="column is-8">
                    <div id="top_story_0" class="ui-tabs-panel">
                        @if(isset($frontPageStories[1]))
                            @if(count($frontPageStories[1]->headerPhotos) > 0)
                                <img class="front-page-images" src="{{ $frontPageStories[1]->headerPhotos[0]->path() }}" alt="">
                            @endif
                            <h1><a href="{{ $frontPageStories[1]->path() }}">{{ $frontPageStories[1]->title }}</a></h1>
                            <div class="topcaption">{{ $frontPageStories[1]->cDeck }}</div>
                        @endif
                    </div>
                    <div id="top_story_3" class="ui-tabs-panel">
                        @if(isset($frontPageStories[4]))
                            @if(count($frontPageStories[4]->headerPhotos) > 0)
                                    <img class="smaller-front-image" src="{{ $frontPageStories[4]->headerPhotos[0]->path() }}" alt="">
                                @endif
                                <div>
                                    <h1><a href="{{ $frontPageStories[4]->path() }}">{{ $frontPageStories[4]->title }}</a></h1>
                                    <div class="topcaption">{{ $frontPageStories[4]->cDeck }}</div>
                                </div>
                        @endif
                    </div>
                    <div id="top_story_4" class="ui-tabs-panel">
                        @if(isset($frontPageStories[5]))
                            @if(count($frontPageStories[5]->headerPhotos) > 0)
                                <img class="smaller-front-image" src="{{ $frontPageStories[5]->headerPhotos[0]->path() }}" alt="">
                            @endif
                            <div>
                                <h1><a href="{{ $frontPageStories[5]->path() }}">{{ $frontPageStories[5]->title }}</a></h1>
                                <div class="topcaption">{{ $frontPageStories[5]->cDeck }}</div>
                            </div>
                        @endif
                    </div>
                    {{--<div id="top_story_0" class="ui-tabs-panel">--}}
                        {{--<a href="http://www.themaneater.com/stories/2017/4/2/center-responsibility-and-discovery-halls-will-clo/"><img class="topphoto" src="http://www.themaneater.com/media/2017/0402/photos/Centerkaitlin_jpg_900x600_q85_jpg_600x400_crop_q85.jpg" alt="Center, Responsibility and Discovery halls will close next year"></a>--}}
                        {{--<h1><a href="http://www.themaneater.com/stories/2017/4/2/center-responsibility-and-discovery-halls-will-clo/">Center, Responsibility and Discovery halls will close next year</a></h1>--}}
                        {{--<div class="topcaption">An email from Frankie Minor to student staff said the decision to take the halls offline was due to low freshman enrollment.</div>--}}
                    {{--</div>--}}
                    {{--<div id="top_story_3" class="ui-tabs-panel">--}}
                        {{--<a href="http://www.themaneater.com/stories/2017/3/18/sections-lowry-mall-be-closed-repairs-until-march-/"><img class="topphoto" src="http://www.themaneater.com/media/2017/0319/photos/LowryMall_closing_Burdette-Lanne_jpg_600x400_crop_q85.jpg" alt="Sections of Lowry Mall to be closed for repairs until March 2018"></a>--}}
                        {{--<h1><a href="http://www.themaneater.com/stories/2017/3/18/sections-lowry-mall-be-closed-repairs-until-march-/">Sections of Lowry Mall to be closed for repairs until March 2018</a></h1>--}}
                        {{--<div class="topcaption">The steam tunnels underneath the walkway date back to 1923.</div>--}}
                    {{--</div>--}}
                    {{--<div id="top_story_4" class="ui-tabs-panel">--}}
                        {{--<a href="http://www.themaneater.com/stories/2017/3/24/michael-porter-jr-verbally-commits-missouri/"><img class="topphoto" src="http://www.themaneater.com/media/2017/0326/photos/MichaelPorterJr_Courtesyofespn.com_copy_jpg_600x400_crop_q85.jpg" alt="Michael Porter Jr. verbally commits to Missouri"></a>--}}
                        {{--<h1><a href="http://www.themaneater.com/stories/2017/3/24/michael-porter-jr-verbally-commits-missouri/">Michael Porter Jr. verbally commits to Missouri</a></h1>--}}
                        {{--<div class="topcaption">Porter Jr., whom ESPN deemed the No. 1 recruit in the 2017 class nationwide, will come back to Columbia. </div>--}}
                    {{--</div>--}}
                </div>
                <div class="column is-4">
                    <div id="top_story_1" class="ui-tabs-panel">
                        @if(isset($frontPageStories[2]))
                            @if(count($frontPageStories[2]->headerPhotos) > 0)
                                <img class="front-page-images" src="{{ $frontPageStories[2]->headerPhotos[0]->path() }}" alt="">
                            @endif
                            <h1><a href="{{ $frontPageStories[2]->path() }}">{{ $frontPageStories[2]->title }}</a></h1>
                            <div class="topcaption">{{ $frontPageStories[2]->cDeck }}</div>
                        @endif
                    </div>
                    <div id="top_story_2" class="ui-tabs-panel">
                        @if(isset($frontPageStories[3]))
                            @if(count($frontPageStories[3]->headerPhotos) > 0)
                                <img class="front-page-images" src="{{ $frontPageStories[3]->headerPhotos[0]->path() }}" alt="">
                            @endif
                                <h1><a href="{{ $frontPageStories[3]->path() }}">{{ $frontPageStories[3]->title }}</a></h1>
                            <div class="topcaption">{{ $frontPageStories[3]->cDeck }}</div>
                        @endif
                    </div>
                    {{--<div id="top_story_1" class="ui-tabs-panel">--}}
                        {{--<a href="http://www.themaneater.com/stories/2017/3/23/whats-photo/"><img class="topphoto" src="http://www.themaneater.com/media/2017/0323/photos/_MG_0321_1_JPG_600x400_crop_q85.jpg" alt="What's up in photo?"></a>--}}
                        {{--<h1><a href="http://www.themaneater.com/stories/2017/3/23/whats-photo/">What's up in photo?</a></h1>--}}
                        {{--<div class="topcaption">February feature work from the Photography Department. </div>--}}
                    {{--</div>--}}
                    {{--<div id="top_story_2" class="ui-tabs-panel">--}}
                        {{--<a href="http://www.themaneater.com/stories/2017/3/15/missouri-hires-cuonzo-martin-mens-basketball-coach/"><img class="topphoto" src="http://www.themaneater.com/media/2017/0315/photos/Cuonzo_Martin_jpg_600x400_crop_q85.jpg" alt="Missouri hires Cuonzo Martin as men’s basketball coach"></a>--}}
                        {{--<h1><a href="http://www.themaneater.com/stories/2017/3/15/missouri-hires-cuonzo-martin-mens-basketball-coach/">Missouri hires Cuonzo Martin as men’s basketball coach</a></h1>--}}
                        {{--<div class="topcaption">Martin resigned from his role as the head coach of California on Wednesday.</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="columns">
                <div class="column is-6">
                    <a class="sectionlabel" href="/stories/">Latest</a>
                    <ul class="sectionlist">
                        @foreach($latest as $story)
                            <li><a class="is-m-green" href="{{ $story->path() }}">{{ $story->full_title }}</a></li>
                        @endforeach
                    </ul>
                    <div class="clippingfade"></div>
                </div>
                <div class="column is-6">
                    <div id="followus">
                        <a class="sectionlabel">Follow us</a>
                        <div>
                            <div class="sm-logos">
                                <a href="https://www.facebook.com/themaneaterMU" target="_blank"><img src="http://themaneater.com/media/style/2014-redesign/fb-logo.png"></a>
                                <a href="https://twitter.com/TheManeater" target="_blank"><img src="http://themaneater.com/media/style/2014-redesign/tw-logo.png"></a>
                            </div>

                            <a class="lg-logos" href="http://themaneater.us11.list-manage.com/subscribe?u=081984b99094be57218546c7f&amp;id=92c6334ec3" target="_blank"><img src="http://www.themaneater.com/media/frontpage/ManeaterWebAd.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($ads['cubes'][0]))
                <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="bottom-ad"></a>
            @endif
        </div>

    </div>
    <hr>
    <div class="columns">
        <div class="column is-8">
            <div class="columns sectionArticles">
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Campus</a>
                    <ul class="sectionlist sectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li >
                                @if($i == 0 && count($sections['campus'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['campus'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['campus'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ $sections['campus'][$i]->path() }}" class="is-info is-black">{{ $sections['campus'][$i]->title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/uwire/">UWire</a>
                    <ul class="sectionlist sectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li>
                                @if($i == 0 && count($sections['unews'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['unews'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['unews'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ $sections['unews'][$i]->path() }}" class="is-black">{{ $sections['unews'][$i]->title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/sports/">Sports</a>
                    <ul class="sectionlist sectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li>
                                @if($i == 0 && count($sections['sports'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['sports'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['sports'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ $sections['sports'][$i]->path() }}" class="is-black">{{ $sections['sports'][$i]->title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="columns sectionArticles">
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/projects/">Projects</a>
                    <ul class="sectionlist sectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li>
                                @if($i == 0 && count($sections['projects'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['projects'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['projects'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ $sections['projects'][$i]->path() }}" class="is-black">{{ $sections['projects'][$i]->title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/opinion/">Opinion</a>
                    <ul class="sectionlist ectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li>
                                @if($i == 0 && count($sections['opinion'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['opinion'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['opinion'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ $sections['opinion'][$i]->path() }}" class="is-black">{{ $sections['opinion'][$i]->full_title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="{{ config('app.move_url') }}">MOVE</a>
                    <ul class="sectionlist sectionlist-short">
                        @for($i = 0; $i<5; $i++)
                            <li>
                                @if($i == 0 && count($sections['move'][$i]->headerPhotos) > 0 )
                                    <img class="front-page-image" src="{{ $sections['move'][$i]->headerPhotos[0]->path() }}" alt="">
                                @elseif($i == 0 && count($sections['opinion'][$i]->graphics) > 0 )
                                    <img class="front-page-image" src="{{ $sections['move'][$i]->graphics[0]->linkPath() }}" alt="">
                                @endif
                                <a href="{{ config('app.move_url') . $sections['move'][$i]->path() }}" class="is-black">{{ $sections['move'][$i]->title }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>

        </div>
        <div class="column is-4">

            <h2 class="sectionlabel is-primary">Current issue</h2>
            <div class="sectionbox issu">
                <div id="issue-link">
                    <a href="{{ $issue->issu_url }}"><img src="{{ $issue->layout->img_link }}" alt="Maneater front page"></a>
                </div>
                <ul>
                    <li class="bullet"><a href="/issues/{{ $issue->id }}/">{{ $issue->issue_name }}</a></li>
                    <li class="bullet"><a href="http://themaneater.com/layouts/">Sort by page</a></li>
                    <li class="bullet"><a href="http://themaneater.com/games/">Game Answers</a></li>
                </ul>
            </div>
            <div class="twitter-box">
                <h2 class="sectionlabel is-primary">LATEST TWEETS</h2>
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/TheManeater">Tweets by TheManeater</a>
            </div>
            @if(isset($ads['cubes'][1]))
                <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][1]->url() }}" alt="" class="top-ad"></a>
            @endif
        </div>
    </div>
@endsection