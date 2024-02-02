<section >
					<header class="major">
						<h2>{{$organization->title}}</h2>
					</header>
					<div class="orders">
						<article>
							<p>{!! $organization->description !!}</p>						
						</article>						
					</div>
					<ul class="actions">
						<li><a href="{{route('organizations.index')}}" class="button">Назад</a></li>
					</ul>
				</section>