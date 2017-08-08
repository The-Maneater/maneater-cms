@extends('layouts.move')


@section('content')
    <div class="columns allStaff">
        <div class="column is-4">EXTRA CONTENT</div>
        @foreach($staff as $staffer)
            @if($loop->index == 0 || $loop->index % 25 == 0)
                <div class="column is-2">
                    <h1>ACTIVE STAFF</h1>
                    <ul>
                        @endif
                        <li><a href="{{ $staffer->path() }}">{{ $staffer->fullName }}</a></li>
                        @if($loop->last || $loop->index % 25 == 24)
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
    <div class="navigation">
        {{ $staff->links('staff.paginator') }}
    </div>
@endsection