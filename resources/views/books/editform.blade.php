@extends('includes.layout')
@section('content')
<h1>Edit Books Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf 
                    @method('put')
                    <div class="mb-3">
                        <lable for="title" class="form-label">Title</lable>
                        <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
                    </div>

                    <div class="mb-3">
                        <lable for="imahe" class="form-label"> Image</lable>
                        <input type="file" class="form-control" id="image" name="image" value="{{$book->image}}">
                    </div>

                    <div class="mb-3">
                        <lable for="sdescription" class="form-label">Short Description</lable>
                        <input type="sdescription" class="form-control" id="sdescription" name="sdescription" value="{{$book->sdescription}}">
                    </div>

                    <div class="mb-3">
                        <lable for="description" class="form-label">Description</lable>
                        <textarea rows="10" col="50" class="form-control" id="description" name="description" placeholder="{{$book->description}}"></textarea>
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

