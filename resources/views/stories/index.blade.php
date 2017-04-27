@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-5">
            <div id="top_story_0" class="ui-tabs-panel">
                <img src="{{ $frontPageStories[1]->headerPhotos[0]->path() }}" alt="">
                <h1><a href="{{ $frontPageStories[1]->path() }}}">{{ $frontPageStories[1]->title }}</a></h1>
                <div class="topcaption">{{ $frontPageStories[1]->cDeck }}</div>
            </div>
            <div id="top_story_3" class="ui-tabs-panel">
                <img src="{{ $frontPageStories[4]->headerPhotos[0]->path() }}" alt="">
                <h1><a href="{{ $frontPageStories[4]->path() }}}">{{ $frontPageStories[4]->title }}</a></h1>
                <div class="topcaption">{{ $frontPageStories[4]->cDeck }}</div>
            </div>
            <div id="top_story_4" class="ui-tabs-panel">
                <img src="{{ $frontPageStories[5]->headerPhotos[0]->path() }}" alt="">
                <h1><a href="{{ $frontPageStories[5]->path() }}}">{{ $frontPageStories[5]->title }}</a></h1>
                <div class="topcaption">{{ $frontPageStories[5]->cDeck }}</div>
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
        <div class="column is-3">
            <div id="top_story_1" class="ui-tabs-panel">
                <img src="{{ $frontPageStories[2]->headerPhotos[0]->path() }}" alt="">
                <h1><a href="{{ $frontPageStories[2]->path() }}}">{{ $frontPageStories[2]->title }}</a></h1>
                <div class="topcaption">{{ $frontPageStories[2]->cDeck }}</div>
            </div>
            <div id="top_story_2" class="ui-tabs-panel">
                <h1><a href="{{ $frontPageStories[3]->path() }}}">{{ $frontPageStories[3]->title }}</a></h1>
                <div class="topcaption">{{ $frontPageStories[3]->cDeck }}</div>
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
        <div class="column is-2">
            <a class="sectionlabel" href="/stories/">Latest</a>
            <ul class="sectionlist">
                @foreach($latest as $story)
                    <li><a href="{{ $story->path() }}">{{ $story->title }}</a></li>
                @endforeach
            </ul>
            <div class="clippingfade"></div>
        </div>
        <div class="column is-2">
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
    <hr>
    <div class="columns">
        <div class="column is-8">
            <div class="columns">
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Campus</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[0]->latestStories[$i]->path() }}">{{ $sections[0]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">UWire</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[1]->latestStories[$i]->path() }}">{{ $sections[1]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Sports</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[2]->latestStories[$i]->path() }}">{{ $sections[2]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="columns">
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Outlook</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[3]->latestStories[$i]->path() }}">{{ $sections[3]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Opinion</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[4]->latestStories[$i]->path() }}">{{ $sections[4]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
                <div class="column is-4">
                    <a class="sectionlabel" href="/section/campus/">Blogs</a>
                    <ul class="sectionlist">
                        @for($i = 0; $i<5; $i++)
                            <li><a href="{{ $sections[5]->latestStories[$i]->path() }}">{{ $sections[5]->latestStories[$i]->title }}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <h2 class="sectionlabel">Current issue</h2>
            <div class="sectionbox issu">
                <div id="issue-link">
                    <a href="http://issuu.com/themaneater/docs/vol83issue24"><img src="http://www.themaneater.com/media/2017/0322/pages/01page01_pdf_250x500_q85.jpg" alt="Maneater front page"></a>
                </div>
                <ul>
                    <li class="bullet"><a href="/issues/1961/">Maneater v. 83, Issue 24</a></li>
                    <li class="bullet"><a href="http://themaneater.com/layouts/">Sort by page</a></li>
                    <li class="bullet"><a href="http://themaneater.com/games/">Game Answers</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection