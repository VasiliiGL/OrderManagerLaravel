<div class="mini-posts">
							<a> TEST </a>
						<a href="{{route('organizations.show',$organization->id)}}" >
						<h2>{{$organization->title}}</h2>
						</a>
						<p>{!! $organization->description !!}</p>
						<ul class="actions">
						<li><a href="{{route('home')}}" class="button">Назад</a></li>
					</ul>
				</div>