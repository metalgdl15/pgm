@extends('template')
@section('contenido')


<div class="classForm">
    <form action="{{ route ('persona.store')}}" method="POST"> 
    {{ csrf_field() }}

        <div class="radioButton">
            Masculino <input type="radio" value='M' name="genero">
            Femenino <input type="radio" value='F' name="genero">
        </div>
        
        Nombre: <input type="text" name="nombre">
        Apellido Paterno: <input type="text" name="apellidoP">
        Apellido Materno: <input type="text" name="apellidoM">
        Intereses: <input type="textarea" name="intereses">

        <input type="submit" value="Agregar">
    </form>
</div>

</div>

@endsection