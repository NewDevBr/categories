@extends('layout.app', ["current"=>"home"])

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Register categories</h5>
                        <p class="card-text">
                            Here you can make register all products categories
                        </p>
                        <a href="/categories" class="btn btn-primary">Register a category</a>
                    </div>
                </div>
                
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Here you can register a product</h5>
                        <p class="card-text">
                            Here you can make register all your products, just
                            remember to first register the categories.
                        </p>
                        <a href="/products" class="btn btn-primary">Register a products</a>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection