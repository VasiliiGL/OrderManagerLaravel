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

									<h2 > Заказ {{$order->number}} / {{$order->Organization->title}}  </h1>

									<form enctype="multipart/form-data" method="POST" action="{{ route('addorderdetail_process') }}" >
										@csrf

										<label for="order_id"></label>
											<input type="hidden" name="order_id" type="text" class="form-control" placeholder="Заказ" value ="{{$order->id}}" />
											@error('order_id')
												<p class="text-red-500">{{$message}}</p>
											@enderror
										<label for="changedocument_id">Выбрать позицию</label>
										<p> 
											<select name="changedocument_id">
												
												@foreach ($nomenclature as $changedocument)
												<option value ="{{$changedocument->id}}" > {{$changedocument->designdocument->designation}} / {{$changedocument->number}}</option>
												@endforeach
											</select> 
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
										<button type="submit" class="btn btn-lg btn-primary">Добавить </button>

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
	