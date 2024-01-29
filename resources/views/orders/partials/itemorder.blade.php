<div class="mini-posts">
<h2>{{$order->customer_id}}</h2>				
						<h2>{{$order->number}}</h2>
						
						<a href="{{route('orders.show',$order->id)}}" ></a>
						<p>{!! $order->description !!}</p>
				</div>