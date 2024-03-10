@extends ('layouts.app')

@section('title', 'Авторизация для заказчика')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            <header id="header">
					<a href="{{route('home')}}" class="logo"><strong>Группа компаний</strong> ИжПЗ</a>
					
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                        <div class="sm:mb-0 self-center">
                            <a href="{{route('customer.logout')}}" 
                            class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                        </div>
					</ul>
                   
			</header>
           <!-- @include('admin.auth.partials.login')-->
         
            <div class="h-screen dg-white flex flex-col space-y-10 justify-center items-center">
                <div class="bg-white w-96 shadow-x1 rounted p-5">
                    <h1 class="text-3x1 font-medium">Вход для заказчика</h1>
                    <form method="POST" action="{{route('customer.login_process')}}"   class="col-3 offset-4">
                        @csrf
                        <input name="title" type="text" class="form-control" placeholder="Логин"/>
                        
                            @error('title')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                    
                        <input name="password" type="text" class="form-control" placeholder="Пароль"/>
                        
                            @error('password')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror

                        <button type="submit" class="btn btn-lg btn-primary">Войти</button>
                    </form>
                </div>
            </div> 

            <div>
                    <a href="{{route('customer.register') }}" class="font-medium text-blue-900 hover:dg-blue-300 rounted-md p-2"> 
                    Регистрация</a> 
            </div>
        
        </div>
        
    </div>
   
    
<!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
          

            <!-- Menu menu-->
           

            <!-- Section contacts -->
                @include('partials.contacts')
            <!-- Footer -->
                @include('partials.footer')

        </div>
    </div>

</div>
@endsection