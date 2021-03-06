@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <ol class="breadcrumb panel-heading">
                        <li><a href="{{ route('cliente') }}">Clientes</a></li>
                        <li class="active">Adicionar</li>
                    </ol>

                    <div class="panel-body">
                        <form action="{{ route('cliente.salvar') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Nome do cliente">
                                @if($errors->has('nome'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" class="form-control" placeholder="E-mail do cliente">
                                @if($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="instagram" class="form-control" placeholder="Instagram do cliente">
                                @if($errors->has('instagram'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('instagram') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="twitter" class="form-control" placeholder="Twitter do cliente">
                                @if($errors->has('twitter'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('twitter') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button class="btn btn-info">Adicionar</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection