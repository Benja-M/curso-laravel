<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>trabajo curso</title>
  </head>
  <body>
    <div class="container">
      <h1>Notas</h1>
    </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <div class="links">
              <a href="https://www.facebook.com/blondcolorstudio/">Facebook</a><br>
              <a href="https://www.instagram.com/blondcolorstudio/?hl=es-la">Instagram</a><br>
              <a href="https://www.google.com/maps/place/Blond+Color+Studio/@-34.4912019,-58.5502007,17z/data=!4m5!3m4!1s0x95bcb073d3f6569b:0x409bb82ba8c9d5f6!8m2!3d-34.490972!4d-58.548924">Contacto</a><br>
            </div>
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
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
      </div>
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>