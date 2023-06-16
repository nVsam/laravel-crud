@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <h2>Adicionar novo produto</h2>
    </div>
    <div class="pull-right">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>OOps</strong> Seu input apresentou problemas. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="post">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Detalhes:</strong>
                <textarea class="form-control" name="detail" placeholder="Detail" style="height:150px;"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
    
@endsection
    