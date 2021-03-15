@extends('template')
@section('contenido')

<div class="classForm">
    <form action="{{ route ('persona.update', $persona)}}" method="POST"> 
    <input type="hidden" name="_method" value="PATCH"> 

    {{ csrf_field() }}

        <div class="radioButton">
            Masculino <input type="radio" value='M' name="genero">
            Femenino <input type="radio" value='F' name="genero">
        </div>
        
        Nombre: <input type="text" name="nombre" value='{{$persona->nombre}}'>
        Apellido Paterno: <input type="text" name="apellidoP" value='{{$persona->apellidoP}}'>
        Apellido Materno: <input type="text" name="apellidoM" value='{{$persona->apellidoM}}'>
        Intereses: <input type="textarea" name="intereses"value='{{$persona->intereses}}'>
        
        <input type="hidden" name="folio" value='{{$persona->folio}}'>

        <input type="submit" value="Guardar">
    </form>

    <br>
    <br>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

</div>

@endsection