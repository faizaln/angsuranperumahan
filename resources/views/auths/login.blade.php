<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Masuk - Angsuran Perumahan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('tema/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('tema/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('tema/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('tema/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('tema/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><h3>Masuk</h3><!--<img src="{{asset('tema/assets/img/logo.png')}}" alt="DiffDash">--></div>
							<p class="lead">SIM Pembayaran Angsuran Perumahan</p>
						</div>
                        <form class="form-auth-small" action="/postlogin" method="POST">
                        {{csrf_field()}}
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Email</label>
								<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
							</div>
							<!-- <div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
									<input type="checkbox">
									<span>Remember me</span>
								</label>
								<span class="helper-text element-right">Don't have an account? <a href="page-register.html">Register</a></span>
							</div> -->
							<button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
							<div class="bottom">
								<!-- <span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
