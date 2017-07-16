<div class="columns">
    <div class="is-10">
        <b>{{ \Carbon\Carbon::parse($data->publish_date)->format('M. d, Y') }}</b>: <span>
       {{ $data->description }}
       </span>
        <p>{{ $data->staffer->fullName }}</p>
    </div>
    <div class="is-2">
        <img src="{{ $data->link }}" alt="">
    </div>
</div>