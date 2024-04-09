@extends('layouts.base')
@section('title', 'Create a new Product')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Create un nuevo smartphone</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mx-3">
            <a href="{{ route('smartphones.index') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
    <form method="POST" action="{{route('smartphones.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{ old('weight') }}">
        </div>



        <div class="mb-3 form-check">
            <label for="is_waterproof">Is Waterproof?</label>
            <select class="form-control" id="is_waterproof" name="is_waterproof">
                <option value="1" {{ old('is_waterproof') == '1' ? 'selected' : '' }}>Si</option>
                <option value="0" {{ old('is_waterproof') == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date') }}">
        </div>

        <div class="mb-3">
            <label for="specifications" class="form-label">Specifications</label>
            <textarea class="form-control" id="specifications" name="specifications">{{ old('specifications') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    @csrf


</div>
</form>
</div>
@endsection