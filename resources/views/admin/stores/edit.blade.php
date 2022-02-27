@extends('layouts.app')

@section('content')
    <h1>Editar Loja</h1>

    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="">Nome loja</label>
            <input type="text" name="name" class="form-control"
                   value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control"
                   value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="phone" class="form-control"
                   placeholder="+55 (DDD) 2222-2222"
                   value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <label for="">Celular</label>
            <input type="text" name="mobile_phone" class="form-control"
                   placeholder="+55 (DDD) 99999-9999"
                   value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control"
                   value="{{$store->slug}}">
        </div>

        <div>
            <br><button type="submit" class="btn btn-lg btn-success">Atualizar Loja</button>
        </div>
    </form>
@endsection
