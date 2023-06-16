@extends('products.layout')

@section ('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Editar</h2>
        </div>
        <div class="float-end">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Vish kk</strong> Deu algum problema aí <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalhes:</strong>
                <textarea name="detail" class="form-control">{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>


@endsection