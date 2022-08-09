@extends('backend.layout.master')

@section('title','Edit Category')


@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Edit Category</h1>
            <form action="{{ route('categories.update',$category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="Category Name">
                </div>

                <div class="form-group">
                    <label for="description">Category Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" placeholder="Category Description">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success inline-block" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection
