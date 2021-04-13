<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return response(Usuario::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function store(Request $request)
    {
      $usuario = new Usuario();
      $usuario->nome = $request->nome;
      $usuario->email = $request->email;
      $usuario->senha = Hash::make($request->senha);
      $usuario->save();
  
      return response($usuario->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function update(Request $request, Usuario $usuario)
    {
      $usuario = Usuario::find($usuario->id);
      $usuario->nome = $request->nome;
      $usuario->email = $request->email;
      $usuario->senha = Hash::make($request->senha);
      $usuario->save();
  
      return response($usuario->jsonSerialize(), Response::HTTP_OK);
    }

    public function destroy(Usuario $usuario)
    {
      $usuario->delete();
  
      return response(null, Response::HTTP_OK);
    }
}

