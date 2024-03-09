<section >
					<header class="major">
						<h2>
						<li><a href="{{route('organizations.show', $organization->id )}}">{!! $organization->title !!}</a></li>
						</h2>
												
					</header>
					<div class="orders">
						<article>
							<p>{!! $organization->description !!}</p>
						</article>
							<ul class="actions">
								<li><a href="{{route('customer.login')}}">Оформить заказ</a></li>
							</ul>       						
					</div>
					
				</section>