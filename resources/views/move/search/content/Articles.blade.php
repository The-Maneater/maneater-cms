<span class="is-move-red">{{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }}</span>
<h3>
    <a href="{{ $data->path() }}" class="is-black">{{ $data->title }}</a>
</h3>
{{--<h6>--}}
    {{--@if (count($data->writers) == 1)--}}
        {{--<span class="byline">By <a href="{{ $data->writers[0]->path() }}" class="is-m-green">{{ $data->writers[0]->fullName }}</a></span>--}}
    {{--@else--}}
        {{--<span class="byline">By--}}
            {{--@foreach ($data->writers as $writer)--}}
                {{--{{ $writer->first_name }} {{ $writer->last_name }}--}}
                {{--@if (!$loop->last)--}}
                    {{--and--}}
                {{--@endif--}}
            {{--@endforeach--}}
        {{--</span>--}}
    {{--@endif--}}
    {{--<span class="published"> | {{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }} </span>--}}
{{--</h6>--}}

<p>{{ $data->cDeck }}</p>