@extends ('layouts.app')

@section('title', 'Авторизация для администратора')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
            @include('partials.header')
            @include('admin.auth.partials.login')
                          
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