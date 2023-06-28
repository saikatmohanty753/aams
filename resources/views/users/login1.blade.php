<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login/css/style.css') }}">

    <title>AAMS</title>
  </head>
  <style>

    .content .contents .form-group.first, .content .bg .form-group.first{
        border-radius: 7px 7px 7px 7px;
    }
    .content .contents .form-group.last, .content .bg .form-group.last{
        border-radius: 7px 7px 7px 7px;
    }
    .content .contents .form-group, .content .bg .form-group{
        padding: 6px 6px;
    }
  </style>
  <body>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('login/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Alumni management system</p>
            </div>
            <form action="{{ route('login') }}" method="post">
              <div class="form-group first mb-2">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

              <div class="social-login">
                <a href="{{ route('facebook-login') }}" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="{{ route('linkedin-login') }}" class="linkedIn">
                    <span class="icon-linkedin mr-3"></span>
                </a>
                <a href="{{ route('gmail-login') }}" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{asset('login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('login/js/popper.min.js') }}"></script>
    <script src="{{asset('login/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('login/js/main.js') }}"></script>
  </body>
</html>
