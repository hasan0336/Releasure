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

        @if(Session::has('update_profile'))
          <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('update_profile') }}</p>
        @endif
        @if(Session::has('not_update_profile'))
          <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('not_update_profile') }}</p>
      @endif
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
          <!-- Sidebar -->
        @include('partials.home_side_bar')
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
          <form id="form_data" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="post-editor-background">
              <div class="post-editor">
                <textarea class="form-control textarea-control" rows="5" placeholder="Textarea with emoji Unicode input" data-emojiable="true" data-emoji-input="unicode"></textarea>
              </div>

              <div class="post-editor-btn">
                <div class="pull-left">
                  <img src="{{asset('img/smile.png')}}" class="emoji-icon m-r-5" id="btn" style="visibility: hidden;">
                  <input type="file" class="home-attachment">
                  <label for="home-attachment">
                    <input type="file" id="home-attachment" class="home-attachment" name="attachment">
                    <img src="{{asset('img/attachment.png')}}" width="15" class="m-r-5">
                  </label>
                  <p id="demo-3" class="demo-3"><input type="search" id="price" name="price" ></p>
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
            <ul class="timeline" id="content">
              <li class="listing_data" id="listings_data">
              <!-- start for current date -->
              @if(count($current_post_items) > 0)
                    <?php $odd = array();
                    $even = array();
                    $sortedData = array();
                    ?>
                <li>
                  <div class="tldate">
                      <?php $current_year = date('d-M-Y');?>
                    {{ $current_year }}
                  </div>
                </li>
                @foreach($current_post_items as $k => $current_item)
                  @if($k % 2 == 1)
                    <li class="timeline-inverted">
                      <div class="tl-circ"></div>

                      <div class="timeline-panel">
                        @if(isset($current_item->attachment) && $current_item->attachment != 'null' && $current_item->attachment != '')
                          <img src="{{url('images\attachment_images/'.$current_item->attachment)}}" class="img-responsive home-img">
                          <button class="btn btn-default buynow-btn">BUY NOW</button>
                        @endif
                        <h3>{{$current_item->name}}
                          <span>
                          <img src="{{url('/uploads/'.$current_item->profile_picture)}}" class="img-circle pull-right" width="35" height="35" alt="User Image">
                        </span>

                        </h3>
                        <p class="home-text">{{$current_item->description}}</p>
                        <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                        <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$current_item->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                      </div>
                    </li>
                  @endif
                  @if($k % 2 == 0)
                    <li>
                      <div class="tl-circ"></div>
                      <div class="timeline-panel">
                        @if(isset($current_item->attachment) && $current_item->attachment != 'null' && $current_item->attachment != '')
                          <img src="{{url('images\attachment_images/'.$current_item->attachment)}}" class="img-responsive home-img">
                          <button class="btn btn-default buynow-btn">BUY NOW</button>
                        @endif
                        <h3>{{$current_item->name}}
                          <span>
                      <img src="{{url('/uploads/'.$current_item->profile_picture)}}" class="img-circle pull-right" width="35" height="35" alt="User Image">
                    </span>
                        </h3>
                        <p class="home-text">{{$current_item->description}}</p>
                        <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                        <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$current_item->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                      </div>
                    </li>
                  @endif
                @endforeach
              @endif
              <!-- End for current date -->



              @if(count($yesterday_post_items) > 0)
                    <?php $odd = array();
                    $even = array();
                    $sortedData = array();
                    ?>
                <li>
                  <div class="tldate">
                      <?php $current_year = date('d-m-Y',strtotime("-1 days"));?>
                    {{ $current_year }}
                  </div>
                </li>
                @foreach($yesterday_post_items as $k => $yesterday_item)
                  @if($k % 2 == 1)
                    <li class="timeline-inverted">
                      <div class="tl-circ"></div>

                      <div class="timeline-panel">
                        @if(isset($yesterday_item->attachment) && $yesterday_item->attachment != 'null' && $yesterday_item->attachment != '')
                          <img src="{{url('images\attachment_images/'.$yesterday_item->attachment)}}" class="img-responsive home-img">
                          <button class="btn btn-default buynow-btn">BUY NOW</button>
                        @endif
                        <h3>{{$yesterday_item->name}}
                          <span>
                          <img src="{{url('/uploads/'.$yesterday_item->profile_picture)}}" class="img-circle pull-right" width="35" height="35" alt="User Image">
                        </span>

                        </h3>
                        <p class="home-text">{{$yesterday_item->description}}</p>
                        <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                        <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$yesterday_item->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                      </div>
                    </li>
                  @endif
                  @if($k % 2 == 0)
                    <li>
                      <div class="tl-circ"></div>
                      <div class="timeline-panel">
                        @if(isset($yesterday_item->attachment) && $yesterday_item->attachment != 'null' && $yesterday_item->attachment != '')
                          <img src="{{url('images\attachment_images/'.$yesterday_item->attachment)}}" class="img-responsive home-img">
                          <button class="btn btn-default buynow-btn">BUY NOW</button>
                        @endif
                        <h3>{{$yesterday_item->name}}
                          <span>
                      <img src="{{url('/uploads/'.$yesterday_item->profile_picture)}}" class="img-circle pull-right" width="35" height="35" alt="User Image">
                    </span>
                        </h3>
                        <p class="home-text">{{$yesterday_item->description}}</p>
                        <p><hr style="border-top: 1px solid #000000; margin:0;"></p>
                        <p class="home-text"><i class="glyphicon glyphicon-calendar"></i>{{$yesterday_item->created_at}}<span class="pull-right"><img src="{{asset('img/chat.png')}}" class="img-responsive" width="20"></span></p>
                      </div>
                    </li>
                  @endif
                @endforeach
              @endif

              <!-- start rest of month date -->
              <li>
                <div class="tldate">
                  <?php $current_year = date('Y');
                        $current_month = date('M');
                  ?>
                  {{ $current_month.'-'.$current_year }}
                </div>
              </li>
              <?php $odd = array();
                    $even = array();
                    $sortedData = array();
                ?>
                  @foreach($posts as $k => $post)
                      @if($k % 2 == 1)
                        <li class="timeline-inverted">
                          <div class="tl-circ"></div>

                          <div class="timeline-panel">
                            @if(isset($post->attachment) && $post->attachment != 'null' && $post->attachment != '')
                              <img src="{{url('images\attachment_images/'.$post->attachment)}}" class="img-responsive home-img">
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
                            @if(isset($post->attachment) && $post->attachment != 'null' && $post->attachment != '')
                              <img src="{{url('images\attachment_images/'.$post->attachment)}}" class="img-responsive home-img">
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
              @endforeach
            <!-- end rest of month date -->
            </ul>
            <input type="hidden" id="year" value="{{ $current_year }}" />
            <input type="hidden" id="month" value="{{ $current_month }}" />
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

  <!-- Begin emoji-picker JavaScript -->
    <script src="{{asset('lib/js/config.js')}}"></script>
    <script src="{{asset('lib/js/util.js')}}"></script>
    <script src="{{asset('lib/js/jquery.emojiarea.js')}}"></script>
    <script src="{{asset('lib/js/emoji-picker.js')}}"></script>
  <!-- End emoji-picker JavaScript -->

    <script>
      $(function() {
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        window.emojiPicker.discover();
      });

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
//        var desc = $('#editor').val();
//        var attachment = $('#home-attachment').val();
//        var price = $('#price').val();
//        console.log(desc);
//        alert(desc);
        var formData = new FormData($(this)[0]);
        $.ajax({
            type : 'POST',
            url : 'post_data',
            dataType: "json",
            data : formData,
            processData: false,
            contentType: false,
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

//    scroll load function
    var outerPane = $('#content'),
        didScroll = false;

    $(window).scroll(function() { //watches scroll of the window
        didScroll = true;
//        console.log(didScroll);
    });

    //Sets an interval so your window.scroll event doesn't fire constantly. This waits for the user to stop scrolling for not even a second and then fires the pageCountUpdate function (and then the getPost function)
    setInterval(function() {
        if (didScroll){
            didScroll = false;
            if(($(document).height()-$(window).height())-$(window).scrollTop() < 10){
                pageCountUpdate();
            }
        }
    }, 250);

    function pageCountUpdate(){
        var year = parseInt($('#year').val());
        var month = $('#month').val();
//        var max_page = parseInt($('#max_page').val());
        console.log(month);
        if(year && month){

            getPosts();
//            $('#end_of_page').hide();
        } else {
//            $('#end_of_page').fadeIn();
        }
    }


    //Ajax call to get your new posts
    function getPosts(){
        $.ajax({
            type: "POST",
            url: "get_month_year", // whatever your URL is
            data: { year: $('#year').val(), month: $('#month').val() },
            beforeSend: function(){ //This is your loading message ADD AN ID
                $('#content').append("<div id='loading' class='center'>loading items..</div>");
            },
            complete: function(){ //remove the loading message
                $('#loading').remove()
            },
            success: function(data) { // success! YAY!! Add HTML to content container
                console.log(data.return_post);
                $('#content').append(data.return_post);
                $('#year').val(data.hidden_year);
                $('#month').val(data.hidden_month);
            }
        });

    } //end of getPosts fu

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
