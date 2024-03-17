@extends ('layouts.applog')

@section('title', 'Регистрация пользователя')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            @include('partials.header')
            <!-- register -->
            @include('partials.register')
                          
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