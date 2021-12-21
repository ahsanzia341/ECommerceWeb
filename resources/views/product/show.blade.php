@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head style-primary">
                        <header>
                            <span class="card-title">Show Product</span>
                        </header>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $product->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $product->image }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $product->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Discount:</strong>
                            {{ $product->discount }}
                        </div>
                        <div class="form-group">
                            <strong>Is Featured:</strong>
                            {{ $product->is_featured }}
                        </div>
                        <div class="form-group">
                            <strong>Color Id:</strong>
                            {{ $product->color_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
