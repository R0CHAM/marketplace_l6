@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-large btn-success">Criar Produto</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Loja (#id)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>R$ {{number_format($p->price, 2, ',', '.')}}</td>
                    <td>{{$p->store->name}} (#{{$p->store->id}})</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('admin.products.edit', ['product' => $p->id ])}}" class="btn btn-sm btn-secondary">EDITAR</a>
                            <form action="{{route('admin.products.destroy', ['product' => $p->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$products->links()}}
@endsection
