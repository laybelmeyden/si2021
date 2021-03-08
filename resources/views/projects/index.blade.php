@extends('profile.master')
@section('title', 'Все проекты')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('projects.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('projects.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('projects.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $projects->links() !!}
    @endsection