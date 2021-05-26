@extends('layout.app', ["current"=>"categories"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categories/update/{{$category->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <lable for="categoriename">Please, alter a category name bellow:</label>
                    <input type="text" class="form-control" name="categoryename" value="{{$category->name}}" placeholder="categorie name">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>
@endsection