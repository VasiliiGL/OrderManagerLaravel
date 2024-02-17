<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Регистрация заказчика</h1>
        <form action="{{route('customer.register_process')}}"  class="space-y-5 mt-5" method="POST">
            @csrf
            <input name="title" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('name') border-red-500 @enderror"  placeholder="Имя организации" />

                @error('title')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <input name="adress"  type="text" placeholder="Адрес" />
                @error('adress')
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
            <div>
                <a href="{{route('customer.login') }}" class="font-medium text-blue-900 hover:dg-blue-300 rounted-md p-2"> 
                    Есть аккаунт?</a> 
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-primary">Зарегистрировать</button>
        </form>

    </div>
</div>
</section>
