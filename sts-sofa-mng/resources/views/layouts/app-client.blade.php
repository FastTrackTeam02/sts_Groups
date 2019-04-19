<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Name - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">********</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link bg-light" href="{{ route('admin_sofa') }}">QUẢN LÝ SOFA</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link bg-light" href="{{ route('client_product') }}">SẢN PHẨM</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link bg-light" href="{{ route('client_product') }}">KHUYẾN MÃI</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link bg-light" href="{{ route('client_product') }}">TIN TỨC</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link bg-light" href="{{ route('client_product') }}">TUYỂN DỤNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-light" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  bg-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                        <form action="{{ route('client_product') }}" method="get" class="form-inline my-2 my-lg-0">
                        <input name="name" class="form-control mr-sm-2" type="name" placeholder="Tìm kiếm…" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    </nav>
            </div>
            <div class="row">
                
            </div>  
            
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
        </div>
        <form class="form-inline my-1">
            <div class="md-form form-sm my-0">
            <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search"
                aria-label="Search">
            </div>
            <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
        </form>
        </nav> -->
    

    
    <header class="mb-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{ asset('img/banner1.jpg') }}">
                <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">First Slide</h2>
                <p class="lead">This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/banner2.jpg') }}')">
                <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Second Slide</h2>
                <p class="lead">This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('img/banner1.jpg') }}')">
                <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Third Slide</h2>
                <p class="lead">This is a description for the third slide.</p>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
    </header>
        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->
        <div class="container-fluid">
            
            <div class="row">
                @yield('content')
            </div>
            
        </div>  

    <!-- Footer -->

    <footer class="page-footer font-small indigo mt-5">
    <hr>
        <!-- Footer Links -->
        <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">NỘI THẤT THÁI DOÃN</h5>

            <ul class="list-unstyled">
                <li>Điện thoại: 09xx xxx xxx
                </li>
                <li>Email: xxxxx@gmail.com
                </li>
                <li>Địa chỉ: xxxxxxxxx xxxxxx xxxxxxx xxxx xxxxxxxxx
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">XU HƯỚNG TÌM KIẾM</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!"></a>
                </li>
               
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">KẾT NỐI</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!"></a>
                </li>
                
            </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ĐĂNG KÝ TƯ VẤN</h5>

            <form action="{{ route('client_customer-register') }}" method="post">
            @csrf
            <ul class="list-unstyled">
                <li>ĐĂNG KÝ LÀ THÀNH VIÊN Để hưởng mức giá ưu đãi 6% khi mua hàng ở THÁI DOÃN
                </li>
                <li><div class="row">
                    @if(session('msg-success-customer-register'))
                        <div class="container">
                            <div class="alert alert-success" role="alert">
                            {{session('msg-success-customer-register')}}
                        </div></div>
                    @endif
                </div></li>
                <li><input type="tel" name="tel" class="phone my-2" placeholder="Nhập số điện thoại">
                </li>
                <li><input class="btn btn-primary" type="submit" value="ĐĂNG KÝ">
                </li>
            </ul>
            </form>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Bản quyền 2019 ©:
        <a href="#"> Nội thất Thái Doãn</a>
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <!-- Optional JavaScript -->
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('js/app.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
    </body>
</html>
