@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Clientes</div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered" id="tabClientes">
                            <thead>
                            <tr>
                                <th>Identificador</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td scope="row">{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->twitter}}</td>
                                    <td>{{$cliente->instagram}}</td>
                                    <td>
                                        <a class="btn btn-principal" href="#">Ativar</a>
                                        <a class="btn btn-default" href="#">Editar</a>
                                        <a class="btn btn-danger" href="#">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection