@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Product</h2>

    @if(auth()->user()->hasRole('admin'))
        <!-- Konten yang hanya bisa dilihat oleh admin -->
        <p>Selamat datang, Admin!</p>

        <div class="card shadow-lg p-4">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name" class="font-weight-bold">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                </div>

                <div class="form-group mt-3">
                    <label for="price" class="font-weight-bold">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" required>
                </div>

                <div class="form-group mt-3">
                    <label for="image" class="font-weight-bold">Gambar Produk</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if($product->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                    @endif
                </div>

                <div class="form-group mt-3">
                    <label for="description" class="font-weight-bold">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-success btn-block mt-4">Update Produk</button>
            </form>
        </div>
    @else
        <!-- Konten untuk pengguna selain admin -->
        <p>Anda tidak memiliki akses ke halaman ini.</p>
    @endif
</div>
@endsection
