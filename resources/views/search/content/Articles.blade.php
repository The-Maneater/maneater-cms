<h3>
    <a href="{{ $data->path() }}">{{ $data->title }}</a>
</h3>
<h6>
    @if (count($data->writers) == 1)
        <span class="byline">By <a href="{{ $data->writers[0]->path() }}" class="is-m-green">{{ $data->writers[0]->fullName }}</a></span>
    @else
        <span class="byline">By
            @if(count($data->writers) > 0)
                @foreach ($data->writers as $writer)
                    <a href="{{ $writer->path() }}" class="is-m-green">{{ $writer->first_name }} {{ $writer->last_name }}</a>
                    @if (!$loop->last)
                        and
                    @endif
                @endforeach
            @elseif($data->static_byline !== null)
                {{ $data->static_byline }}
            @endif
        </span>
    @endif
    <span class="published"> | {{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }} </span>
</h6>

<p>{{ $data->cDeck }}</p>