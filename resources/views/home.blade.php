@extends ('layouts.app')

@section('title-block')
     Главная страница
@endsection
@section('header')
     Голова
@endsection

@section('content')
    Главная страница
@endsection


   <!--  @foreach($posts as $post)
			<div class="mini-posts">
			
                    <h2>{{$post->title}}</h2>
							<a href="#" class="image"><img src="/storage/posts/{{$post->thumbnail}}" alt="" /></a>
							<p>{!! $post->preview !!}</p>
            </div>
                            @endforeach-->



