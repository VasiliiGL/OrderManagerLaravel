@extends ('layouts.app')

@section('title', isset($changedocument_order) ? "Редактировать позицию в заказе": 'Добавить позицию в заказ')

@section('content')
<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
						        @include('partials.header')

									<h2>{{isset($changedocument_order) ? "Редактировать позицию в заказе": 'Добавить позицию в заказ'}}</h2>

									<h2 > Заказ {{$order->number}} / {{$order->Organization->title}}  </h1>

									<form enctype="multipart/form-data" method="POST" action="{{ isset($changedocument_order) ? route('updateOrderdetails',$changedocument_order->id): route('storeOrderdetails') }}" >
										@csrf

										@if(isset($changedocument_order))
											@method('PUT')
										@endif

										<label for="order_id"></label>
											<input type="hidden" name="order_id" type="text" class="form-control" placeholder="Заказ" value ="{{$order->id}}" />
											@error('order_id')
												<p class="text-red-500">{{$message}}</p>
											@enderror
									
										<p> 
											
												@if(isset($nomenclature))
												<label for="changedocument_id">Выбрать позицию (Обозначение ДСЕ/Номер изменения )</label>
													<select name="changedocument_id">
														@foreach ($nomenclature as $changedocument)
															<option value ="{{$changedocument->id}}" > {{$changedocument->designdocument->designation}} / {{$changedocument->number}}</option>
														@endforeach	
													</select> 	
												@else
													<label for="changedocument_id">Обозначение ДСЕ/Номер изменения: {{$changedocument->designdocument->designation}} / {{$changedocument->number}}</label>
													<input type="hidden"  name="changedocument_id" type="text" class="form-control" placeholder="Обозначение ДСЕ/номер изменения" value ="{{$changedocument->id}}" />	
												@endif
											
										</p>
										@error('changedocument_id')
											<p class="text-red-500">{{$message}}</p>
										@enderror
										
										<label for="need">Количество, шт</label>
										<input name="need" type="number" class="form-control" placeholder="Количество"/>
										@error('need')
											<p class="text-red-500">{{$message}}</p>
										@enderror
										<br /> <br />
										@if(isset($changedocument_order))
										<button type="submit" class="btn btn-lg btn-primary">Сохранить изменения </button>
										@else
										<button type="submit" class="btn btn-lg btn-primary">Добавить </button>
										@endif

									</form>

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
	