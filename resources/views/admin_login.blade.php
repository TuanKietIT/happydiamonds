
<!DOCTYPE html>
<head>
<title>| Login |</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<link rel="stylesheet" href="{{asset('public/backend/css/style.css')}}" >
<link rel="stylesheet" href="{{asset('public/backend/css/style-responsive.css')}}" >
<link rel="stylesheet" href="{{asset('public/backend/css/font-awesome.css')}}" >
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" >

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
	<?php
	 $message = Session::get('message');
	 if ($message) {
	 	echo '<span class="message-text">'.$message.'</span>';
	 	Session::get('message',null);
	 }
	?>
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
			{{csrf_field()}}
			<input type="text" class="ggg" name="admin_email" placeholder="Admin" required="">
			<input type="password" class="ggg" name="admin_password" placeholder="Password" required="">
			<span><input type="checkbox" /> Ghi nhớ</span>
			<div class="clearfix"></div>
			<input type="submit" value="Đăng nhập" name="login">
		</form>
</div>
</div>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
