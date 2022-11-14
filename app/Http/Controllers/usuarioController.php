<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * 
     */
    public $mensagemSucesso = '';
    public $teste = 'Hello World';


    public function logado()
    {
        if(count(session()->all()) > 3){
            $logado = true;
        }
        else{
            $logado = false;
        }
        $this->logado = $logado;
        return $logado;
    }

    public function index()
    {
        $logado = $this->logado();
        return view('index', ["teste"=>$this->teste, "mensagemSucesso" => $this->mensagemSucesso, "logado" => $logado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logado = $this->logado();
        return view('createAccount', ["logado" => $logado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logado = $this->logado();
        $teste = new Usuario();
        $login = $request->login;
        $senha = $request->senha;
        $email = $request->email;
        $teste->login = $login;
        $teste->senha = $senha;
        $teste->email = $email;
        $teste->save();
        return redirect('/', ["logado" => $logado]);
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
