@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido') 

<h1 class="display-1 text-center text-primary mt-4">FORMULARIO</h1>

<div class="container mt-5 col-md-6"> <!-- Inicio Container-->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    @if (session()->has('Confirmacion'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 mb-2 mt-2" width="1.5em" height="1.5em" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong class="text-success fw-bold">{{session('Confirmacion')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
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

    <div class="card"> <!-- Inicio de card -->
        <div class="card-header text-center f-4 fw-medium text-primary">
        Introduce aqui tus memorias
        </div>
            <div class="card-body"><!-- Card body-->
                <form method="POST" action="/guardarRecuerdo">
                    @csrf <!-- Es necesario cada vez que se necesita una petición por post-->
                        <div class="mb-3"><!-- Input Titulo-->
                        <label class="form-label">Titulo: </label>
                        <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}">
                        <p class="text-danger fw-bold">{{ $errors->first('txtTitulo')}}</p>
                    </div><!-- Input Titulo-->
                    
                    <div class="mb-3"><!-- Input Recuerdo-->
                        <label class="form-label">Recuerdo: </label>
                        <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo')}}">
                        <p class="text-danger fw-bold">{{ $errors->first('txtRecuerdo')}}</p>
                    </div><!-- Input Titulo-->
            </div><!-- Card body-->

            <div class="card-footer text-body-secondary"><!-- Card-footer-->
                <div class="d-grid gab-2">
                    <button type="submit" class="btn text-center btn-primary">Guardar recuerdo</button>
                </div>
                </form>
            </div><!-- Card-footer-->
    </div><!-- Cierre de card -->

</div><!-- Cierre container -->

@endsection