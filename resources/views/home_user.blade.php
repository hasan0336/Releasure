<!DOCTYPE html>
<html lang="en">
@include('partials.home_header')

  <body>

  <div class="container">
    <nav class="navbar navbar-inverse navbar-setting">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo.png')}}" class="img-responsive img-rounded" alt="Releasur Logo">
          </a>
        </div>
        @include('partials.home_menu_bar')
      </div>
    </nav>

    <div class="container margin-top20">
      <div class="col-sm-12 col-md-12 col-lg-12">

        <!-- Sidebar menu starts here-->
        <div class="col-sm-2 col-md-2 col-lg-2">
          <div class="navbar-header left-nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sideNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                 
            </button>
            <h3 class="sidebar-nav-heading">Sidebar Menu</h3>
          </div>
          <div class="collapse navbar-collapse padding0" id="sideNavbar">
            <div class="well sidebar-nav left-sidebar" data-spy="affix" data-offset-top="110">
              <ul class="nav nav-list">
                <li class="active">
                  <a href="home.html">
                    <i class="glyphicon glyphicon-home"></i>
                    &nbsp; Home
                  </a>
                </li>
                <li>
                  <a href="sales.html">
                    <i class="glyphicon glyphicon-stats"></i>
                    &nbsp; Sales
                  </a></li>
                <li>
                  <a href="{{route('featured_artist')}}">
                    <i class="glyphicon glyphicon-star-empty"></i>
                    &nbsp; Featured Artist
                  </a>
                </li>
                <li>
                  <a href="purchases.html">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    &nbsp; Purchases
                  </a>
                </li>
                <li>
                  <a href="messages.html">
                    <i class="glyphicon glyphicon-envelope"></i>
                    &nbsp; Messages
                  </a>
                </li>
                <li>
                  <a href="payment.html">
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
        <!-- Sidebar menu ends here-->

        <!-- Follower menu starts here-->
        <div class="col-sm-2 col-md-2 col-lg-2 right-nav-top">
          <div class="navbar-header follower-nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rightNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                     
            </button>
            <h3 class="followers-nav-heading">Followers</h3>
          </div>
          <div class="collapse navbar-collapse padding0" id="rightNavbar">
            <div class="well sidebar-nav follower-sidebar" data-spy="affix" data-offset-top="110">
              <ul class="nav nav-list">
                <li><h3 class="follower-heading">Followers</h3></li>
                <li><a href="#"><img src="{{asset('img/user3.jpg')}}" class="img-circle">&emsp;<span class="follower-text">John Doe</span></a></li>
                <li><a href="#"><img src="{{asset('img/user3.jpg')}}" class="img-circle">&emsp;<span class="follower-text">Mark Spen</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Follower menu ends here-->

        <!-- Home Page Middle Section Starts-->
        <div class="col-sm-8 col-md-8 col-lg-8">
          <!-- Post editor starts here-->
          <form id="form_data">
            {{csrf_field()}}
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="post-editor-background">
              <div class="post-editor">
                <textarea class="textarea-editor" rows="5" id="editor" name="desc" placeholder="Type your text here..."></textarea>
              </div>

              <div class="post-editor-btn">
                <div class="pull-left">
                  <img src="{{asset('img/smile.png')}}" class="emoji-icon m-r-5" id="btn">
                  <input type="file" class="home-attachment">
                  <label for="home-attachment">
                    <input type="file" id="home-attachment" class="home-attachment">
                    <img src="{{asset('img/attachment.png')}}" width="15" class="m-r-5">
                  </label>
                  <form id="demo-3" class="demo-3"><input type="search"></form>
                  <!-- <img src="{{asset('img/dollar.png')}}" width="20"> -->
                </div>
                <div class="pull-right">
                  <input type="submit" class="btn btn-success btn-xs post-btn" value="Post">
                  {{--<a type="submit" class="btn btn-success btn-xs post-btn">Post</a>--}}
                </div>
              </div>
            </div>
          </div>
          </form>
          <!-- Post editor ends here-->

          <!-- Timeline starts here-->
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="timeline">
              <li>
                <div class="tldate">
                  <?php $current_date = date('Y'); ?>
                  {{ $current_date }}
                </div>
              </li>

              <li class="listing_data" id="listings_data">

              </li>
              <?php $odd = array();
                    $even = array(); ?>
              {{--{{dd($posts)}}--}}

                  @foreach($posts as $k => $post)
                    @if($post->year == $current_date)
                      @if($k % 2 == 1)
                        <li class="timeline-inverted">
                          <div class="tl-circ"></div>
                          <div class="timeline-panel">
                            @if(isset($post->attachment))
                              <img src="{{$post->attachment}}" class="img-responsive home-img">
                              <button class="btn btn-default buynow-btn">BUY NOW</button>
                            @endif
                            <h3>{{$post->name}}
                              <span>
                          <img src="{{url('/uploads/'.$post->profile_picture)}}" class="img-circle pull-right" width="35" height="35" alt="User Image">
                        </span>

                            </h3>
                            <p class="home-text">{{$post->description}}</p>
                            <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                            <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$post->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                          </div>
                        </li>
                      @endif
                      @if($k % 2 == 0)
                        <li>
                          <div class="tl-circ"></div>
                          <div class="timeline-panel">
                            @if(isset($post->attachment))
                              <img src="{{$post->attachment}}" class="img-responsive home-img">
                              <button class="btn btn-default buynow-btn">BUY NOW</button>
                            @endif
                            <h3>{{$post->name}}
                              <span>
                      <img src="{{url('/uploads/'.$post->profile_picture)}}" class="img-circle pull-right" width="35"  alt="User Image">
                    </span>
                            </h3>
                            <p class="home-text">{{$post->description}}</p>
                            <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                            <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$post->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                          </div>
                        </li>
                      @endif
                    @endif
              @endforeach
              
              <li><div class="tldate">Mar 2014</div></li>
              

              <li class="timeline-inverted">
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <img src="{{asset('img/art-gallery.jpg')}}" class="img-responsive home-img">
                  <button class="btn btn-default buynow-btn">BUY NOW</button>
                  <h3>John Doe
                    <span>
                      <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="home-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="home-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm <span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                </div>
              </li>
              <li>
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <img src="{{asset('img/art-gallery.jpg')}}" class="img-responsive home-img">
                  <button class="btn btn-default buynow-btn">BUY NOW</button>
                  <h3>John Doe
                    <span>
                      <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="home-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="home-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm <span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                </div>
              </li>
              
              <li><div class="tldate">Feb 2014</div></li>
              
              <li class="timeline-inverted">
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <img src="{{asset('img/art-gallery.jpg')}}" class="img-responsive home-img">
                  <button class="btn btn-default buynow-btn">BUY NOW</button>
                  <h3>John Doe
                    <span>
                      <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="home-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="home-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm <span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                </div>
              </li>
              <li>
                <div class="tl-circ"></div>
                <div class="timeline-panel">
                  <img src="{{asset('img/art-gallery.jpg')}}" class="img-responsive home-img">
                  <button class="btn btn-default buynow-btn">BUY NOW</button>
                  <h3>John Doe
                    <span>
                      <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle pull-right img-responsive" alt="User Image">
                    </span>
                  </h3>
                  <p class="home-text">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                  <p class="home-text"><i class="glyphicon glyphicon-calendar"></i> Jan 01 2018 at 5:00pm <span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                </div>
              </li>
            </ul>
          </div>
          <!-- Timeline Ends here -->
        </div>
        <!-- Home Page Middle Section Ends-->

        <!-- Follower menu starts here-->
        <div class="col-sm-2 col-md-2 col-lg-2 right-nav-bottom">
          <div class="navbar-header follower-nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rightNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                     
            </button>
          </div>
          <div class="collapse navbar-collapse padding0" id="rightNavbar">
            <div class="well sidebar-nav follower-sidebar" data-spy="affix" data-offset-top="110">
              <ul class="nav nav-list">
                <li><h3 class="follower-heading">Followers</h3></li>
                <li><a href="#"><img src="{{asset('img/user3.jpg')}}" class="img-circle">&emsp;<span class="follower-text">John Doe</span></a></li>
                <li><a href="#"><img src="{{asset('img/user3.jpg')}}" class="img-circle">&emsp;<span class="follower-text">Mark Spen</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Follower menu ends here-->
      </div>
    </div><!--/.container-->

  </div>

  @include('partials.home_footer')

  <!-- Javascript
  ================================================== -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script>
    $(document).ready(function(){
      $(".submenu").hide();
      $(".setting-btn").click(function(){
        $(".submenu").slideToggle("slow")});
    });

    const xCsrfToken = "{{ csrf_token() }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': xCsrfToken
        }
    });

    $('#form_data').submit(function(e){
        e.preventDefault();
        var desc = $('#editor').val();
//        console.log(desc);
//        alert(desc);
        $.ajax({
            type : 'POST',
            url : 'post_data',
            dataType: "json",
            data : {
                desc: desc
            },
            success: function(data){
                if(data.listing){
                    $('.listing_data').prepend(data.listing);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError);
            }
        });
    });
  </script>

  <!-- Emojies -->
  <script src="{{asset('js/jquery.mCustomScrollbar.min.js')}}"></script>
  <script src="{{asset('js/jquery.emoji.min.js')}}"></script>
  <!-- Emojies Ends here -->

  <script>
    $("#editor").emoji({
      button: "#btn",
      showTab: false,
      animation: 'slide',
      icons: [{
        name: "Emoji",
        path: "img/tieba/",
        maxNum: 50,
        file: ".jpg",
        placeholder: ":{alias}:"
      }]
    }); 

    /*
  By Osvaldas Valutis, www.osvaldas.info
  Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
  var inputs = document.querySelectorAll( '.inputfile' );
  Array.prototype.forEach.call( inputs, function( input )
  {
    var label  = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
      var fileName = '';
      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else
        fileName = e.target.value.split( '\\' ).pop();

      if( fileName )
        label.querySelector( 'span' ).innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
    input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
  });
}( document, window, 0 ));
  </script>

  </body>
</html>
