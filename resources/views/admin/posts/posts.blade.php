<section>
					<header class="major">
                    <h2>Страница администратора</h2>
                    <h2>Новости</h2>
                    <a href="{{route('admin.posts.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
				
					</header>

                    @foreach($posts as $post)
				        @include("posts.partials.item",["post"=>$post])
                        <div class="mt-8">
                            <a href="{{route('admin.posts.edit',$post->id)}}" class="text-indigo-600 hover:text-indigo-900">Изменить</a>
                            <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Удалить</button>
                            </form>
                            
                        </div>
                    @endforeach
					<ul class="actions">
						<li><a href="{{route('home')}}" class="button">Назад</a></li>
					</ul>
</section>