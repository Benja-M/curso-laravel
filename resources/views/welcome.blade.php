@extends('plantilla')

@section('seccion')

<div class="container">
  <h1>Notas</h1>
</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3">
        
    </div>
      <div class="col-6"></div>
      <div class="col-3"></div>
      <div class="container">
        @if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}

        </div>

        @endif
<form action="{{route('notas.crear')}}" method="POST">
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
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
value="{{old('nombre')}}">
  <input type="text" name="descripcion" placeholder="Description" class="form-control mb-2"
  value="{{old('descripcion')}}">
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
  </form>
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
  
    <tbody>
        @foreach ($notas as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>
            <a href="{{route('notas.detalle', $item)}}">
              {{ $item->nombre }}
            </a>
          </td>
          <td>{{ $item->description }}</td>
          <td>
          <a href="{{route('notas.editar',$item)}}" class="btn btn-warning btn-sm">editar</a>

          <form action="{{route('notas.eliminar',$item)}}" method="POST"
          class="d-inline">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" type="submit">
                Eliminar
              </button>
              

            </form>

          </td>
        </tr>
        @endforeach
    </tbody>
    
  </table>

  {{$notas->links()}}

@endsection
  </div>
</div>