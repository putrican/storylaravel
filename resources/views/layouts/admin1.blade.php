<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('contents.header')
 
  @include('contents.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course Online Programing</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>2</h3>

                <p>Mentor</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>50</h3>

                <p>Course</p>
              </div>           
              <div class="icon">
                <i class="fa fa-pause" style="font-size:36px;"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
           
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>10</h3>

                <p>Module</p>
              </div>
              <div class="icon">
                <i class='fas fa-desktop' style='font-size:24px'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>2</h3>

                <p>Student</p>
              </div>
              <div class="icon">
                <i class='far fa-grin-alt' style='font-size:36px'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="w-full grid grid-cols-6 gap-2">
          <div class="col-span-2">
              <h1 class="text-sm font-bold pt-2">CategoryVideo</h1>
              <div class="pt-2 ">
                <div class="flex item-center">
                  <input type="checkbox" >
                  <label for="category" class="m-3 text-sm text-gray-600">HTML</label>
                </div>
              </div>
  
              <div class="pt-2 ">
                <div class="flex item-center ">
                  <input type="checkbox" >
                  <label for="category" class="m-3 text-sm text-gray-600">Css</label>
                </div>
              </div>
  
              <div class="pt-2 ">
                <div class="flex item-center">
                  <input type="checkbox" >
                  <label for="category" class="m-3 text-sm text-gray-600">Javascript</label>
                </div>
              </div>         
          </div>
          
          <div class="col-span-6">
            <div class="row">
              <div class="video">
                <div class="mb-5">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/NBZ9Ro6UKV8?list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F" title="HTML Dasar : Pendahuluan HTML (1/13)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">HTML Dasar:: </span>
                        <span class="text-lg text-bold">Pendahuluan HTML </span>
                      </div>
                  </div>
                </div>
              </div>   
              
              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/1NicaVOCXHA?list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F" title="HTML Dasar : Hello World! (2/13)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">HTML Dasar:: </span>
                        <span class="text-lg text-bold">Hello Word!! </span>
                      </div>
                  </div>
                </div>
              </div> 
  
              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/3sLSi9L5nWE?list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F" title="HTML Dasar : Code Editor (3/13)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">HTML Dasar:: </span>
                        <span class="text-lg text-bold">Code Editor!! </span>
                      </div>
                  </div>
                </div>
              </div> 

              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/CleFk3BZB3g?list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p" title="CSS Dasar - 1 - Pendahuluan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">Css Dasar:: </span>
                        <span class="text-lg text-bold">Pendahuluan </span>
                      </div>
                  </div>
                </div>
              </div> 

              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/yu74Y1ndd5w?list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p" title="CSS Dasar - 10 - Specificity" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">Css Dasar:: </span>
                        <span class="text-lg text-bold">Spesificity</span>
                      </div>
                  </div>
                </div>
              </div> 

              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/1FAnrYu7LCM?list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w" title="NILAI DAN TIPE DATA PADA JAVASCRIPT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">Javascript::</span>
                        <span class="text-lg text-bold">Nilai dan tipe data pada Javascript</span>
                      </div>
                  </div>
                </div>
              </div>

              <div class="video">
                <div class="mb-5 ">
                  <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                      <div class="w-full relative ">
                        <iframe width="576" height="360" src="https://www.youtube.com/embed/_XSeF00qNWE?list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w" title="OPERATOR PADA JAVASCRIPT : Logika, String, Typeof dan Kondisional" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="w-full flex flex-col px-2 py-2">
                        <span class="text-lg text-bold">Operrator pada Javascript::</span>
                        <span class="text-lg text-bold">Logika, String, Typeof dan Kondisional</span>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          </div>              
        </div>


       
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  @include('contents.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
</body>
</html>
