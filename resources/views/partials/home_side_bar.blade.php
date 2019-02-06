    <div class="collapse navbar-collapse padding0" id="sideNavbar">
    <div class="well sidebar-nav left-sidebar" data-spy="affix" data-offset-top="110">
        <ul class="nav nav-list">
            <li class="active">
                <a href="{{route('home')}}">
                    <i class="glyphicon glyphicon-home"></i>
                    &nbsp; Home
                </a>
            </li>

            <li>
                @if(Auth::user()->user_type == 'artist')
                    <a href="{{route('sales')}}">
                        <i class="glyphicon glyphicon-stats"></i>
                        &nbsp; Sales
                    </a>
                @endif
            </li>
            <li>
                <a href="{{route('featured_artist')}}">
                    <i class="glyphicon glyphicon-star-empty"></i>
                    &nbsp; Featured Artist
                </a>
            </li>
            <li>
                <a href="{{route('purchases')}}">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    &nbsp; Purchases
                </a>
            </li>
            <li>
                <a href="{{route('messages')}}">
                    <i class="glyphicon glyphicon-envelope"></i>
                    &nbsp; Messages
                </a>
            </li>
            <li>
                <a href="{{route('payment')}}">
                    <i class="glyphicon glyphicon-credit-card"></i>
                    &nbsp; Payment
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i>
                    &nbsp; Settings
                    <span class="glyphicon glyphicon-chevron-down setting-btn pull-right"></span>
                </a>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; Term & Condition
                </a>

                <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; Privacy Policy
                </a>

                <a href="#">
                    <i class="glyphicon glyphicon-record"></i>
                    &nbsp; FAQs
                </a>
            </li>
        </ul>
    </div><!--/.well -->
</div>
</div>