<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Safia | Home</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="{{ url('assets/css/theme.css') }}" rel="stylesheet" />

    <link href="{{ url('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @yield("css")
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container pt-2"><a class="navbar-brand" href="{{ url('resource') }}"> <img src="{{ url('assets/img/gallery/logo.png') }}" alt="..." /></a>
          <div class="navbar-nav ms-auto">
          </div>
        </div>
      </nav>

        <div class="container">
             @yield("container")
        </div>
    </main>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ url('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ url('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('vendors/is/is.min.js') }}"></script>
    <script src="{{ url('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="{{ url('assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet"> 
    @yield("js")
  </body>

</html>