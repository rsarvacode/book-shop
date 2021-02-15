@extends('app')
@section('content')
<div class="container">
    <h5>Edit Author</h5><br>
 
    <form name="New form" action="{{ route('authors.update', $author->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}">
          
        </div>
        
       
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      <br>
    </div>
@endsection