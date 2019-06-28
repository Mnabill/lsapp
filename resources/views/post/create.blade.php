@extends('layout.pro')


@section('content')
    
       <h1>Create Post</h1>
                   
       <form action="/posts" method="POST">
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
                <label for="exampleFormControlTextarea1">Post Body</label>
                <textarea class="form-control" name="body" rows="7" placeholder="Enter Your post"></textarea>
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

     
   
@endsection
