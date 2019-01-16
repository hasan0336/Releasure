<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="index.html#about_us">About Us</a></li>
        <li><a href="index.html#what_we_do">What We Do</a></li>
        <li><a href="{{route('featured_artist')}}">Featured Artist</a></li>
        <li><a href="index.html#contact">Contact</a></li>
        <li>
            <a class="dropdown-toggle" data-toggle="dropdown">

                <div class="hidden-xs">{{Auth::user()->name}}&emsp;
                    <img src="{{url('/uploads/'.Auth::user()->profile_picture)}}" class="img-circle" width="25" height="25" alt="User Image">
</div>
            </a>

            <ul class="dropdown-menu">
                <li class="user-header">
                    <img src="{{url('/uploads/'.Auth::user()->profile_picture)}}" class="img-circle img-responsive" style="margin:0 auto" alt="User Image">
                    <p>{{Auth::user()->name}}<small>{{Auth::user()->email}}</small></p>
                </li>

                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" data-toggle="modal" data-target="#myModal_header" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <form id="demo-2" class="search-bar-setting">
                <input type="search">
            </form>
        </li>
    </ul>
</div>