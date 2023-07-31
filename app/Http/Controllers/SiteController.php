<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Luiz',
                'birth' => '16/06/2002',
                'idade' => 21
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'kleber',
                'birth' => '16/06/2002',
                'idade' => 21
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'ana',
                'birth' => '16/06/2002',
                'idade' => 21
            ],
        ];

        $data['pessoas'] = $pessoas;

        return view('bemvindo', $data);
    }
    public function sair(){
        return view('sair');
    }
    public function usuarios(Request $request){
        $data = [
            'quantidade' => $request -> qnt
        ];
        return view('usuarios' ,$data);
    }
}
