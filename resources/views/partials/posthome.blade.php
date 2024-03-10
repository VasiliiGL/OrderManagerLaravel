<section>
					<header class="major">
						<h2>Новости</h2>
					</header>
                    @foreach($posts as $post)
				        @include("posts.partials.itemhome",["post"=>$post])
                    @endforeach
					<ul class="actions">
						<li><a href="{{route('home')}}" class="button">ntct</a></li>
					</ul>
				</section>