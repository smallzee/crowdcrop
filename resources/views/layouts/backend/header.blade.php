<!-- page sidebar -->
<div class="dev-page-sidebar">

    <div class="profile profile-transparent">
        <div class="profile-image">
            <img src="{{asset('assets/images/author.jpeg')}}">

            <div class="profile-status online"></div>
        </div>
        <div class="profile-info">
            <h4>{{ auth()->user()->name }} ({{ ucwords(auth()->user()->role->name) }})</h4>
        </div>
    </div>

    <ul class="dev-page-navigation">
        <li class="title">Navigation</li>
        <li>
            <a href="{{route('dashboard.index')}}"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
        </li>

        @if(auth()->user()->role_id == 1)
        <li>
            <a href="{{route('role.index')}}"><i class="fa fa-pagelines"></i> <span>Role</span></a>
        </li>

        <li>
            <a href="{{route('role.create')}}"><i class="fa fa-pagelines"></i> <span>Create New Role</span></a>
        </li>

        <li>
            <a href="#"><i class="fa fa-users"></i> <span>Farmers</span></a>
            <ul>
                @foreach(array('pending','approved','rejected') as $value)
                    <li><a href="{{route('farmers.show',$value)}}"><i class="fa fa-circle-o"></i> &nbsp; All {{ ucwords($value) }} Farmers</a></li>
                @endforeach
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-users"></i> <span>Administrative</span></a>
            <ul>
                <li><a href="{{route('administrative.index')}}"><i class="fa fa-circle-o"></i> &nbsp; All Admin</a></li>
                <li><a href="{{route('administrative.create')}}"><i class="fa fa-circle-o"></i> &nbsp; Create Admin</a></li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-users"></i> <span>Partners</span></a>
            <ul>
                <li><a href="{{route('partners.index')}}"><i class="fa fa-circle-o"></i> &nbsp; All Partners</a></li>
                <li><a href="{{route('partners.create')}}"><i class="fa fa-circle-o"></i> &nbsp; Create Partners</a></li>
            </ul>
        </li>

        <li>
            <a href="{{route('change-password.index')}}"><i class="fa fa-unlock"></i> <span>Change Password</span></a>
        </li>

        <li class="title">Settings</li>
        <li>
            <a href="{{route('settings.index')}}"><i class="fa fa-cogs"></i> <span>Website Settings</span></a>
        </li>
        @endif

        @if(auth()->user()->role_id == 2)
            <li>
                <a href="#"><i class="fa fa-users"></i> <span>Farmers</span></a>
                <ul>
                    @foreach(array('pending','approved','rejected') as $value)
                        <li><a href="{{route('farmers.show',$value)}}"><i class="fa fa-circle-o"></i> &nbsp; All {{ ucwords($value) }} Farmers</a></li>
                    @endforeach
                </ul>
            </li>

            <li><a href="{{route('partners.show',auth()->user()->partner_id)}}"><i class="fa fa-user"></i> &nbsp;  {{ ucwords(auth()->user()->partner->name) }} Profile</a></li>
        @endif

        <li>
            <a href="{{url('panel/logout')}}"><i class="fa fa-sign-out text-red"></i> <span>Logout</span></a>
        </li>

    </ul>

</div>
<!-- ./page sidebar -->
