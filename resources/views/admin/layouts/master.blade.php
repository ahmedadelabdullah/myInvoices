<!DOCTYPE html>
<html lang="en">
	<head>

        @include('admin.layouts.head')

	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('admin-assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('admin.layouts.main-sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('admin.layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('admin.layouts.sidebar')
				@include('admin.layouts.models')
            	@include('admin.layouts.footer')
				@include('admin.layouts.footer-scripts')
	</body>
</html>
