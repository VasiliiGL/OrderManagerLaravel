@extends ('layouts.app')

@section('title',$organization->title)

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
                            <!-- Header -->
                            @include('partials.header')
                            @include('organizations.partials.organization')
							  
							<ul class="actions">
								<li><a href="{{route('home')}}" class="button">Назад</a></li>
							</ul>        
						</div>
                        
					</div>
                   
                    
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

						

							<!-- Section contacts -->
                                @include('partials.contacts')
							<!-- Footer -->
                                @include('partials.footer')

						</div>
					</div>

			</div>
@endsection