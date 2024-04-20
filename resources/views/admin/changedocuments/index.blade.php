@extends ('layouts.admin')

@section('title', 'Страница администратора - учет изменений КД')
@section('content')
<!-- Wrapper -->
<div id="wrapper">

        <!-- Main -->
            <div id="main">
                <div class="inner">
                    <!-- Header -->
                    @include('partials.header')

                    <!-- Section учет изменений КД -->
                    @include('admin.changedocuments.changedocument',["changedocuments"=>$changedocuments])
                


                                
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