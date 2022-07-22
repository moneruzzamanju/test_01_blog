@extends('backend.layout.master')
@section('title','Show Details')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-info btn-sm" href="{{ route('categories.index') }}">All Categories</a>
                </div>
                <div class="card-body">
                    <p>{{ $category->name }}</p>
                    <p>{{ $category->description }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
