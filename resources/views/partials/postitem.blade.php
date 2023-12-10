<section >
					<header class="major">
						<h2>{{$post->title}}</h2>
					</header>
					<div class="posts">
						<article>
							<a href="#" class="image"><img width="500" height="500" src="/storage/posts/{{$post->thumbnail}}" alt="" /></a>
							<p>{!! $post->description !!}</p>						
						</article>						
					</div>
					<ul class="actions">
						<li><a href="{{route('posts.index')}}" class="button">Назад</a></li>
					</ul>
				</section>