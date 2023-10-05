@extends('layouts.breadcumb')

@section('titulo','Productos')

@section('contenido') 

<h1 class="display-1 text-center text-primary">Búsqueda Productos</h1>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials.card')


@endsection