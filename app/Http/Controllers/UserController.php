<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar os cursos
    public function index()
    {
        // dd("Listar"); #vardump #é como se fosse o console.log() do PHP
        $users = User::get(); //provavalmente está pegando os dados do Eloquent ORM

        return view('users.index', ['users' => $users]); //o "view" provavelmente se refere ao view do "MVC" visto que ele nos levará a uma view literalmente //quanto aos dados que ela recebe não sei qual é o motivo //o "users.index" se refere ao lugar que ele nos levará com vase na vpasta resources/views
    }

    //método para a importação de arquivos de usuários (.csv)
    public function import(Request $request)
    {
        dd($request);
    }
}
