<section>
					<header class="major">
                    <h5>Страница администратора</h5>
                    <h2>Новости</h2>
                    <a href="{{route('admin.posts.create')}}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
				
					</header>
                
                    <div > 
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
                        <div class="button" > {{$posts->links()}}  </div> 
                        <ul class="actions">
                            <li><a href="{{route('admin.management')}}" class="button">Назад</a></li>
                        </ul>
                    </div>

