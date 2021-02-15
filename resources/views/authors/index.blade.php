@extends('app')
@section('content')
<div class="container mb-5">
    <h5>AUTHORS</h5><br>
 
    <a href="{{ route('authors.create') }}" class="btn btn-success ml-2">Add author</a>
    <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">Author</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->name }}</th>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-success">Edit</a>
                        <form class="ml-2" action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                        
                    </td>           
                </tr>     
            @endforeach             
        </tbody>
      </table>
    </div>
@endsection