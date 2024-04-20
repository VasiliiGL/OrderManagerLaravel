<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
    <h5>Страница администратора</h5>
        <h1 class="text-3x1 font-medium">{{ isset($post) ? "Редактировать статью ID ($post->id)":'Создание новости'}}</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ isset($post) ? route('admin.posts.update', $post->id): route('admin.posts.store') }}"   class="col-3 offset-4">
            @csrf

            @if(isset($post))
                @method ('PUT')
            @endif
            <ul>
                <li>
                <label for="title">Название:</label>
                    <input  name="title" type="text" class="form-control" placeholder="Название" value ="{{$post->title??''}}" />
                    @error('title')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="preview">Краткое описание:</label>
                    <input  name="preview" type="text" class="form-control" placeholder="Краткое описание" value ="{{$post->preview??''}}" />
                    @error('preview')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="description">Содержание:</label>
                    <input  name="description" type="text" class="form-control" placeholder="Содержание" value ="{{$post->description??''}}" />
                    @error('description')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                @if(isset($post) && $post->thumbnail)
                    <div>
                        <img src="storage/posts/{{$post->thumbnail}}" width="300" height="300"alt="" />
                    </div>
                @endif
                <label for="thumbnail">Фото:</label>
                    <input  name="thumbnail" type="file" class="form-control" placeholder="Фото"  />
                    @error('thumbnail')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Сохранить </button>
        </form>
        <ul class="actions">
			<li><a href="{{route('admin.posts.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
</section>