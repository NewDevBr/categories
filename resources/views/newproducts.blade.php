@extends('layout.app', ["current"=>"products"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/products/new" method="POST">
                @csrf
                <div class="form-group">
                    <lable for="productname">Please, type a product name bellow:</label>
                    <input type="text" class="form-control" name="productname" placeholder="Product name" maxlength="45">
                    <br>
                    <lable for="howmanystock">How many of this product are in stock? (Enter a whole number)</label>
                    <input type="number" class="form-control" name="howmanystock" placeholder="Stock product" pattern="[0-9]*" maxlength="45">
                    <br>
                    <lable for="price">Unitary price</label>
                    <input type="number" class="form-control" name="price" placeholder="Product price" maxlength="45">
                    <br>
                    <lable for="category">Select the product category: </label>
                    <select name="category" class="form-control">
                        @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>
@endsection