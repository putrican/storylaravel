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
  <div class="content-wrapper ">
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
    <div class="container mt-5 ">
      <div class="row">
          <div class="col-sm-8 col-md-6 ">
              <h1>Category Course</h1>
              <hr>
                  <div class="w-full grid grid-cols-6 gap-2 ">
                      <div class="col-span-4">
                          <div class="pt-2 ">
                            <div class="flex item-center ">
                              <input type="checkbox" >
                              <label for="category" class="m-3 text-sm text-gray-600">HTML</label>
                            </div>
                          </div>
                          <div class="video">
                            <div class="mb-5">
                              <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                                <div style="text-align: center;">
                                  <img src="https://s.kaskus.id/images/2021/07/31/8937321_20210731120416.png" border="0" alt="Cara Jadi Front-end Web Developer Modal Youtube">
                                </div>
                                  <div class="w-full flex flex-col px-2 py-2">
                                  </div>
                                  <div style="text-align: center;"><a target="_blank" href="https://www.youtube.com/playlist?list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F" rel="ugc" onclick="dataLayer.push({'event': 'trackEvent','eventDetails.category': 'outbond', 'eventDetails.action': 'click', 'eventDetails.label': 'https://www.youtube.com/playlist?list=PLFIM0718LjIVuONHysfOK0ZtiqUWvrx4F'});">HTML DASAR</a>
                                  </div>
                              </div>
                            </div>
                          </div>  

                          <div class="pt-2 ">
                            <div class="flex item-center ">
                              <input type="checkbox" >
                              <label for="category" class="m-3 text-sm text-gray-600">CSS</label>
                            </div>
                          </div>
                          <div class="video">
                            <div class="mb-5">
                              <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                                <div style="text-align: center;">
                                  <img src="https://s.kaskus.id/images/2021/07/31/8937321_20210731120509.png" border="0" alt="Cara Jadi Front-end Web Developer Modal Youtube">
                                </div>
                                  <div class="w-full flex flex-col px-2 py-2">
                                  </div>
                                  <div style="text-align: center;"><a target="_blank" href="https://www.youtube.com/playlist?list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p" rel="ugc" onclick="dataLayer.push({'event': 'trackEvent','eventDetails.category': 'outbond', 'eventDetails.action': 'click', 'eventDetails.label': 'https://www.youtube.com/playlist?list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p'});">CSS DASAR</a>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="pt-2 ">
                            <div class="flex item-center ">
                              <input type="checkbox" >
                              <label for="category" class="m-3 text-sm text-gray-600">Javascript</label>
                            </div>
                          </div>
                          <div class="video">
                            <div class="mb-5">
                              <div class="shadow-lg bg-white rounded-lg overflow-hidden cursor-pointer ">
                                <div style="text-align: center;">
                                  <img src="https://s.kaskus.id/images/2021/07/31/8937321_20210731125741.png" border="0" alt="Cara Jadi Front-end Web Developer Modal Youtube">
                                </div>
                                  <div class="w-full flex flex-col px-2 py-2"> 
                                  </div>
                                  <div style="text-align: center;"><a target="_blank" href="https://www.youtube.com/playlist?list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w" rel="ugc" onclick="dataLayer.push({'event': 'trackEvent','eventDetails.category': 'outbond', 'eventDetails.action': 'click', 'eventDetails.label': 'https://www.youtube.com/playlist?list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w'});">JAVASCRIPT DASAR</a>
                                  </div>
                              </div>
                            </div>
                          </div>                     
                      </div>                       
                  </div>
          </div>              
        </div>                    
    </div>
  </div>
</div>
   
  
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

    



