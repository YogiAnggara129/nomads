<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    @include('partials.styles')
</head>

<body>
    <div class="container">
        {{-- Navbar - start --}}
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('img/logo.png') }}" alt="Logo NOMADS">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>

                    {{-- Mobile button - start --}}
                    <form action="" class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0">
                            Masuk
                        </button>
                    </form>
                    {{-- Mobile button - end --}}

                    {{-- Desktop button - start --}}
                    <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                            Masuk
                        </button>
                    </form>
                    {{-- Desktop button - end --}}
                </ul>
            </div>
        </nav>
        {{-- Navbar - end --}}

    </div>

    {{ $slot }}

    {{-- TODO: NEED CHECK (a50MQ2pmjG/100) - START --}}
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <h5>FEATURES</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">Reviews</a>
                                        </li>
                                        <li>
                                            <a href="#">Community</a>
                                        </li>
                                        <li>
                                            <a href="#">Social Media Kit</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>ACCOUNT</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Refund</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">Rewards</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>COMPANY</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Media</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>Get Connected</h5>
                                    <ul class="list-unstyled">
                                        <li>Jakarta Selatan</li>
                                        <li>Indonesia</li>
                                        <li>0821 - 2222 - 8888</li>
                                        <li>support@nomads.id</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2025 Copyright Nomads • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>
    {{-- TODO: NEED CHECK (a50MQ2pmjG/100) - END --}}

    @include('partials.scripts')
</body>

</html>
