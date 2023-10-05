@extends('layouts.breadcumb')

@section('titulo','LOGIN')

@section('contenido') 

<h1 class="display-1 text-center text-primary">Inicio de Sesión</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Iniciar Sesión</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Usuario:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

