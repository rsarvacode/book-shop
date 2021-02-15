@extends('app')
@section('content')
<div class="container">
    <h5>Create new Author</h5><br>
 
    <form name="New form" action="{{ route('authors.store') }}" method="post">
        @csrf
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
          
        </div>
        
       
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
      <br>
    </div>
@endsection