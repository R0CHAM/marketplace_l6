@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>

    <form action="{{route('admin.stores.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="">Nome loja</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="phone" class="form-control" placeholder="+55 (DDD) 2222-2222">
        </div>

        <div class="form-group">
            <label for="">Celular</label>
            <input type="text" name="mobile_phone" class="form-control" placeholder="+55 (DDD) 99999-9999">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>

        <div>
            <br><button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
        </div>
    </form>
@endsection
