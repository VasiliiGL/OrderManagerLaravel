<section >
					<header class="major">
						<h2>{{$post->title}}</h2>
					</header>
					<div class="posts">
						<article>
							<a href="#" class="image"><img width="300" height="300" src="/storage/posts/{{$post->thumbnail}}" alt="" /></a>
							<p>{!! $post->description !!}</p>						
						</article>						
					</div>
				</section>