<div class="mini-posts">
				<h2>{{$organization->title}}</h2>				
						<a href="{{route('orders.show',$order->id)}}" >
						<h2>{{$order->number}}</h2>
						</a>
						<p>{!! $order->description !!}</p>
				</div>