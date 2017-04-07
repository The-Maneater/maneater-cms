<div class="navigation">
    {{--{!! Menu::admin() !!}--}}
    <aside class="menu">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/admin/move') }}">MOVE</a></li>
            <li><a href="{{ url('/admin/newsletter') }}">Newsletter</a></li>
        </ul>
        <p class="menu-label">
            Core
        </p>
        <ul class="menu-list">
            <li><a href="{{ url('/admin/core/stories') }}">Articles</a></li>
            <li><a href="{{ url('/admin/core/events') }}">Events</a></li>
            <li><a href="{{ url('/admin/core/layouts') }}">Layouts</a></li>
            <li><a href="{{ url('/admin/core/web-fronts') }}">Web Fronts</a></li>
            <li><a href="{{ url('/admin/core/photos') }}">Photos</a></li>
            <li><a href="{{ url('/admin/core/graphics') }}">Graphics</a></li>
            <li><a href="{{ url('/admin/core/polls') }}">Polls</a></li>
            <li><a href="{{ url('/admin/core/issues') }}">Issues</a></li>
            <li><a href="{{ url('/admin/core/volumes') }}">Volumes</a></li>
            <li><a href="{{ url('/admin/core/sections') }}">Sections</a></li>
            {{--<li>--}}
                {{--<a class="is-active">Manage Your Team</a>--}}
                {{--<ul>--}}
                    {{--<li><a>Members</a></li>--}}
                    {{--<li><a>Plugins</a></li>--}}
                    {{--<li><a>Add a member</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        <p class="menu-label">
            Staff
        </p>
        <ul class="menu-list">
            <li><a href="{{ url('/admin/staff/positions') }}">Positions</a></li>
            <li><a href="{{ url('/admin/staff/staffers') }}">Staffers</a></li>
            <li><a href="{{ url('/admin/staff/users') }}">Users</a></li>
        </ul>
        <p class="menu-label">
            Advertising
        </p>
        <ul class="menu-list">
            <li><a href="{{ url('/admin/advertising/ads') }}">Ads</a></li>
            <li><a href="{{ url('/admin/advertising/classifieds') }}">Classifieds</a></li>
        </ul>
    </aside>
</div>