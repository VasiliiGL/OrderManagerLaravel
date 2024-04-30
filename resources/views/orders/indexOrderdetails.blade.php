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
                                @foreach($order->changedocuments as $changedocument)
                                <tr><th>  {{$changedocument->designdocument->designation}}</a> </th> <th>{{$changedocument->designdocument->name}}</th><th>{{$changedocument->pivot->need}}</th>
                                        <td>
										<a href="{{route('editOrderdetails', $changedocument->id)}}" class="button">Изменить</a>
											<form action="{{route('destroyOrderdetails', $changedocument->id)}}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" >Удалить</button>
											</form>
										</td>
                                @endforeach
							</table>
                            @auth('web')
                                <td>										
									<a href="{{route('createOrderdetails', $order->id)}}" class="button">Добавить позицию</a>										
								</td>
								
								<td>										
									<a href="{{route('home')}}"class="button">Назад</a>										
								</td> 
							@endauth

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