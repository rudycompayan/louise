<ul class="sidebar-nav">
    <li @if($pageName == 'dashboard') class="active" @endif>
        <a href="{{ route('admin.dashboard') }}">
            <div class="icon">
                <i class="fa fa-tasks" aria-hidden="true"></i>
            </div>
            <div class="title">Dashboard</div>
        </a>
    </li>
    <li class="dropdown @if($pageName == 'user') active @endif">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="title">Users</div>
        </a>
        <div class="dropdown-menu">
            <ul>
                <li class="section"><i class="fa fa-user" aria-hidden="true"></i> <strong>Actions</strong></li>
                <li><a href="{{ route('admin.user.add') }}">Add New User</a></li>
                <li><a href="{{ route('admin.user.index') }}">View All</a></li>
            </ul>
        </div>
    </li>
</ul>