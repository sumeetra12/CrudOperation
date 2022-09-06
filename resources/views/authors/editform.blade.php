@extends('includes.layout')
@section('content')
<h1>Edit Authors Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf 
                    @method('put')
                    <div class="mb-3">
                        <lable for="name" class="form-label">Name</lable>
                        <input type="text" class="form-control" id="name" name="name" value="{{$author->name}}">
                    </div>

                    <div class="mb-3">
                        <lable for="address" class="form-label">Address</lable>
                        <input type="text" class="form-control" id="address" name="address" value="{{$author->address}}">
                    </div>

                    <div class="mb-3">
                        <lable for="number" class="form-label">Number</lable>
                        <input type="text" class="form-control" id="number" name="number" value="{{$author->number}}">
                    </div>

                    <div class="mb-3">
                        <lable for="email" class="form-label">Email</lable>
                        <input type="email" class="form-control" id="email" name="email" value="{{$author->email}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>


                </form>

                @if (session()->has('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif

            </div>
        </div>
    </div>
    
@endsection
