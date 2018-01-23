@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <ol class="breadcrumb panel-heading">
                        <li class="active">Clientes</li>
                    </ol>
                    <div class="panel-body">
                        <p>
                           <a class="btn btn-info" href="{{route('cliente.adicionar')}}">Adicionar Cliente</a>
                        </p>
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
                                        <a class="btn btn-default" href="{{route('cliente.detalhe',$cliente->id)}}">Detalhe</a>
                                        <a class="btn btn-default" href="{{route('cliente.editar',$cliente->id)}}">Editar</a>
                                        <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('cliente.deletar',$cliente->id)}}' : false)">X</a>
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