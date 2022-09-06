@extends('includes.layout')

@section('content')
<h1>Books</h1>
<div class="container">
<div class="col-sm-4">
           <a href="/home" class="btn btn-primary">Home</a>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="post">
                @csrf 
                <div class="mb-3">
                    <lable for="title" class="form-label">Title</lable>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <lable for="image" class="form-label">Image</lable>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <lable for="sdescription" class="form-label">Short Description</lable>
                    <input type="text" class="form-control" id="sdescription" name="sdescription">
                </div>

                <div class="mb-3">
                    <lable for="description" class="form-label">Description</lable>
                    <textarea rows="10" col="50" class="form-control" id="description" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

        </div>

        <div class="col-sm-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <th>{{$book->id}}</th>
                        <td>{{$book->title}}</td>
                        <td>{{$book->image}}</td>
                        <td>{{$book->sdescription}}</td>
                        <td>{{$book->description}}</td>
                        <td>
                            <a href="{{ url('/books/edit', $book->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('/books/delete', $book->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>   
    </div>
</div>

@endsection