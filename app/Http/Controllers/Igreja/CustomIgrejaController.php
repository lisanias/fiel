<?php

namespace App\Http\Controllers\Igreja;

use App\Http\Controllers\Controller;
use App\Igreja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CustomIgrejaController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function find(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'filled|string',
        ]);
        $procurar = $nome = $request->nome;

	    // trocar acentos
	    $substituir = array(
	        "a","e","i","o","u","y",
	        "à","á","â","ã","ä",
	        "è","é","ê","ë",
	        "ì","í","î","ï",
	        "ò","ó","ô","õ","ö",
	        "ù","ú","û","ü",
	        "A","E","I","O","U",
	        "À","Á","Â","Ã","Ä",
	        "È","É","Ê","Ë",
	        "Ì","Í","Î",
	        "Ò","Ó","Ô","Õ","Ö",
	        "Ù","Ú","Û","Ü",
	        "ç","Ç","ñ","Ñ");
	    $procurar =  str_replace($substituir,"_", $procurar);

	    //procurar pelas palavras em qualquer lugar do nome
	    $procurar = str_replace(" ","%",$procurar);
        $igrejas = Igreja::where('nome', 'LIKE', '%'.$procurar.'%')->orderBy('nome')->get();
        
        //dd($igrejas);
		        
        return view('igreja.resultadoProcura', compact('igrejas', 'nome'));
    }

    
}
