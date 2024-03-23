<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Создание статьи</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('admin.posts.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="customer">Название:</label>
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
                <label for="preview">Содержание:</label>
                    <input  name="description" type="text" class="form-control" placeholder="Содержание" value ="{{$post->description??''}}" />
                    @error('description')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="thumbnail">Фото:</label>
                    <input  name="description" type="file" class="form-control" placeholder="Фото" value ="{{$post->thumbnail??''}}" />
                    @error('thumbnail')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
               
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Сохранить </button>
        </form>
    </div>
</div> 
</section>