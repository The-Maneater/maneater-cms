@extends('layouts.app')

@section('content')
    <div class="content active-staff">
        <h1>Active Staff</h1>
        <div class="columns">
            @foreach($staff as $staffer)
                @if($loop->index == 0 || $loop->index % 15 == 0)
                    <div class="column is-2">
                        <ul>
                @endif
                            <li><a href="{{ $staffer->path() }}">{{ $staffer->fullName }}</a></li>
                @if($loop->last || $loop->index % 15 == 14)
                        </ul>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="navigation">
            {{ $staff->links('staff.paginator') }}
        </div>
    </div>
@endsection