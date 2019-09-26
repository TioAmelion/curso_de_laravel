<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\RegistrarPonto;
use App\Models\Admin\Funcionario;
class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $var = \DB::select('SELECT data, nome, imagem from funcionario f, registro r WHERE f.id = r.func_id AND local_trabalho = "Acerco Talatona" AND data = CURRENT_DATE');

        $dados = \DB::select('SELECT data, nome, imagem from funcionario f, registro r WHERE f.id = r.func_id AND local_trabalho = "Acervo Benfica" AND data = CURRENT_DATE');

             return view('home', ['dados' => $dados, 'var' => $var]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
/*//$num = \DB::select('SELECT COUNT(*) from funcionario f, registro r WHERE f.id = r.func_id AND data = CURRENT_DATE');

$dados = \DB::table('registro')
             ->join('funcionario', 'registro.id', '=', 'funcionario.id')
             ->select('nome', 'data', 'imagem')
             ->where('data', '25-09-19')
             ->where('local_trabalho', 'Acervo Benfica')
             ->get();*/
        //dd($dados);return view('home', compact('dados', $dados));*/
