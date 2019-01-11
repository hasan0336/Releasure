<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />

    <link rel="stylesheet" href="css/custom-bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="css/lato.css">
    <link rel="stylesheet" href="css/catamaran.css">
    <link rel="stylesheet" href="css/muli.css">
    <link rel="stylesheet" href="css/device-mockups.min.css">
    <link rel="stylesheet" href="css/new-age.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="img/logo.png" width="146" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about_us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#what_we_do">What We Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#featured_artist">Featured Artist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('register')}}">Signup</a>
            </li>
          </ul>
        </div>
        @if($errors->any())
          <h4>{{$errors->first()}}</h4>
        @endif
      </div>
    </nav>

    <header class="masthead" id="home">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-8 my-auto">
            <div class="header-content">
              @if(Session::has('ev_message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('ev_message') }}</p>
              @endif
              <h1>H1 The standard Lorem Ipsum</h1>
              <h3 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h3>
            </div>
            <div class="badges">
              <a class="badge-link" href="#">
                <img src="{{asset('img/googleplay.png')}}" alt="Google Play">
              </a>
              <a class="badge-link" href="#">
                <img src="{{asset('img/appstore.png')}}" alt="App Store">
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <marquee direction = "up" bgcolor="#fff" scrolldelay="0">
                      <div class="newstape-content">
                        <div class="news-block">
                          <h3><b>Lorem ipsum</b></h3>
                          <small>13.04.2015</small>
                          <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                          </p>
                          <div class="text-right">
                            <a href="#">More</a>
                          </div>
                          <hr />
                        </div>

                        <div class="news-block">
                          <h3><b>Ut enim ad</b></h3>
                          <small>13.04.2015</small>
                          <p class="text-justify">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                          </p>
                          <div class="text-right">
                            <a href="#">More</a>
                          </div>
                          <hr />
                        </div>
                      </div>
                    </marquee>
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary text-center" id="about_us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="section-heading text-center">
              <h2>About Us</h2><hr class="mb-5">
            </div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
          </div>
        </div>
      </div>
    </section>

    <section class="features cta" id="what_we_do" style="color:#fff;">
      <div class="overlay"></div>
      <div class="container">
        <div class="section-heading text-center" style="position: relative;">
          <h2>What We Do?</h2>
          <p class="text-muted">Check out what you can do with this app theme!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="{{asset('img/demo-screen-1.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Lorem Ipsum 1</h3>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit odio.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Lorem Ipsum 2</h3>
                    <p class="text-muted">But I must explain to you how all this mistaken idea odio.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Lorem Ipsum 3</h3>
                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <h3>Lorem Ipsum 4</h3>
                    <p class="text-muted">On the other hand, we denounce with righteous indignation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="featured_artist">
      <div class="container-fluid p-0">
        <div class="section-heading text-center">
          <h2>Featured Artist</h2>
          <p class="text-muted">Check out what you can do with this app theme!</p>
          <hr class="mb-5">
        </div>
        <div class="row no-gutters popup-gallery">

          <!-- Start of 1st image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow">
              <div class="flip1">
                <img src="{{asset('img/fullsize/1.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World1</div>
                </div>
              </div>
              <div class="flip11">
                <img src="{{asset('img/fullsize/2.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 1</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 1st image -->

          <!-- Start of 2nd image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow1">
              <div class="flip2">
                <img src="{{asset('img/fullsize/3.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World2</div>
                </div>
              </div>
              <div class="flip22">
                <img src="{{asset('img/fullsize/4.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 2</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 2nd image -->

          <!-- Start of 3rd image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow">
              <div class="flip3">
                <img src="{{asset('img/fullsize/5.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World3</div>
                </div>
              </div>
              <div class="flip33">
                <img src="{{asset('img/fullsize/6.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 3</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 3rd image -->

          <!-- Start of 4th image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow1">
              <div class="flip4">
                <img src="{{asset('img/fullsize/1.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World4</div>
                </div>
              </div>
              <div class="flip44">
                <img src="{{asset('img/fullsize/2.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 4</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 4th image -->

          <!-- Start of 5th image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow1">
              <div class="flip5">
                <img src="{{asset('img/fullsize/3.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World5</div>
                </div>
              </div>
              <div class="flip55">
                <img src="{{asset('img/fullsize/4.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 5</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 5th image -->

          <!-- Start of 6th image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow">
              <div class="flip6">
                <img src="{{asset('img/fullsize/5.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World6</div>
                </div>
              </div>
              <div class="flip66">
                <img src="{{asset('img/fullsize/6.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 6</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 6th image -->

          <!-- Start of 7th image -->
          <div class="col-lg-3 col-sm-6">
            <div class="slideshow1">
              <div class="flip7">
                <img src="{{asset('img/fullsize/1.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World7</div>
                </div>
              </div>
              <div class="flip77">
                <img src="{{asset('img/fullsize/2.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 7</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 7th image -->

          <!-- Start of 8th image -->
          <div class="col-lg-3 col-sm-6 slideshow">
            <div class="slideshow">
              <div class="flip8">
                <img src="{{asset('img/fullsize/3.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Hello World8</div>
                </div>
              </div>
              <div class="flip88">
                <img src="{{asset('img/fullsize/4.jpg')}}" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Sub Image 8</div>
                </div>
              </div>
            </div>
          </div>
          <!-- //End of 8th image -->
        </div>
      </div>
    </section>

    <section class="bg-primary" id="contact">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Contact Us</h2><hr class="mb-5">
        </div>
        <div class="row">
          <div class="col-sm-7">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
          </div>
          <div class="col-sm-5 slideanim">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5">
            </textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group text-center">
                <button class="btn btn-success" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; Releasur 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/new-age.min.js"></script>
    <script src="js/form-main.js"></script>

    <script src="js/jquery.cycle.all.js"></script>

    <script>
      $(function() {
        $('.slideshow').cycle({
          fx: "curtainX",
          timeout: 4000,
          delay:  5000,
          sync: false
        });

        $('.slideshow1').cycle({
          fx: "curtainX",
          timeout: 6000,
          delay:  5000,
          sync: false
        });
      });

      $(function() {
        $('marquee').mouseover(function() {
          this.stop();
        }).mouseout(function() {
          this.start();
        });
      });
    </script>
  </body>
</html>