@extends('layout.app', ["current"=>"products"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Products register</h5>
        @if(count($products) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <th>Code</th>
                    <th>Products name</th>
                    <th>Products category</th>
                    <th>Stock</th>
                    <th>Unitary price</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->categorie->name }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            @if($product->created_at == $product->updated_at)
                                <td> -------------- </td>
                            @else <td>{{$product->updated_at}} @endif</td>
                            <td>
                                <a href="/products/edit/{{$product->id}}" class="btn btn-sm btn-primary">Edit</a> 
                                <a href="/products/delete/{{$product->id}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
            <div class="card-footer">
                <a href="/products/new" class="bnt btn-sm btn-primary" role="button">New product</a>
            </div>
        </div>
    </div>
@endsection