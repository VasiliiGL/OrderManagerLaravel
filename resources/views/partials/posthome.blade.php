<section>
					<header class="major">
						<h2>Новости</h2>
					</header>
                    @foreach($posts as $post)
				        @include("posts.partials.itemhome",["post"=>$post])
                    @endforeach
					<div > {{$posts->links()}}  </div> 
					<ul class="actions">
						<li><a href="{{route('home')}}" class="button">Назад</a></li>
					</ul>
				</section>