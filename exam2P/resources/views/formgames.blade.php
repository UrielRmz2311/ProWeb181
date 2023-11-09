@extends('layouts.plantilla')

@section('titulo','Formulario Videojuegos')
    
@section('body')

<h1 class="display 5 text-center mt-5 fw-bold">VIDEOJUEGOS</h1>

@if (session()->has('Confirmacion'))
    <script>
        Swal.fire(
            'Videojuego se guardó correctamente',
            '{!! session('Confirmacion') !!}',
            'success'
        );
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 mb-2 mt-2" width="1.5em" height="1.5em" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <strong class="text-danger fw-bold">{{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

<form class="container mt-5 text-bg-secondary p-3" method="POST" action="/guardarVideojuego">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nombre: </label>
      <input type="text" class="form-control" name="txtNombre" value="{{ old('txtNombre')}}">
      </div>
    <div class="mb-3">
      <label class="form-label">Fecha de Publicación: </label>
      <input type="date" class="form-control" name="txtFecha" value="{{ old('txtFecha')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Videojuegos Vendidos: </label>
        <input type="number" class="form-control" name="txtVendidos" value="{{ old('txtVendidos')}}">
    </div>
    <div class="d-grid mb-3 text-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@endsection