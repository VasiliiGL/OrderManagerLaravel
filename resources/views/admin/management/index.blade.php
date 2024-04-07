@extends ('layouts.admin')

@section('title', 'Панель администратора')
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
                    <li><a href="#VK" onclick="window.open('https://vk.com/share.php?url='+ window.location.href +'')" class="icon brands fa-vk"><span class="label">ВК</span></a></li>
						<li><a href="https://t.me/79124564606" class="icon brands fa-telegram"><span class="label">Телеграмм</span></a></li>
						<li><a href="https://www.whatsapp.com/" class="icon brands fa-whatsapp"><span class="label">whatsapp</span></a></li>
						<li><a href="https://www.viber.com/ru/" class="icon brands fa-viber"><span class="label">VIBER</span></a></li>
						<li><a href="mailto:mail@example.com" class="icon brands fa-google"><span class="label">mail</span></a></li>
                        <div class="sm:mb-0 self-center">
                            <a href="{{route('admin.logout')}}" 
                            class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                        </div>
					</ul>
                   
			</header>

			<!-- Section posts -->
         
						<h5>Страница администратора</h5>
				
		
                         
        </div>
        
    </div>
   
    
<!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
          

            <!-- Menu menu-->
                @include('admin.management.menu')

            <!-- Section contacts -->
                @include('partials.contacts')
            <!-- Footer -->
                @include('partials.footer')

        </div>
    </div>

</div>
@endsection