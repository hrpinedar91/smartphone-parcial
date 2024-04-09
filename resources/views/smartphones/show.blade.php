@extends('layouts.base')

@section('title', 'Show Smartphone')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Show: {{ $smartphone->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('smartphones.index') }}" class="btn btn-danger">Go List</a>
        </div>
    </div>
    <div class="row shadow m-3 p-3">
        <div class="col-md-6">
            <div class="mb-2">
                <label for="name" class="form-label">Name:</label>
                <span class="form-control" id="name">{{ $smartphone->name }}</span>
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Description:</label>
                <p class="form-control" id="description">{{ $smartphone->description }}</p>
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price:</label>
                <span class="form-control" id="price">{{ $smartphone->price }}</span>
            </div>
            <div class="mb-2">
                <label for="stock" class="form-label">Stock:</label>
                <span class="form-control" id="stock">{{ $smartphone->stock }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="image" class="form-label">Image:</label>
                <img src="{{ $smartphone->image }}" alt="Smartphone image">
            </div>
            <div class="mb-2">
                <label for="weight" class="form-label">Weight:</label>
                <span class="form-control" id="weight">{{ $smartphone->weight }}</span>
            </div>
            <div class="mb-2">
                <label for="is_waterproof" class="form-label">Waterproof:</label>
                <span class="form-control" id="is_waterproof">{{ $smartphone->is_waterproof ? 'Yes' : 'No' }}</span>
            </div>
            <div class="mb-2">
                <label for="release_date" class="form-label">Release Date:</label>
                <span class="form-control" id="release_date">{{ $smartphone->release_date }}</span>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <label for="specifications" class="form-label">Specifications:</label>
            <p class="form-control" id="specifications">{{ $smartphone->specifications }}</p>
        </div>
    </div>
</div>
@endsection