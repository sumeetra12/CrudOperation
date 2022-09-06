@extends('includes.layout')

@section('content')

<h1>Authors</h1>

<div class="container">
    <div class="col-sm-4">
           <a href="/home" class="btn btn-primary">Home</a>
    </div>
    <div class="row">
        
        <div class="col-sm-6">
            <form action="" method="post">
                @csrf 
                <div class="mb-3">
                    <lable for="name" class="form-label">Name</lable>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <lable for="address" class="form-label">Address</lable>
                    <input type="text" class="form-control" id="address" name="address">
                </div>

                <div class="mb-3">
                    <lable for="number" class="form-label">Number</lable>
                    <input type="text" class="form-control" id="number" name="number">
                </div>

                <div class="mb-3">
                    <lable for="email" class="form-label">Email</lable>
                    <input type="email" class="form-control" id="email" name="email">
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
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                    <tr>
                        <th>{{$author->id}}</th>
                        <td>{{$author->name}}</td>
                        <td>{{$author->address}}</td>
                        <td>{{$author->number}}</td>
                        <td>{{$author->email}}</td>
                        <td>
                            <a href="{{ url('/authors/edit', $author->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('/authors/delete', $author->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </table>

        </div>

    </div>
</div>


@endsection
