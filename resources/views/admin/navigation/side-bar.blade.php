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
        @ability('super,ed-board,visual-staff', 'manage-stories,manage-events,manage-layouts,manage-webfronts,manage-photos,manage-graphics,manage-polls,manage-issues,manage-voluems,manage-sections')
        <p class="menu-label">
            Core
        </p>
        <ul class="menu-list">
            @permission('manage-stories')<li><a href="{{ url('/admin/core/stories') }}">Articles</a></li>@endpermission
            @permission('manage-events')<li><a href="{{ url('/admin/core/events') }}">Events</a></li>@endpermission
            @permission('manage-layouts')<li><a href="{{ url('/admin/core/layouts') }}">Layouts</a></li>@endpermission
            @permission('manage-webfronts')<li><a href="{{ url('/admin/core/web-fronts') }}">Web Fronts</a></li>@endpermission
            @permission('manage-photos')<li><a href="{{ url('/admin/core/photos') }}">Photos</a></li>@endpermission
            @permission('manage-graphics')<li><a href="{{ url('/admin/core/graphics') }}">Graphics</a></li>@endpermission
            @permission('manage-polls')<li><a href="{{ url('/admin/core/polls') }}">Polls</a></li>@endpermission
            @permission('manage-issues')<li><a href="{{ url('/admin/core/issues') }}">Issues</a></li>@endpermission
            @permission('manage-volumtes')<li><a href="{{ url('/admin/core/volumes') }}">Volumes</a></li>@endpermission
            @permission('manage-sections')<li><a href="{{ url('/admin/core/sections') }}">Sections</a></li>@endpermission
            {{--<li>--}}
                {{--<a class="is-active">Manage Your Team</a>--}}
                {{--<ul>--}}
                    {{--<li><a>Members</a></li>--}}
                    {{--<li><a>Plugins</a></li>--}}
                    {{--<li><a>Add a member</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        @endability
        @ability('super,exec,ed-board', 'manage-positions,manage-staffers,manage-users')
        <p class="menu-label">
            Staff
        </p>
        <ul class="menu-list">
            @permission('manage-positions')<li><a href="{{ url('/admin/staff/positions') }}">Positions</a></li>@endpermission
            @permission('manage-staffers')<li><a href="{{ url('/admin/staff/staffers') }}">Staffers</a></li>@endpermission
            @permission('manage-users')<li><a href="{{ url('/admin/staff/users') }}">Users</a></li>@endpermission
        </ul>
        @endability
        @ability('super,business-manager,business_staff', 'manage-ads,manage-classifieds')
        <p class="menu-label">
            Advertising
        </p>
        <ul class="menu-list">
            @permission('manage-ads')<li><a href="{{ url('/admin/advertising/ads') }}">Ads</a></li>@endpermission
            @permission('manage-classifieds')<li><a href="{{ url('/admin/advertising/classifieds') }}">Classifieds</a></li>@endpermission
        </ul>
        @endability
        @ability('super,exec', 'manage-site,manage-flatpages')
        <p class="menu-label">
            Site Administration
        </p>
        <ul class="menu-list">
            <li><a href="">Menus</a></li>
            <li><a href="{{ url('/admin/site/flatpages') }}">Flatpages</a></li>
        </ul>
        @endability
    </aside>
</div>