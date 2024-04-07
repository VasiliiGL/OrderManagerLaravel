<section>
<div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
    <div class="bg-white w-96 shadow-x1 rounted p-5">
        <h1 class="text-3x1 font-medium">Вход</h1>
        <form method="POST" action="{{route('customer.login_process')}}"   class="col-3 offset-4">
            @csrf
            <input name="title" type="text" class="form-control" placeholder="Предприятие"/>
            
                @error('title')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
           
            <input name="password" type="text" class="form-control" placeholder="Пароль"/>
            
                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror

            <div>
                <a href="#" class="font-medium text-blue-900 hover:dg-blue-300 rounted-md p-2"> Забыли пароль?</a>
            </div>
            <div>
                <a  href="{{route('customer.register') }}" class="font-medium text-blue-900 hover:dg-blue-300 rounted-md p-2"> Регистрация</a>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Войти</button>
        </form>
    </div>
</div> 
</section>