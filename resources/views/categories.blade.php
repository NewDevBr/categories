@extends('layout.app', ["current"=>"categories"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Categories register</h5>
        @if(count($categories) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <th>Code</th>
                    <th>Category name</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="/categories/edit/{{$category->id}}" class="btn btn-sm btn-primary">Edit</a> 
                                <a href="/categories/delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
            <div class="card-footer">
                <a href="/categories/new" class="bnt btn-sm btn-primary" role="button">New category</a>
            </div>
        </div>
    </div>
@endsection