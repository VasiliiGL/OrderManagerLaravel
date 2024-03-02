@extends ('layouts.admin')

@section('title', 'Страница администратора -Новости')
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
                            <a href="{{route('admin.logout')}}" 
                            class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                        </div>
					</ul>
                   
			</header>

			<!-- Section posts -->
      
			@include('admin.posts.posts',["posts"=>$posts])


                          
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