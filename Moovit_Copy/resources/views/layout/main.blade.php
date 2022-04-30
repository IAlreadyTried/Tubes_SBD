<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="custom_css/cssku.css">
    <link rel="icon" type="image/x-icon" href="/img/moovit_logo2.png">
    <title>Moovit | Home</title>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Link</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> --}}
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 " style="background-color:rgb(247, 153, 153);height:5000px;padding:0px;min-width:307px;">
            <div id="gambar-kiri-atas" style="" class="bungkus-kiri-atas">
                <div style="" class="row baris-row">
                    <div style="text-align: center;color:rgb(237, 237, 237);width:175px;padding:0px;" class="col-5 align-self-end">
                        <div style="position: relative">
                            <img style="float: left;width:20px;position:absolute;left:30px;top:5px;" src="img/moovit_logo2.png" alt="">
                            <h2 style="font-size: 23px">moovit</h2>
                        </div>
                    </div>
                    <div class="col-3 align-self-end" style="text-align:left;padding:0px;">
                        <h2 style="font-size: 15px;color:rgb(234, 234, 234);">Waduoo</h2>
                        {{-- <img src="" alt=""> --}}
                    </div>
                </div>
                <div class="row baris-row justify-content-start">
                    <div style="width:80px;margin-left:20px;" class="col-3 align-self-end link-sidebar-kiri">
                        <a href="/"><h5>DIRECTIONS</h5></a>
                    </div>
                    <div style="padding-right:5px" class="col-3 align-self-end link-sidebar-kiri">
                        <a href="/lines"><h5>LINES</h5></a>
                    </div>
                    <div style="width: 60px" class="col-3 align-self-end link-sidebar-kiri">
                        <a href="/alerts"><h5>ALERTS</h5></a>
                    </div>
                </div>
            </div>
        @yield('container-1')
        </div>
        <div class="col-md-7 col-lg-7 container">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100px;}</style></div></div><div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="1077" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:1077px;width:1080px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:700px;}</style></div></div>
        </div>
        <div class="col-md-2 col-lg-2 offset-md-7 offset-lg-7" style="height:5000px;padding:0px;min-width:179.988px;position:fixed;right:0px;">
          <div id="navbar-kanan" class="col-md-9 col-lg-9 offset-md-3 offset-lg-3 " style="background-color:rgb(255, 255, 255);height:5000px;padding:0px;min-width:110px;padding-left:12px;box-shadow:-.5px 0px 7px 0px rgb(93, 93, 93);transition:0.3s;">
          @yield('container-2')
          </div>
        </div>
    </div>
        {{-- <div class="row">
            <div class="col-3" style="background-color:rgb(247, 153, 153);height:5000px;">
            </div>
        </div> --}}
    </div>
<script src="customjs/jsku.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>