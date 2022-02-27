<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = \App\User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();

        $store = $user->store()->create($data);

        flash('Loja Criada com sucesso!')->success();
        return redirect()->route('admin.stores.index');
    }

    public function edit($store)
    {
        $store = \App\Store::find($store);

        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $store)
    {
        $data = $request->all();

        $store = \App\Store::find($store);
        $store->update($data);

        flash('Loja Atualizada com Sucesso!')->success();
        return redirect()->route('admin.stores.index');

    }

    public function destroy($store)
    {
        $store = \App\Store::find($store);
        $store->products()->delete(); // Elimina o problema de deletar loja que possui produtos
        $store->delete();

        flash('Loja Removida com Sucesso!')->success();
        return redirect()->route('admin.stores.index');
    }

}
