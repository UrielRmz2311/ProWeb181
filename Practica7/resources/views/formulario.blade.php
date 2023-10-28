@extends('layouts.plantilla')


@section('titulo','Formulario')
@section('contenido')
<h1 class="text-white text-center display-1 fw-bold mt-3">REGISTRO DE LIBRO</h1>

  <div class="container mt-5">


    @if (session()->has('Confirmacion'))
      <script>
          Swal.fire(
              'Libro {{ old('txtTitulo') }} se guardó correctamente',
              '{!! session('Confirmacion') !!}',
              'success'
          );
      </script>
    @endif

    @if($errors->any())
      <script>
      Swal.fire(
          'Tu Libro no se guardo, revisa los datos...',
          '{{$errors->first()}}',
          'error'
      )
      </script>
  @endif

    <div class="card">
      <div class="card-header text-center">
        Formulario de Libro
      </div>
      <div class="card-body">
        <form method="POST" action="/guardarlibro">

          @csrf

          <div class="form-group">
            <label>ISBN</label>
            <input name="txtISBN" class="form-control" id="isbn" placeholder="Ingrese el ISBN" value="{{ old('txtISBN')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtISBN')}}</p>
          </div>
        
          <div class="form-group">
            <label>Título</label>
            <input name="txtTitulo" class="form-control" placeholder="Ingrese el título del libro" value="{{ old('txtTitulo')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtTitulo')}}</p>
          </div>

          <div class="form-group">
            <label>Autor</label>
            <input name="txtAutor" class="form-control" placeholder="Ingrese el nombre del autor" value="{{ old('txtAutor')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtAutor')}}</p>
          </div>

          <div class="form-group">
            <label>Páginas</label>
            <input name="txtPaginas" class="form-control" placeholder="Ingrese el número de páginas" value="{{ old('txtPaginas')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtTPaginas')}}</p>
          </div>

          <div class="form-group">
            <label>Editorial</label>
            <input class="form-control" name="txtEditorial" placeholder="Ingrese el nombre de la editorial" value="{{ old('txtEditorial')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtEditorial')}}</p>
          </div>

          <div class="form-group">
            <label>Correo de Editorial</label>
            <input name="txtCorreo" class="form-control" placeholder="Ingrese el correo de la editorial" value="{{ old('txtCorreo')}}">
            <p class="text-danger fw-bold">{{ $errors->first('txtCorreo')}}</p>
          </div>

          <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Guardar Libro</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    
@endsection