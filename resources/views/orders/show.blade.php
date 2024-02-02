@extends ('layouts.app')

@section('title',$order->number)

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
                            <!-- Header -->
                            @include('partials.header')
                            @include('orders.partials.order')          
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