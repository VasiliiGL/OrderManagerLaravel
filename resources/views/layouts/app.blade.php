<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<title>@yield('title-block')</title>
</head>
<body class="is-preload">
   

	<!-- Wrapper -->
	<div id="wrapper">

<!-- Main -->
	<div id="main">
		<div class="inner">
		@yield('header')
			<!-- Header -->
			@include('partials.header')

			@yield('content')
			<!-- Banner -->
				@include('partials.banner')

			<!-- Section major_directions-->
				@include('partials.major_directions')
			<!-- Section major_company -->
				@include('partials.major_company')
		</div>
	</div>

<!-- Sidebar -->

	<div id="sidebar">
	@yield('sidebar')
		<div class="inner">
			

			<!-- Search -->
			@include('partials.search')

			<!-- Menu -->
			@include('partials.menu')

			<!-- Section post-->
			@include('partials.post',["posts"=>$posts])
	
			<!-- Section contacts -->
			@include('partials.contacts')

			<!-- Footer -->
			@include('partials.footer')

		</div>
	</div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</body>
</html>