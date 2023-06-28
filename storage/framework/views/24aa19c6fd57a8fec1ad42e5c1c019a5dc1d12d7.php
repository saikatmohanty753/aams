<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login | Alumni management system</title>
    <link rel="stylesheet" href="<?php echo e(asset('login/css/custom.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slider.css')); ?>">
    <script src="<?php echo e(asset('login/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/toastr.min.js')); ?>"></script>
    <style>
        .w-100{
            width: 100%;
        }
        .row:after{
            display: table;
            clear: both;
        }
        .column{
            float: right;
            width: 30%;
        }
        .img-cap{
            float: left;
            margin-left: -82px;
            margin-top: 11px;
            height: 18px;
        }
        .reload{
            margin-left: 125px;
            margin-top: 12px;
            width: 43px;
            height: 36px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
        }
        .captcha-input{
            width: 113px;
            margin-left: -26px;
        }
        .bg-col{
            background-color: #eee;
        }
        @media  screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
            <form action="<?php echo e(route('login-user')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <h1>Login</h1>
                <div class="social-container">
                    <a href="<?php echo e(route('facebook-login')); ?>" class="social social-facebook"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="<?php echo e(route('gmail-login')); ?>" class="social social-gmail"><i class="fab fa fa-google fa-2x"></i></a>
                    <a href="<?php echo e(route('linkedin-login')); ?>" class="social social-linkedin"><i class="fab fa fa-linkedin fa-2x"></i></a>
                </div>
                <span>or use your account</span>
				<input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" autocomplete="off" required />
				<input type="password" name="password" placeholder="Password" autocomplete="off" required />
                <div class="row w-100">
                    <div class="column">
                        <span class="img-cap bg-col"><?php echo captcha_img(); ?></span>
                    </div>
                    <div class="column">
                        <button type="button" class="reload" id="reload">↻</button>
                    </div>
                    <div class="column">
                        <input type="text" id="captcha" class="captcha-input" name="captcha" autocomplete="off" placeholder="Captcha" required />
                    </div>
                </div>
				<a href="#">Forgot your password?</a>
				<button type="submit" class="button">Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay-img">
                <div class="img-slider">
                    <div class="slider-container">
                        <div class="slide">
                          <img src="<?php echo e(asset('login/images/1.jpg')); ?>">
                        </div>

                        <div class="slide">
                          <img src="<?php echo e(asset('login/images/pens.jpg')); ?>">
                        </div>

                        <div class="slide">
                          <img src="<?php echo e(asset('login/images/bg_1.jpg')); ?>">
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
    <?php echo $__env->make('alert_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript">
        $(".reload").click(function(){
            $.ajax({
                type:'GET',
                url:"<?php echo e(route('refresh_captcha')); ?>",
                success:function(data){
                    $(".img-cap").html(data.captcha);
                }
            });
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\aams\resources\views/users/login.blade.php ENDPATH**/ ?>