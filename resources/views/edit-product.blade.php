@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Product</h2>

    <div class="card shadow-lg p-4">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="font-weight-bold">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="price" class="font-weight-bold">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="image" class="font-weight-bold">Product Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($product->image)
                    <div class="mt-2">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

                    </div>
                @endif
            </div>

            <div class="form-group mt-3">
                <label for="description" class="font-weight-bold">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block mt-4">Update Product</button>
        </form>
    </div>
</div>
@endsection
