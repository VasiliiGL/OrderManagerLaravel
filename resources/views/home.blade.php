@extends ('layouts.app')

@section('title','Главная страница')

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
						        @include('partials.header')

							<!-- Banner -->
                                @include('partials.banner')

							<!-- Section major_directions -->
                                @include('partials.major_directions')

							<!-- Section major_company-->
                                @include('partials.major_company')
								

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
                             @include('partials.search')

							<!-- Menu menu-->
                                @include('partials.menu')

							<!-- Section post -->
								 @include('partials.posthome',["posts"=>$posts])

							<!-- Section contacts -->
                                @include('partials.contacts')
							<!-- Footer -->
                                @include('partials.footer')

						</div>
					</div>

			</div>
@endsection
	
