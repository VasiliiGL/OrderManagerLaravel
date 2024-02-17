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

                            <h2 > Вход для организаций </h1>
                            <form action="{{route('orders.index')}}" method="POST">
                            @csrf
                            <select id="organization" name = "organization">
                                    <option value = "1"> 1 </option>
                                    <option value = "2"> 2 </option>
                                    <option value = "3"> 3 </option>
                                    <option value = "4"> 4 </option>
                                </select>

                            </form>
                                       
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