<div class="columns">
    <div class="is-10">
        <b>{{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }}</b>: <span>
       {{ $data->description }}
       </span>
        @if($data->staffer_id !== null)
            <p>{{ $data->photographer->fullName }}</p>
        @endif
    </div>
    <div class="is-2">
        <img src="{{ $data->path() }}" alt="">
    </div>
</div>