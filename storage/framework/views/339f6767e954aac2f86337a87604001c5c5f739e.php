<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login | Alumni management system</title>
    <link rel="stylesheet" href="<?php echo e(asset('login/css/custom.css')); ?>">
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
				<input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required />
				<input type="password" name="password" placeholder="Password" required />
				<a href="#">Forgot your password?</a>
				<button type="submit">Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay-img">
                <img src="<?php echo e(asset('login/images/pens.jpg')); ?>">
			</div>
		</div>
	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\aams\resources\views/users/newlogin.blade.php ENDPATH**/ ?>