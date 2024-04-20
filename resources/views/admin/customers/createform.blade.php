
<section>
<link rel="stylesheet" href="assets/css/main.css" />
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Новая организация-заказчик</h1>

        <form enctype="multipart/form-data"  method="POST" action="{{ route('admin.customers.store') }}"   class="col-3 offset-4">
            @csrf
            <ul>
            <input name="title" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('name') border-red-500 @enderror"  placeholder="Имя организации" />

                @error('title')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="address"  type="text" placeholder="Адрес" />
                @error('address')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="description"  type="text" placeholder="Описание организации" />
                @error('description')
                    <p class="text-red-500">{{$message}}</p>
                @enderror    
            <input name="phone"  type="text" placeholder="Телефон для связи" />
                @error('phone')
                    <p class="text-red-500">{{$message}}</p>
                @enderror 

            <input name="email" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="password" type="password" class="w-full h-12 border border-grey-800 rounded px-3 @error('password') border-red-500 @enderror" placeholder="Пароль"/>

                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="password_confirmation" type="password" class="w-full h-12 border border-grey-800 rounded px-3 @error('password_confirmation') border-red-500 @enderror" 
                placeholder="Подтверждение пароля"/>
                @error('password_confirmation')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

                <br>
              
                            
            </ul>
            <br />
            <button type="submit" class="btn btn-lg btn-primary">Сохранить </button>
        </form>
        <ul class="actions">
			<li><a href="{{route('admin.customers.index')}}" class="button">Назад</a></li>
		</ul>
    </div>
</div> 
