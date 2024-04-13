<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">{{ isset($user) ? "Редактировать данные пользователя ($user->id)":'Создать учетную запись пользователя'}}</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ isset($post) ? route('admin.users.update', $user->id): route('admin.users.store') }}"   class="col-3 offset-4">
            @csrf

            @if(isset($user))
                @method ('PUT')
            @endif
            <ul>
                <li>
                <label for="name">Логин:</label>
                    <input  name="name" type="text" class="form-control" placeholder="Логин" value ="{{$user->name??''}}" />
                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="email">Email:</label>
                    <input  name="preview" type="text" class="form-control" placeholder="Email" value ="{{$user->email??''}}" />
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </li>
                <li>
                <label for="password">Пароль:</label>
                    <input  name="password" type="text" class="form-control" placeholder="Пароль" value ="{{$user->password??''}}" />
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