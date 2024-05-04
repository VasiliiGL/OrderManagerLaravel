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

			<!-- Section orders -->
            <div>
            <table>
				<caption>
                    Перечень заказов {{$customer->title}}
                </caption>
                <tr><th> Номер заказа </th> <th>Описание</th><th>Изготовитель</th>	
                    @foreach($orders as $order)

                    <tr>
                        <th> <a href="{{route ('orders.show',$order->id )}}">{{$order->number}}</a> </th> 
                        <th>{!! $order->description !!}</th>
                        <th>{!! $order->Organization->title !!}</th>
                    </tr>
                                        
                    @endforeach			

				</table>
      
            </div>
      
		
       
        </div>
        
    </div>
   
    
<!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
          

            <!-- Menu menu-->
                    
                <button> <a href="{{route('home')}}"> Главная страница </a></button>

            <!-- Section contacts -->
                @include('partials.contacts')
            <!-- Footer -->
                @include('partials.footer')

        </div>
    </div>

</div>
@endsection