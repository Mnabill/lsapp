@extends('layout.pro')


@section('content')
    
     @if(count($posts)>0) 
  @foreach ($posts as $post)
    <div class="well">
            <h1> <a href="/posts/{{$post->id}}">  {{$post->title}} </a></h1>
            <small> writen in {{$post->created_at}}</small> <hr>
             {{$post->body}} 
        
    </div >        
        @endforeach

        {{$posts->links()}}

    @else No Posts Founds    
    @endif
@endsection
