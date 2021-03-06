@extends('layouts.app')

@section('content')
    <h1>Editar Loja</h1>

    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="">Nome loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$store->name}}">

            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$store->description}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="phone"placeholder="+55 DDD 2222-2222" class="form-control  @error('phone') is-invalid @enderror" value="{{$store->phone}}">

            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Celular</label>
            <input type="text" name="mobile_phone" placeholder="+55 DDD 99999-9999" class="form-control  @error('mobile_phone') is-invalid @enderror" value="{{$store->mobile_phone}}">

            @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
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
