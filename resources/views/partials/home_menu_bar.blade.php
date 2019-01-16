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
                    <p>{{Auth::user()->name}}<small>{{Auth::user()->email}}</small><small>+0 00 000 0000</small><small>32-Lorem Ipsum, NY</small></p>
                </li>

                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" data-toggle="modal" data-target="#myModalEditProfile" class="btn btn-default btn-flat">Edit Profile</a>
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

<!-- Modal for Edit Profile -->
  <div class="modal fade" id="myModalEditProfile" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile</h4>
        </div>
        <div class="modal-body">
          <form action="/action_page.php">
          <div class="form-group">
            <label for="user_name">Name:</label>
            <input type="text" class="form-control" id="user_name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="user_contact">Contact No:</label>
            <input type="text" class="form-control" id="user_contact" placeholder="Contact No">
          </div>
          <div class="form-group">
            <label for="user_address">Address:</label>
            <input type="text" class="form-control" id="user_address" placeholder="Address">
          </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>