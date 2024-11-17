@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <div class="row mt-3">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="{{ Storage::url($product->image) }}" alt="Product Image" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Price:</strong> Php {{ number_format($product->price, 2) }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-secondary">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
