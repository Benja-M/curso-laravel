@extends('plantilla')

@section('seccion')
<h1>editar nota {{$nota->id}}</h1>

@if(session('mensaje'))

<div class="alert alert-success">{{session('mensaje')}}</div>

@endif

<form action="{{route('notas.update',$nota->id)}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombre')
    <div class="alert alert-danger">
      El nombre es necesario
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @enderror

    @error('descripcion')
    <div class="alert alert-danger">
      La Descripcion Es obligatoria
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @enderror
    <input type="text" name="nombre"
     placeholder="Nombre" 
     class="form-control mb-2"
     value="{{ $nota->nombre }}">

    <input type="text" name="descripcion"
     placeholder="Description" 
     class="form-control mb-2"
     value="{{ $nota->description }}">
     
    <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
  </form>

@endsection