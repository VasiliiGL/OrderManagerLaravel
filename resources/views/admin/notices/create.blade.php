@extends ('layouts.admin')

@section('title', 'Страница администратора -Зарегистрировать извещение')
@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
           

			
            @include('partials.header')
            <!-- Section извещения -->
                    @include('admin.notices.createform')
      

       
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