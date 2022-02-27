@extends('layouts.app')

@section('content')
    <a href="{{route('admin.stores.create')}}" class="btn btn-large btn-success">Criar Loja</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Dono</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>{{$store->user->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('admin.stores.edit', ['store' => $store->id ])}}" class="btn btn-sm btn-secondary">EDITAR</a>
                            <form action="{{route('admin.stores.destroy', ['store' => $store->id ])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button href="" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{$stores->links()}}
@endsection
