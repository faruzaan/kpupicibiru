<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>SIPDA UPI CIBIRU</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 px-4 left">
                <div class="d-flex flex-column justify-content-center vh-100">
                    <div class="img-3 mt-4" data-aos="fade-up" data-aos-duration="500"
                        data-aos-easing="ease-in-sine">
                        <img class="img-fluid" src="{{ asset('img/upi-logo.png') }}" alt="Logo UPI">
                        <img class="img-fluid" src="{{ asset('img/bem-logo.png') }}" alt="Logo BEM">
                        <img class="img-fluid" src="{{ asset('img/kpu-logo.png') }}" alt="Logo KPU">
                    </div>
                    <h1 class="text-color-1 font-weight-bold " data-aos="fade-up" data-aos-duration="500"
                        data-aos-easing="ease-in-sine">SIPDA
                    </h1>
                    <h1 class="text-color-1 " data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
                        UPI
                        CIBIRU
                    </h1>
                    <form action="{{route('login')}}" class="form-login" method="POST">
                        <div class="control-form1" data-aos="fade-up" data-aos-duration="500"
                            data-aos-easing="ease-in-sine">
                            <label for="username">NIM</label>
                            <input type="text" class="form-1 shadow-lg" name="username">
                        </div>
                        <div class="control-form1" data-aos="fade-up" data-aos-duration="500"
                            data-aos-easing="ease-in-sine">
                            <label for="password">PASSWORD</label>
                            <input class="form-1 shadow-lg" name="password" type="password">
                        </div>
                        <button type="submit" name="" class="btn btn-color-1 w-25 p-3 my-rounded mt-5"
                            data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7 right">
                <div class="d-flex flex-column justify-content-center vh-100 p-5" data-aos="fade-up"
                    data-aos-duration="500" data-aos-easing="ease-in-sine">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="embed-responsive embed-responsive-16by9 hero-video">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
