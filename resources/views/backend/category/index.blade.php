@extends('backend.layout.master')

@section('title','All Categories')
   @section('content')
       <div class="row">

           <div class="col-md-9">
               <a class="btn btn-info" href="{{ route('categories.create') }}">Create Categories</a>

               <h1>All Category</h1>
               <table class="table table-bordered table-hover table-striped">
                   <thead>
                   <tr>
                       <th>Category Name</th>
                       <th>Category Description</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($categories as $category)
                       <tr>
                           <td>{{ $category->name }}</td>
                           <td>{{ $category->description }}</td>
                           <td>
                               <a class="btn btn-info btn-sm" href="{{ route('categories.show',$category->id)}}">Show Details</a>
                               <a class="btn btn-info btn-sm" href="{{ route('categories.edit',$category->id)}}">Edit</a>
                               <form class="d-inline-block" action="{{ route('categories.destroy',$category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete data?')">Delete</button>
                               </form>
                           </td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>

           </div>
       </div>
   @endsection
