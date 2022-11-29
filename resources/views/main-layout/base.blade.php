
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">


  <title>Metode SAW - Dashboard</title>


    <link href="https://indrijunanda.github.io/RuangAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://indrijunanda.github.io/RuangAdmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://indrijunanda.github.io/RuangAdmin/css/ruang-admin.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    @include('main-layout.includes.sidebar')
    <!-- Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <!-- TopBar -->
        @include('main-layout.includes.navbar')
        <!-- TopBar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

          
          <!-- Main Content -->
          @yield('content')
          <!-- Main Content -->

          <!-- Modal Logout -->
          @include('main-layout.modal.modal-logout')
          <!-- Modal Logout -->

        </div>
        <!---Container Fluid-->

      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://github.com/Febryan1453" target="_blank">febryan1453</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <script src="https://indrijunanda.github.io/RuangAdmin/vendor/jquery/jquery.min.js"></script>
    <script src="https://indrijunanda.github.io/RuangAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://indrijunanda.github.io/RuangAdmin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://indrijunanda.github.io/RuangAdmin/js/ruang-admin.min.js"></script>

</body>

</html>