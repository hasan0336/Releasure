<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sales | Releasur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/inner-css.css" />
  </head>

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
            <img src="img/logo.png" class="img-responsive img-rounded" alt="Releasur Logo">
          </a>
        </div>
      @include('partials.home_menu_bar')
    </nav>

      <div class="container margin-top20">
        <div class="col-sm-12 col-md-12 col-lg-12">

          <div class="col-sm-2 col-md-2 col-lg-2">
            <div class="navbar-header left-nav-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sideNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                     
              </button>
            </div>
            @include('partials.home_side_bar')

          <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="table-responsive">
                <table class="table table-hover text-center" id="example24">
                  <thead>
                    <tr>
                      <th scope="col">Post Date & Time</th>
                      <th scope="col">Post</th>
                      <th scope="col">Attachment</th>
                      <th scope="col">Price</th>
                      <th scope="col">Purchases</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="active">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td>
                        <span class="glyphicon glyphicon-chevron-down subrow-btn1"></span>
                      </td>
                    </tr>
                    <tr class="subrow1">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Contact No</th>
                              <th>Delivery Address</th>
                              <th>Description</th>
                              <th>Is Delivered</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn2"></span></td>
                    </tr>
                    <tr class="subrow2">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="warning">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="active">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn3"></span></td>
                    </tr>
                    <tr class="subrow3">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn4"></span></td>
                    </tr>
                    <tr class="subrow4">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="warning">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="active">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn5"></span></td>
                    </tr>
                    <tr class="subrow5">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn6"></span></td>
                    </tr>
                    <tr class="subrow6">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="warning">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="active">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn7"></span></td>
                    </tr>
                    <tr class="subrow7">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn8"></span></td>
                    </tr>
                    <tr class="subrow8">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="warning">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="active">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn9"></span></td>
                    </tr>
                    <tr class="subrow9">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td><span class="glyphicon glyphicon-calendar">&emsp;</span>Jan 1 2018 at 05:00pm</td>
                      <td><span class="glyphicon glyphicon-edit">&emsp;</span>Lorem ipsum dolor sit amet</td>
                      <td><span class="glyphicon glyphicon-paperclip">&emsp;</span>-</td>
                      <td><span class="glyphicon glyphicon-usd">&emsp;</span>50</td>
                      <td><span class="glyphicon glyphicon-chevron-down subrow-btn10"></span></td>
                    </tr>
                    <tr class="subrow10">
                      <td colspan="5">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Post Date & Time</th>
                              <th>Post</th>
                              <th>Attachment</th>
                              <th>Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="warning">
                              <td>John Doe</td>
                              <td>(123) 456 7890 </td>
                              <td>123 ABC Street New York NY</td>
                              <td>Lorem ipsum...</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>  

          </div><!--/span-->

        </div><!--/row-->
      </div><!--/.fluid-container-->
    </div>
    
    <footer class="inner-footer">
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
    </footer>

    <!-- Javascript ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".submenu").hide();
        $(".setting-btn").click(function(){
          $(".submenu").slideToggle("slow")});
      });
    </script>

    <script>
      $(document).ready(function(){
        $(".subrow1,.subrow2,.subrow3,.subrow4,.subrow5,.subrow6,.subrow7,.subrow8,.subrow9,.subrow10").hide();
        $(".subrow-btn1").click(function(){$(".subrow1").toggle(500)});
        $(".subrow-btn2").click(function(){$(".subrow2").toggle(500)});
        $(".subrow-btn3").click(function(){$(".subrow3").toggle(500)});      
        $(".subrow-btn4").click(function(){$(".subrow4").toggle(500)});
        $(".subrow-btn5").click(function(){$(".subrow5").toggle(500)});
        $(".subrow-btn6").click(function(){$(".subrow6").toggle(500)});
        $(".subrow-btn7").click(function(){$(".subrow7").toggle(500)});
        $(".subrow-btn8").click(function(){$(".subrow8").toggle(500)});
        $(".subrow-btn9").click(function(){$(".subrow9").toggle(500)});
        $(".subrow-btn10").click(function(){$(".subrow10").toggle(500)});
      });
    </script>
    <!--<script>
      $(document).ready( function () {
        $('#example23').DataTable({
          'paging':true,
          'info':true,
          'ordering':true,
          'searching': true,
          'lengthMenu': [[5, 10, 15, -1], [5, 10, 15, "All"]]
        });
      });
    </script> -->
  </body>
</html>
