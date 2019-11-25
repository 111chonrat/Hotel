<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Vali Admin">
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
  <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
  <meta property="og:description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title>index hotel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.html">Recommend Hotels</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>

      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          {{-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li> --}}
          <li><a class="dropdown-item" href="indexhotel"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
        src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
        <p class="app-sidebar__user-name"></p>
        <p class="app-sidebar__user-designation">Admin</p>
      </div>
    </div>
    <ul class="app-menu">
            <li><a class="app-menu__item" href="addmin"><i class="app-menu__icon fa fa-wpforms"></i><span
                class="app-menu__label">Forms Add</span></a></li>
            <li><a class="app-menu__item active" href="add-img"><i class="app-menu__icon fa fa-wpforms"></i><span
                class="app-menu__label">Image Add</span></a></li>
            {{-- <li><a class="app-menu__item" href="admin-indexhotel"><i class="app-menu__icon fa fa-edit"></i><span
                class="app-menu__label">Etdit Home</span></a></li> --}}

      {{-- <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> --}}
      {{-- <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item active" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
              <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
              <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
              <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
            </ul>
          </li> --}}
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i> Image Add</h1>
      </div>
    </div>
    <div class="row">
      <div class="clearfix"></div>
      <div class="col-md">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title">เพิ่มรูปภาพ โรงแรม</h3>
            {{-- <p><a class="btn btn-primary icon-btn" href="https://gitlab.com/meno/dropzone" target="_blank"><i class="fa fa-file"></i>Docs</a></p> --}}
          </div>

          <form class="text-center " method="POST" enctype="multipart/form-data" action="addimghoteldata" >
          <div class="tile-body">

              {{-- <div class="form-group">
                <label class="control-label">ชื่อโรงแรม</label>
                <input class="form-control" type="text" name="name" placeholder="Enter full name">
              </div> --}}
              <input type="file" name="image" >

                    <select name="idhotel">
                        @foreach ($Rawdata as $item)
                       <option value="{{ $item->hotel_id }}" >{{ $item->hotel_name }}</option>
                      @endforeach
                    </select>

                    </div>
                    <br>
                    <br>
                    <button class="btn btn-primary" type="submin" ><i
                        class="fa fa-fw fa-lg fa-check-circle"></i>บันทึก</button>&nbsp;&nbsp;&nbsp;<a
                      class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
                  </div>

          </div>


           <!-- Modal -->
      {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

        </form>
        </div>

      </div> --}}




    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="js/plugins/select2.min.js"></script>
  <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="js/plugins/dropzone.js"></script>
  <script type="text/javascript">
    $('#sl').on('click', function () {
      $('#tl').loadingBtn();
      $('#tb').loadingBtn({ text: "Signing In" });
    });

    $('#el').on('click', function () {
      $('#tl').loadingBtnComplete();
      $('#tb').loadingBtnComplete({ html: "Sign In" });
    });

    $('#demoDate').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      todayHighlight: true
    });

    $('#demoSelect').select2();
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
      (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
</body>

</html>
