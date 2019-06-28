@extends('layout.pro')

@section('content')
    
<a href="/posts " class="btn btn-primary"> Go Back </a>
    
<h1>  {{$post->title}} </h1>
<p> {{$post->body}}  </p>

<hr>

<small> Writen On {{$post->created_at}}</small>
<hr>

    <a href="/posts/{{$post->id}}/edit " class="btn btn-primary" >Edit </a>

     <form action="/posts/{{$post->id}}" method="POST" >
            @csrf
             @method('DELETE')
            <button class="btn btn-danger  float-right"> DELETE</button>
     </form>
@endsection

