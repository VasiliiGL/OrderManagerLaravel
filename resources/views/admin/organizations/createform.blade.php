<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Новая организация-изготовитель</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('admin.organizations.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
                <li>
                <label for="title">Название:</label>
                    <input  name="title" type="text" class="form-control" placeholder="Название" value ="{{$organization->title??''}}" />
                    @error('title')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

                <li>
                <label for="address">Адрес:</label>
                    <input  name="address" type="text" class="form-control" placeholder=">Адрес" value ="{{$organization->address??''}}" />
                    @error('address')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

                <li>
                <label for="email">Email:</label>
                    <input  name="email" type="text" class="form-control" placeholder=">Почта" value ="{{$organization->email??''}}" />
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
   
                <li>
                <label for="phone">Телефон:</label>
                    <input  name="phone" type="text" class="form-control" placeholder="Телефон" value ="{{$post->phone??''}}" />
                    @error('preview')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

                <li>
                <label for="preview">Описание:</label>
                    <input  name="description" type="text" class="form-control" placeholder="Описание" value ="{{$post->description??''}}" />
                    @error('description')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>

                <li>
                <label for="password">Пароль:</label>
                    <input  name="password" type="file" class="form-control" placeholder="Фото" value ="{{$post->password??''}}" />
                    @error('password')
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