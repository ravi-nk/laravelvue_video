<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="utf-8">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/admin.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>


<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="/home" class="header__logo">
				<img src="{{asset('admin/img/logo.svg')}}" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="/home" class="sidebar__logo">
			<img src="{{asset('admin/img/logo.svg')}}" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="{{asset('admin/img/user.svg')}}" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>{{Auth::user()->name}}</p>
			</div>

			<a href="{{route('logout')}}"class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
</a>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="{{route('admin.dashboard')}}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> Dashboard</a>
			</li>

			<!-- <li class="sidebar__nav-item">
				<a href="#" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> Catalog</a>
			</li> -->

			<li class="sidebar__nav-item">
				<a href="#" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> Users</a>
			</li>

			<!-- <li class="sidebar__nav-item">
				<a href="#" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> Comments</a>
			</li> -->

			<!-- <li class="sidebar__nav-item">
				<a href="#" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> Reviews</a>
			</li> -->
			
			<!-- dropdown -->
			<!-- <li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-copy"></i> Pages</a>

				<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
					<li><a href="add-item.html">Add item</a></li>
					<li><a href="edit-user.html">Edit user</a></li>
					<li><a href="signin.html">Sign In</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="forgot.html">Forgot password</a></li>
					<li><a href="404.html">404 Page</a></li>
				</ul>
			</li> -->
			<!-- end dropdown -->
		</ul>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<!-- <div class="sidebar__copyright">© 2020 HotFlix. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div> -->
		<!-- end sidebar copyright -->
	</div>
<main id="app">

@yield('content')
</main>
<script src="{{asset('admin/js/jquery-3.5.1.min.js')}}" defer></script>
	<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}" defer></script>
	<script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}" defer></script>
	<script src="{{asset('admin/js/jquery.mousewheel.min.js')}}" defer></script>
	<script src="{{asset('admin/js/jquery.mCustomScrollbar.min.js')}}" defer></script>
	<script src="{{asset('admin/js/select2.min.js')}}" defer></script>
	<script src="{{asset('admin/js/admin.js')}}" defer></script>

</body>

</html>