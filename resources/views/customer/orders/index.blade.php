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
			
							<table>
								<caption>Перечень заказов {{$customer->title}}</caption>
								<tr><th> Номер заказа </th> <th>Описание</th><th>Изготовитель</th>
								@foreach($orders as $order)

								<tr><th>  <a href="{{route ('customer.orders.show',$order->id )}}">{{$order->number}}</a> </th> <th>{!! $order->description !!}</th><th>{!! $order->Organization->title !!}</th>
								@endforeach

							</table>
								
							




                           <div > {{$orders->links()}}  </div>    
						   
						   <ul >
								<li><a href="#" class="button">Новый заказ</a></li>
							</ul>
							<ul >
								<li><a href="#" class="button">Назад</a></li>
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