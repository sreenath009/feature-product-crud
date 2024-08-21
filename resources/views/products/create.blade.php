@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Add New Product</h2>
        <div class="d-flex justify-content-end mb-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"><span style="color:red">*</span>Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label"><span style="color:red">*</span>Product Price</label>
                <input type="number" step="0.01" class="form-control" id="price" required name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Save Product</button>
        </form>
    </div>
@endsection
