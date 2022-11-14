<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use PhpParser\Node\Stmt\Echo_;

class LoginController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public $mensagemFalha = '';
    public $mensagemSucesso = '';
    public $logado = false;

    public function store(Request $request)
    {
        $usuario = new usuarioController();
        $logado = $usuario->logado();
        $login = $request->login;
        $senha = $request->senha;
        $dados = DB::table('usuario')
        ->where('login', $login)
        ->where('senha', $senha)
        ->get();
        $dados = json_decode(json_encode($dados), true);
        if($dados != []){
            session_start();
            session()->put($dados);
            $this->mensagemSucesso = "Logado com sucesso.";
            return redirect('index');
        }
        else{
            $this->mensagemFalha = "Erro ao tentar logar, digite o login e senha corretos.";
            return view('login', ["mensagemFalha"=>$this->mensagemFalha, "logado" => $logado]);
 
        }

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
    public function destroy()
    {
        $usuario = new usuarioController();
        $logado = $usuario->logado();
        session()->flush();
        return redirect('index');

    }
    public function index()
    {
        $usuario = new usuarioController();
        $logado = $usuario->logado();
        return view('login', ['mensagemFalha' => $this->mensagemFalha, "logado" => $logado]);
    }

    public function login(Request $request){

    }
}
