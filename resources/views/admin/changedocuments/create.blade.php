@extends ('layouts.admin')

@section('title', 'Страница администратора -Создание чертежа с номером изменения')
@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            @include('partials.header')

			<!-- Section чертеж -->
      
			@include('admin.changedocuments.createform')
      


       
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