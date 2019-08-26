@extends('plantilla')

@section('seccion')

<h1>Nosotros formamos Blond</h1>
@foreach($equipo as $item)
<a href="{{route('nosotros',$item)}}"class="h4 text-danger">{{$item}}</a><br>

@endforeach
@if(!empty($nombre))

@switch($nombre)
    @case($nombre=='Sebastian')
<h2 class="mt-5">El nombre es {{$nombre}}:</h2>
<p> {{$nombre}} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae modi quisquam, at adipisci corrupti ducimus officiis, sapiente quidem necessitatibus, quis consequatur exercitationem illum soluta dolore optio! Molestias quo delectus corrupti.</p>
    @break


@endswitch


@endif
@endsection 
