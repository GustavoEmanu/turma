<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = [
            [
                'id' => 1,
                'nome' => 'gustavo',
                'idade' => 18,
                'sexo' => 'masc',
                'cpf' => '066.555.988-06',
                'rg' => '054653',
                'email' => 'prestes@gmail.com',
                'senha' => '12345'
            ],
            [
                'id' => 2,
                'nome' => 'maria',
                'idade' => 17,
                'sexo' => 'femi',
                'cpf' => '099.555.988-06',
                'rg' => '059878',
                'email' => 'maria@gmail.com',
                'senha' => '54321'
            ]
        ];
        return view('ListarAlunos',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
