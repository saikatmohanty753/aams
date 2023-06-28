<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AAMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <style>
        .bg-color{
            background-color: rgb(183, 176, 176);
            margin: 0;
            padding: 0;
        }
        .bg-color .container{
            margin-top: 10vh;
        }
        .page_404 {
            padding: 40px 0;
            background: rgb(183, 176, 176);
            font-family: "Arvo", serif;
        }

        .page_404 img {
            width: 100%;
        }

        .four_zero_four_bg {
            background-image: url({{ asset('login/images/dribbble_1.gif') }});
            height: 400px;
            background-position: center;
        }

        .four_zero_four_bg h1 {
            font-size: 80px;
        }

        .four_zero_four_bg h3 {
            font-size: 80px;
        }

        .link_back {
            color: #fff !important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;
        }
        .link_404 {
            color: #fff !important;
            padding: 10px 20px;
            background: #17a2b8;
            margin: 20px 0;
            display: inline-block;
        }
        .contant_box_404 {
            margin-top: -31px;
        }
        .h2 span {
            text-decoration: underline;
            color: #17a2b8;
        }
    </style>
</head>
<body class="bg-color">
    <section class="page_404">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-10 col-sm-offset-1  text-center">
                                <div class="four_zero_four_bg">
                                    <h1 class="text-left text-warning">Oops !!</h1>

                                </div>
                                <div class="contant_box_404 text-center">
                                    <h5 class="h2">Hello! <span>{{ @session()->get('socialuser')->name }}</span> look like you're not registered with Alumni management system</h5>
                                    <a href="#" class="link_404">Register</a>
                                    <a href="{{ route('login') }}" class="link_back">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('login/js/popper.min.js') }}"></script>
    <script src="{{asset('login/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('login/js/main.js') }}"></script>
</body>
</html>
