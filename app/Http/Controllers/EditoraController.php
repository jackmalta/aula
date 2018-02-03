<?php

namespace App\Http\Controllers;
use App\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    //
    public function index()
    {
      $editoras = Editora::all();
      return view('editora.index', compact('editoras'));
    }


  public function cria()
  {
    return view('editora.cria');
  }

  public function armazena()
  {
    Editora::create(request()->all());
    return redirect('/editoras');
  }
}
