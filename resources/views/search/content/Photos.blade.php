<div class="archive-columns columns">
    <div class="column is-8">
        <b>{{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }}</b>: <span>
       {{ $data->description }}
       </span>
        <br>
        @if($data->staffer_id !== null)
            <p>Taken by: <a href="{{ $data->photographer->path() }}" class="is-m-green">{{ $data->photographer->fullName }}</a></p>
        @endif
    </div>
    <div class="column is-4">
        <img src="{{ $data->path() }}" class="archive-image" alt="">
    </div>
</div>ai