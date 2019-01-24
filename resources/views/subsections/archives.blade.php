@extends('layouts._maneater')

@section('title')
Maneater | {{ $sectionName }} Archives
@endsection

@section('scripts')

    <script type="text/javascript" src="/js/section.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-9">
            <h1 id="archive-header" class="ml-3">
                {{ $sectionName }} Archives
            </h1>
            @foreach($stories as $story)
            	<p class="published-date pl-4">{{ date_format(date_create($story->publish_date), 'M. d, Y') }}</p>
            	<div class="row mb-3">
            		<div class="col-3">
		            	@if(count($story->headerPhotos) > 0)
		                    <figure class="crop-archive pl-3">
		                        <img src="{{ $story->headerPhotos[0]->path() }}" alt="">
		                        
		                    </figure>
		                @elseif(count($story->graphics) > 0 )
		                    <figure class="crop-archive pl-3">
		                        <img src="{{ $story->graphics[0]->linkPath() }}" alt="">
		                    </figure>
		                @else
		                    <figure class="crop-archive pl-3">
		                        <img src="http://themaneater.com/media/2018/927/photos/placeholder image.jpg" alt="">
		                    </figure>
		                @endif
	            	</div>

	            	<div class="col-9">
	            		<a class="archive-link" href="{{ $story->path() }}">
		                	<p class="archive-story-title">{{ $story->title }}</p>
		                	<p>{{ $story->cDeck }}</p>
	                	</a>
	            	</div>
            	</div>
            	
            	
            @endforeach
            <div class="ml-3">
            	{{ $stories->links('staff.paginator') }}
        	</div>
        </div>
        <div class="col-md-3 mt-3 subSectionSidebar">
                <div class="twitter-box">
                    <a class="twitter-timeline" data-height="80vh" data-theme="dark" data-border-color="#2F7A32" data-link-color="#2F7A32" href="https://twitter.com/TheManeater?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets by TheManeater</a>
                </div>  
                <div id="ads-container">
                    @if(isset($ads['cubes'][0]))
                        @if(!is_null($ads['cubes'][0]->raw_content))
                            {!! $ads['cubes'][0]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][0]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                        @endif
                    @else
                        <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                    @endif

                    @if(isset($ads['cubes'][1]))
                        @if(!is_null($ads['cubes'][1]->raw_content))
                            {!! $ads['cubes'][1]->raw_content !!}
                        @else
                            <a href="{{ $ads['cubes'][1]->provider_url }}"><img src="{{ $ads['cubes'][0]->url() }}" alt="" class="cubeAd"></a>
                        @endif
                    @else
                        <a href="https://www.themaneater.com/about/advertising"><img class="cubedAd mt-3" src="https://themaneater.com/media/2018/37/ads/cube%20house%20ad%20design.jpg" alt=""></a>
                    @endif
                </div>
            </div>
    </div>


@endsection