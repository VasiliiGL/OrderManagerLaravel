@extends ('layouts.app')

@section('title','Заказы')

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
                            <!-- Header -->
                            @include('partials.header')
							@include('customer.orders.createform', $customer)
			

							<ul class="actions">
								<li><a href="{{route('home')}}" class="button">Назад</a></li>
							</ul>
						</div>
					
					</div>
                   
                    
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
                             @include('partials.search')

							<!-- Menu menu-->
                                @include('partials.menu')

							<!-- Section contacts -->
                                @include('partials.contacts')
							<!-- Footer -->
                                @include('partials.footer')

						</div>
					</div>

			</div>
@endsection