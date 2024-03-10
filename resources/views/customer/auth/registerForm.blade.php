@extends ('layouts.applog')

@section('title', 'Регистрация для заказчика')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            @include('partials.header')
        <section>
            <div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
                <div class="bg-white w-96 shadow-x1 rounted p-5">
                    <h1 class="text-3x1 font-medium">Регистрация для заказчика</h1>
                    <form action="{{route('register_process')}}"  class="space-y-5 mt-5" method="POST">
                        @csrf
                        <input name="title" type="text" class="w-full h-12 border border-grey-800 rounded px-3 @error('name') border-red-500 @enderror"  placeholder="Название предприятия" />

                            @error('title')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror

                        <input name="adress"  type="text" placeholder="Адрес: город, улица, дом"/>
                            @error('adress')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror

                        <input name="email"  type="text" placeholder="email" />
                            @error('email')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror

                        <input name="description"  type="text" placeholder="Краткое описание предприятия" />
                            @error('description')
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
                          
        </div>
        
    </div>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
             @include('partials.search')

            <!-- Menu menu-->
                @include('partials.menu')

            <!-- Section contacts -->
                @include('partials.contacts')
            <!-- Footer -->
                @include('partials.footer')

        </div>
    </div>

</div>
@endsection
