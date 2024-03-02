<div class="mini-posts">				
						<h2>{{$post->title}}</h2>
						
						<a href="{{route('posts.show',$post->id)}}" 
						class="image"><img src="storage/posts/{{$post->thumbnail}}" width="300" height="300"alt="" /></a>
						<p>{!! $post->preview !!}</p>
				</div>