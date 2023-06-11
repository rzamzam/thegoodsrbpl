<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>THEGOODS</title>
  <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admintemplate/') }}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   <!-- Line Chart -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
   integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->


      <!-- Right navbar links -->
      <div class="collapse navbar-collapse justify-content-end" id=" toggleMenu">

            <ul class="nav" style="margin-right: 10px">
                <form action="/logout" method="POST">
                    @csrf
                    <li>
                <button>Logout</button>
            </li>
            </form>


            </ul>



    </div>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="{{ asset('../assets/img/apple-touch-icon.png') }}" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">thegoods</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admintemplate/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="" class="d-block">Supplier</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a  class="nav-link" href="/katalog">
                <i class="nav-icon fas fas fas fa-cart-arrow-down"></i>
                <p>
                  Add Products
                  {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">
                <i class="nav-icon fas fas fas fa-cart-arrow-down"></i>
                <p>
                  List Products
                  {{-- <i class="right fas fa-angle-left"></i> --}}
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          @yield('container')

          <section class="content">
            @if ($message = Session::get('done'))
            <div class="alert alert-success alert-block mt-3">
            <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
             </div>
            @endif
            <div class="container-fluid">
                <div class="content-header">
                    <div class="container-fluid">
                      <div class="row mb-2">
                        <div class="col-sm-6">
                          <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                          </ol>
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="db-title m-0 text-dark " style="font-size: 25px;font-weight:600;"></h1>
                    </div>
                </div>
                <!-- Small boxes (Stat box) -->
                <div class="card">
                    <div class="card-header border-0">
                      <h3 class="card-title">Stock in Warehouse : {{4000 - $sepatu - $sandal - $lays - $cocacola - $tissue - $oil - $gula - $pasta_gigi - $sabun_piring - $deterjen +
                      $buysepatu + $buysandal + $buylays + $buycocacola + $buytissue + $buyoil + $buypasta_gigi + $buysabun_piring + $buydeterjen}}</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-striped table-valign-middle">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Sepatu</td>
                            <td>{{400 - $sepatu + $buysepatu}}</td>
                          </tr>
                          <tr>
                            <td>Sandal</td>
                            <td>{{400 - $sandal +  $buysandal}}</td>
                          </tr>
                          <tr>
                            <td>Lays</td>
                            <td>{{400 - $lays + $buylays}}</td>
                          </tr>
                          <tr>
                            <td>Cocacola</td>
                            <td>{{400 - $cocacola + $buycocacola}}</td>
                          </tr>
                          <tr>
                            <td>Tissue</td>
                            <td>{{400 - $tissue + $buytissue}}</td>
                          </tr>
                          <tr>
                            <td>Oil</td>
                            <td>{{400 - $oil + $buyoil}}</td>
                          </tr>
                          <tr>
                            <td>Pasta Gigi</td>
                            <td>{{400 - $pasta_gigi + $buypasta_gigi}}</td>
                          </tr>
                          <tr>
                            <td>Sabun Piring</td>
                            <td>{{400 - $sabun_piring + $buysabun_piring}}</td>
                          </tr>
                          <tr>
                            <td>Deterjen</td>
                            <td>{{400 - $deterjen + $buydeterjen}}</td>
                          </tr>
                        </tbody>

                      </table>
                    </div>
                  </div>
                <!-- /.row -->
                <!-- Main row -->
                <div id="curve_chart" style="width: 900px; height: 500px"></div>
            </div>
          <!-- /.row -->
          <!-- Main row -->

        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="http://adminlte.io">THEGOODS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="{{ asset('admintemplate/') }}/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="{{ asset('admintemplate/') }}/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="{{ asset('admintemplate/') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('admintemplate/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('admintemplate/') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('admintemplate/') }}/plugins/moment/moment.min.js"></script>
  <script src="{{ asset('admintemplate/') }}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('admintemplate/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="{{ asset('admintemplate/') }}/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admintemplate/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admintemplate/') }}/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('admintemplate/') }}/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admintemplate/') }}/dist/js/demo.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Sales' ],
            ['Jan',  {{$january}}],
            ['Feb',   {{$february}}     ],
            ['Mar',   {{$march}}       ],
            ['Apr',   {{$april}}      ],
            ['May',   {{$may}}      ],
            ['Jun',   {{$june}}      ],
            ['Jul',   {{$july}}      ],
            ['Aug',   {{$august}}      ],
            ['Sep',   {{$september}}      ],
            ['Oct',   {{$october}}      ],
            ['Nov',   {{$november}}      ],
            ['Dec',   {{$december}}      ],
          ]);

          var options = {
            title: 'Sales Performance',
            curveType: 'function',
            legend: { position: 'bottom' }
          };

          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

          chart.draw(data, options);
        }
      </script>
</body>

</html>
