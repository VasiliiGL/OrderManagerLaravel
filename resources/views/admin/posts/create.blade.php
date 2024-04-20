@extends ('layouts.admin')

@section('title', isset($post) ? "Редактировать статью ID ($post->id)":'Страница администратора -Создание новости')
@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
           

			<!-- Section posts -->
            @include('partials.header')
			@include('admin.posts.createform')
      

       
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