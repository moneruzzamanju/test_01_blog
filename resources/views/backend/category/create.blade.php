@extends('backend.layout.master')

@section('title','Create Category')


@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Create Category</h1>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                </div>

                <div class="form-group">
                    <label for="description">Category Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Category Description">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success inline-block" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection
