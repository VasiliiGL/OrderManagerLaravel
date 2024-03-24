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

                            <h2 > Перечень заказов </h1>
							<table>
								<caption>Перечень заказов  </caption>
								<tr><th> Номер заказа </th> <th>Описание</th><th>Изготовитель</th>
								@foreach($orders as $order)

								<tr><th>  <a href="{{route ('orders.show',$order->id )}}">{{$order->number}}</a> </th> <th>{!! $order->description !!}</th><th>{!! $order->Organization->title !!}</th>
									@auth('admin')
										<td>
											<form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST">
											<a href="{{route( 'admin.orders.edit', $order->id)}}" class="button">Изменить</a>
												@csrf
												@method('DELETE')
												<button type="submit" >Удалить</button>
											</form>
										</td>
									@endauth
									@auth('web')
										<td>										
											<a href="{{route('nomenclature', $order->id)}}" class="button">Редактировать</a>										
										</td>
									@endauth
								@endforeach
								

							</table>
								
                           <div > {{$orders->links()}}  </div>    
						 
						
							<ul class="actions">
								<li><a href="{{route('home')}}" class="button">Назад</a></li>
							</ul>
						</div>
                           
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