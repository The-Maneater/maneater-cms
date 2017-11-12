@extends('layouts.move')

@section('content')
    <div>
        <div class="columns">
            @if(count($story->headerPhotos) > 0)
                <div class="column">
                    <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
                </div>
            @endif
            <div class="column">
                <p class="article-category"><a href="{{ $story->section->path() }}" class="is-move-red">{{ $story->section->name }}</a></p>
                <h2>{{ $story->title }}</h2>
                <div class="cdeck">
                    <p>{{ $story->cDeck }}</p>
                </div>
                <div class="meta-box">
                    @if (count($story->writers) == 1)
                        <p class="byline">By <a href="{{ $story->writers[0]->path() }}" class="is-move-red">{{ $story->writers[0]->fullName }}</a></p>
                    @else
                        <p class="byline">By
                            @foreach ($story->writers as $writer)
                                <a href="{{ $writer->path() }}" class="is-move-red">{{ $writer->fullName }}</a>
                                @if (!$loop->last)
                                    and
                                @endif
                            @endforeach
                        </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-4">
                <div class="section-break">
                    <h2>EVENTS</h2>
                </div>
                <p>For some reason, there aren't any events to display here.</p>
                <div class="section-break">
                    <h2>FOLLOW US</h2>
                </div>
                <div class="social is-flex">
                    <div class="is-flex-justify-center is-flex-row is-full-width">
                        <a class="sm-logos" href="https://www.facebook.com/MOVEManeater" target="_blank"><img src="http://themaneater.com/media/style/2014-redesign/fb-logo.png" height="50px"></a>
                        <a class="sm-logos" href="https://twitter.com/movemaneater" target="_blank"><img src="http://themaneater.com/media/style/2014-redesign/tw-logo.png" height="50px"></a>
                    </div>
                </div>
                <div class="section-break">
                    <h2>More Stories</h2>
                </div>
                <div class="related">
                    <ol>
                        @foreach($relatedArticles as $article)
                            <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="column is-8 story-body">
                {!! Markdown::parse($story->body) !!}
                <div class="meta-box"></div>
                {{--<div id="article-share" class="meta-box">--}}
                    {{--<!-- AddThis Button BEGIN -->--}}
                    {{--<div class="addthis_toolbox addthis_default_style addthis_32x32_style">--}}
                        {{--<a class="addthis_button_facebook at300b" title="Facebook" href="#"><span class="at-icon-wrapper" style="background-color: rgb(59, 89, 152); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Facebook" alt="Facebook" style="width: 32px; height: 32px;" class="at-icon at-icon-facebook"><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a>--}}
                        {{--<a class="addthis_button_twitter at300b" title="Twitter" href="#"><span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Twitter" alt="Twitter" style="width: 32px; height: 32px;" class="at-icon at-icon-twitter"><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a>--}}
                        {{--<a class="addthis_button_google_plusone_share at300b" target="_blank" title="Google+" href="#"><span class="at-icon-wrapper" style="background-color: rgb(220, 78, 65); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Google+" alt="Google+" style="width: 32px; height: 32px;" class="at-icon at-icon-google_plusone_share"><g><path d="M12 15v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12zm15 0h-2v-2h-2v2h-2v2h2v2h2v-2h2v-2z" fill-rule="evenodd"></path></g></svg></span></a>--}}
                        {{--<a class="addthis_button_email at300b" target="_blank" title="Email" href="#"><span class="at-icon-wrapper" style="background-color: rgb(132, 132, 132); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Email" alt="Email" style="width: 32px; height: 32px;" class="at-icon at-icon-email"><g><g fill-rule="evenodd"></g><path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path><path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path></g></svg></span></a>--}}
                        {{--<a class="addthis_button_print at300b" title="Print" href="#"><span class="at-icon-wrapper" style="background-color: rgb(115, 138, 141); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Print" alt="Print" style="width: 32px; height: 32px;" class="at-icon at-icon-print"><g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g></svg></span></a>--}}
                        {{--<a class="addthis_button_compact at300m" href="#"><span class="at-icon-wrapper" style="background-color: rgb(255, 101, 80); line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="More" alt="More" style="width: 32px; height: 32px;" class="at-icon at-icon-addthis"><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span></a><a class="addthis_counter addthis_bubble_style" href="#" style="display: inline-block;" tabindex="1000"><a class="addthis_button_expanded" target="_blank" title="More" href="#">15</a><a class="atc_s addthis_button_compact">Share<span></span></a></a>--}}
                        {{--<div class="atclear"></div></div>--}}
                    {{--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>--}}
                    {{--<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52bcbaa864f69d3e"></script>--}}
                    {{--<!-- AddThis Button END -->--}}
                {{--</div>--}}

                <div class="section-break">
                    <h2>More Stories</h2>
                </div>
                <div class="related">
                    <ol>
                        @foreach($relatedArticles as $article)
                            <li><a href="{{ $article->path() }}">{{ $article->title }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection