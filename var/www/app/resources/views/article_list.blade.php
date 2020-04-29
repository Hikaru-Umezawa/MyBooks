@extends('layouts.master')
@section('title', 'みんなの記事一覧')

@section('stylesheet')
  <!-- 固有css -->
@endsection

@section('content')
@include('layouts.header')


    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li class="active"><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Chat Room: Support</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">Hi Mark, have a minute?</div>
              <div class="third-part">12:30</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Mark Simmons</div>
              <div class="second-part">Of course Sam, what you need?</div>
              <div class="third-part">12:31</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">I want you examine the new product</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Mark Simmons</div>
              <div class="second-part">Ok, send me the pic</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">
                <a href="#">product.jpg</a> <span class="text-muted">35.4KB</span>
                <p><img class="img-responsive" src="img/product.jpg" alt=""></p>
              </div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom">
              <div class="first-part">Mark Simmons</div>
              <div class="second-part">Fantastic job, love it :)</div>
              <div class="third-part">12:32</div>
            </div>
            <div class="group-rom last-group">
              <div class="first-part odd">Sam Soffes</div>
              <div class="second-part">Thanks!!</div>
              <div class="third-part">12:33</div>
            </div>
            <footer>
              <div class="chat-txt">
                <input type="text" class="form-control">
              </div>
              <div class="btn-group hidden-sm hidden-xs">
                <button type="button" class="btn btn-white"><i class="fa fa-meh-o"></i></button>
                <button type="button" class="btn btn-white"><i class=" fa fa-paperclip"></i></button>
              </div>
              <button class="btn btn-theme">Send</button>
            </footer>
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Team Members</h4>
              <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-02.jpg" width="32">
                  Paul Brown
                  <span class="text-muted">1h:02m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-05.jpg" width="32">
                  David Duncan
                  <span class="text-muted">1h:08m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-07.jpg" width="32">
                  Laura Smith
                  <span class="text-muted">1h:10m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-08.jpg" width="32">
                  Julia Schultz
                  <span class="text-muted">3h:00m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.html">
                  <img class="img-circle" src="img/friends/fr-01.jpg" width="32">
                  Frank Arias
                  <span class="text-muted">4h:22m</span>
                  </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="chat_room.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
@endsection