<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Empresa::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Empresa::create($request->all());
    }

    public function show(Empresa $empresa) {
        return $empresa;
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, string $id)
    public function update(Request $request, Empresa $empresa) {
        $empresa->update($request->all());
        return $empresa;
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    public function destroy(Empresa $empresa) {
        $empresa->delete();
        return response()->json(['message' => 'Empresa excluída com sucesso']);
    }
}
