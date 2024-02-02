<section >
					<header class="major">
						<h2>{{$order->number}}</h2>
					</header>
					<div class="orders">
						<article>
							<p>{!! $order->description !!}</p>						
						</article>						
					</div>
					<ul class="actions">
						<li><a href="{{route('orders.index')}}" class="button">Назад</a></li>
					</ul>
				</section>