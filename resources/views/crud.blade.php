@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        @if(auth()->user()->hasRole('admin'))
            <h2>Product List</h2>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
        @else
            <h2>Access Denied</h2>
        @endif
    </div>

    @if(auth()->user()->hasRole('admin'))
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                            {{ $product->name }}
                        </td>
                        <td>{{ $product->created_at->format('d/m/Y') }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger">
            Anda tidak memiliki akses untuk melihat halaman ini.
        </div>
    @endif
</div>
@endsection
