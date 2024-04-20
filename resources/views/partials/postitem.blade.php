<section >
					<header class="major">
						<h2>{{$post->title}}</h2>
					</header>
					<div class="posts">
						<article>
							<a href="#" class="image"><img width="500" height="500" src="/storage/posts/{{$post->thumbnail}}" alt="" /></a>
							<p>{!! $post->description !!}</p>						
						</article>
						<form method="POST" action="{{route('comment', $post->id)}}">
							@csrf
							<textarea name="text" placeholder="Ваш комментарий..." spellcheck="false"></textarea>
							@error('text')
								<p class="text-red-500">{{$message}}</p>
							@enderror
							<button type="submit">Написать</button>
						</form>	
										
					</div>
					<div>
						<h5>Комментарии : </h5>
							@foreach($post->comments as $comment)
								<div>
									<p>Пользователь: {{$comment->user->name}}</p>
									<textarea>{{$comment->text}}</textarea>
									
								</div>
							@endforeach


						</div>	
					<ul class="actions">
						<li><a href="{{route('home')}}" class="button">Назад</a></li>
					</ul>
				</section>