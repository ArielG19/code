<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title','Default')</title>
          <!-- Bootstrap core CSS-->
        <link href="/panel/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
      
        <script defer src="/panel/vendor/font-awesome/js/js/fontawesome-all.js"></script>

              <!-- Custom styles for this template-->
        <link href="/panel/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="/jquery-alert/jquery.alertable.css">
        
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  @include('includes.nav')
  <div class="content-wrapper">
    <div class="container-fluid">
         
          @yield('content') 
          <!-- /.container-fluid-->

          <!-- /.modal salir-->
          @include('includes.modal')
          <!-- /.modal salir-->

          <!-- /.footer-->
          @include('includes.footer')
          <!-- /.footer-->

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
          </a>
    

    </div>
  </div>
  
       <!-- Bootstrap core JavaScript-->
        <script src="/panel/vendor/jquery/jquery.min.js"></script>
        <script src="/panel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="/panel/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="/panel/js/sb-admin.min.js"></script>
        <script type="text/javascript" src="/jquery-alert/jquery.alertable.js"></script>
  
  @yield('script')

</body>
</html>
