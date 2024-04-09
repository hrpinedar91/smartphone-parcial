@extends('layouts.base')
@section('title', 'Edit Smartphone')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Editar Smartphone</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('smartphones.index') }}" class="btn btn-danger">Atras</a>
        </div>
    </div>
    <form class="container row shadow m-3 p-3" method="post" action="{{ route('smartphones.update', $smartphone) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6 mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $smartphone->name }}" placeholder="Nombre">
        </div>
        <div class="col-md-6 mt-2">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $smartphone->description }}" placeholder="Descripcion">
        </div>
        <div class="col-md-6 mt-2">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $smartphone->price }}" placeholder="Precio">
        </div>
        <div class="col-md-6 mt-2">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $smartphone->stock }}" placeholder="Stock">
        </div>
        <div class="col-md-6 mt-2">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $smartphone->image }}" placeholder="Image">
        </div>
        <div class="col-md-6 mt-2">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{ $smartphone->weight }}" placeholder="Peso">
        </div>
        <div class="col-md-6 mt-2">
            <label for="is_waterproof" class="form-label">Waterproof</label>
            <select class="form-select" id="is_waterproof" name="is_waterproof">
                <option value="1" {{ $smartphone->is_waterproof ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$smartphone->is_waterproof ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="col-md-6 mt-2">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $smartphone->release_date }}" placeholder="Release Date">
        </div>
        <div class="col-md-6 mt-2">
            <label for="specifications" class="form-label">Specifications</label>
            <textarea class="form-control" id="specifications" name="specifications">{{ $smartphone->specifications }}</textarea>
        </div>
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Edit Product</button>
        </div>
    </form>
</div>
@endsection