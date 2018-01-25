@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente') }}">Clientes</a></li>
                    <li class="active">Detalhe</li>
                </ol>

                <div class="panel-body">
                    <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                    <p><b>E-mail: </b>{{ $cliente->email }}</p>
                    <p><b>Instagram: </b>{{ $cliente->instagram }}</p>
                    <p><b>Twitter: </b>{{ $cliente->twitter }}</p>
                    <p><b>Data de Cadastro: </b>{{date('d/m/Y',strtotime( $cliente->data ))}} - <b>Data de Expiração: </b>{{ date('d/m/Y',strtotime("+15 days",strtotime( $cliente->data )))}}</p>


                    <p>
                        <a class="btn btn-primary" href="#">Ativar Promoção</a>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Número</th>                                
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>                           
                            @foreach($cliente->telefones as $telefone)
                            <tr>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>                                
                                <td>
                                    <a class="btn btn-default" href="{{ route('telefone.editar',$telefone->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{ route('telefone.deletar',$telefone->id) }}' : false)">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        
                    </table>

                    <p>
                        <a class="btn btn-info" href="{{route('telefone.adicionar',$cliente->id)}}">Adicionar Telefone</a>
                    </p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection