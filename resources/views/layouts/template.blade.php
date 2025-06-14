<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name','PWL Laravel Starter Code')}}</title>

  <meta name="csrf-token" content="{{csrf_token()}}"><!--utk mengirimkan token laravel csrf pd setiap request ajax-->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

<!--DataTables-->
<link rel="stylesheet" href="{{asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">


  <!--Theme style-->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  @stack('css')<!-- digunakan utk memanggil custom css dari perintah push ('css')pd msg2 view-->
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Navbar -->
@include('layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PWL -  Starter Code</span>
    </a>
    <!--Sidebar-->
    @include('layouts.sidebar')
    <!--/.Sidebar-->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @include('layouts.breadcrumb')

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!--datatables & plugins -->
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- jquery validation -->
<script src="{{asset('adminlte/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<!--sweetAlert2 -->
<script src="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script>
  //utk mengirimkan token laravel CSRF pada setiap request ajax
  $.ajaxSetup({headers:{'X-CSRF-TOKEN':$('META[name="csrf-token"]').attr('content')}});
  </script>
  @stack('js')<!--digunakan utk memanggil custom js dari perintah push('js')pd msg2 view-->




<!-- Sidebar user panel -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ auth()->user()->getProfilePictureUrl() }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
    </div>
</div>


</body>
</html>