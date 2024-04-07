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

                            <h2 > Заказ {{$order->number}} / {{$order->Organization->title}}  </h1>
							<table>
								<caption>Номенклатура заказа </caption>
                                <tr><th> Обозначение </th> <th>Наименование</th><th>Количество,шт</th>
                                @foreach($orderdetails as $detail)
                                <tr><th>  {{$detail->designdocument->designation}}</a> </th> <th>{{$detail->designdocument->name}}</th><th>{{$detail->pivot->need}}</th>
                                        <td>
											<form action="#" method="POST">
											<a href="#" class="button">Изменить</a>
												@csrf
												@method('DELETE')
												<button type="submit" >Удалить</button>
											</form>
										</td>

                                @endforeach
								
                               
							</table>



                                    @auth('web')
                                        <td>										
											<a href="{{route('addorderdetails', $order->id)}}" class="button">Добавить позицию</a>										
										</td>
										<td>										
											<a href="{{route('nomenclature', $order->id)}}" class="button">Сохранить</a>										
										</td>
                                        
									@endauth
								

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