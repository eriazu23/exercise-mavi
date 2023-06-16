@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <br>
    <h3>Listado de Clientes </h3>


    <div class="table-responsive">
    <br>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->client_name}}</td>
                <td>{{$registro->client_last_name}}</td>
                <td>{{$registro->client_last_name_two}}</td>
                <td>{{$registro->client_adress}}</td>
                <td>{{$registro->mail}}</td>
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit {{$registro->id}}"> Editar</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete {{$registro->id}}"> Eliminar</button>
                </td>
            </tr>
            @include('registro.modal-delete')
            @include('registro.modal-info')
            @endforeach
        </tbody>
    </table>
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"> Nuevo registro</button>
</div>
@include('registro.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
