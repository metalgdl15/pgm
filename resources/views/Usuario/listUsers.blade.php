@extends('template')
@section('contenido')

<div class="row">
    <div class="col-md-8" style="float:none; margin:0 auto;">
        <table class="table">
            <thead class="thead-dark">
                <th>folio</th>
                <th>nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Intereses</th>
                <th>Correo</th>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                <tr>
                    <td> {{$persona->folio}}</td>
                    <td> {{$persona->nombre}} </td>
                    <td> {{$persona->apellidoP}} </td>
                    <td> {{$persona->apellidoM}} </td>
                    <td> {{$persona->genero}} </td>
                    <td> {{$persona->intereses}} </td>
                    <td> {{$persona->user->email}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection