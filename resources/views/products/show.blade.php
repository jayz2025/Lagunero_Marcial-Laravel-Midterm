@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ Storage::url($product->image) }}" alt="Product Image" class="img-fluid">
    <p><strong>Price:</strong>  Php {{ number_format($product->price, 2) }}</p>
    <p>{{ $product->description }}</p>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
