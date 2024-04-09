@extends('layouts.base')
@Section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-info" role="alert">Smartphones</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="row">
                @foreach($smartphones as $smartphone)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{$smartphone->image}}" class="card-img-top" alt="{{$smartphone->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$smartphone->name}}</h5>
                            <p class="card-text">{{$smartphone->description}}</p>
                            <p class="card-text">Price: ${{$smartphone->price}}</p>
                            <p class="card-text">Stock: {{$smartphone->stock}}</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Release Date: {{$smartphone->release_date}}</small>
                        </div>
                        <div class="flex flex-cols-3 gap-4 p-4">
                            <a href="{{ route('smartphones.show', $smartphone->id) }}" class="btn btn-primary">Ver más</a>
                            <a href="{{ route('smartphones.edit', $smartphone->id) }}" class="btn btn-warning">Editar</a>
                            <!-- <a href="{{ route('smartphones.destroy', $smartphone->id) }}" class="btn btn-danger">Eliminar</a> -->
                            <form class="mt-2" method="post" action="{{ route('smartphones.destroy', $smartphone) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this Smartphone?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 mx-3">
                <a href="{{ route('smartphones.create') }}" class="btn btn-success">Crear un nuevo producto</a>
            </div>
        </div>
    </div>
</div>
@endsection