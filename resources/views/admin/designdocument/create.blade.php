@extends ('layouts.admin')

@section('title', 'Страница администратора -Создать обозначение и тип документа')
@section('content')
<!-- Wrapper -->
<div id="wrapper">

<!-- Main -->
    <div id="main">
        <div class="inner">
            <!-- Header -->
           

            @include('partials.header')
            <!-- Section create designdocument -->
			@include('admin.designdocument.createform',$types)
      

       
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