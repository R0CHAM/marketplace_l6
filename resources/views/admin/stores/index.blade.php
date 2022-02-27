@extends('layouts.app')

@section('content')
    <a href="{{route('admin.stores.create')}}" class="btn btn-large btn-success">Criar Loja</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <a href="{{route('admin.stores.edit', ['store' => $store->id ])}}"
                           class="btn btn-sm btn-secondary">EDITAR</a>
                        <a href="{{route('admin.stores.destroy', ['store' => $store->id ])}}"
                           class="btn btn-sm btn-danger">REMOVER</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$stores->links()}}
@endsection
