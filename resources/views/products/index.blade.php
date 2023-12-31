@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="float-start">
            <h2>Laravel CRUD</h2>
        </div>
        <div class="float-end">
            <a href="{{ route('products.create') }}" class="btn btn-success">Adicionar novo produto</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Detalhes</th>
        <th width="280px">Ações</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $products->links() }}
@endsection