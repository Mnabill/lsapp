@extends('layout.pro')

@section('content')

<h1>Edit Post</h1>
                   
<form action=" /posts/{{$post->id}}" method="POST" >
    @csrf
    @method('PUT')
   
 <div class="form-group">
   <label for="title">Title</label>
   <input  type="text" class="form-control" name="title" placeholder="Enter title" value="{{$post->title}}">

 </div>
 <div class="form-group">
         <label for="exampleFormControlTextarea1">Post Body</label>
         <input class="form-control" name="body" rows="7" placeholder="Enter Your post" value="{{$post->body}} ">
       </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection