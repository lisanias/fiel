<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Igreja;
use App\Member;
use App\Regional;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class CustomMemberController extends Controller
{
	private $mesPT = [
		'1'=>'Janeiro', 
		'2'=>'Fevereiro', 
		'3'=>'Março', 
		'4'=>'Abril', 
		'5'=>'Maio', 
		'6'=>'Junho', 
		'7'=>'Julho',
		'8'=>'Agosto',
		'9'=>'Setembro',
		'10'=>'Outubro',
		'11'=>'Novembro',
		'12'=>'Dezembro',
	];

	public function __construct()
    {
        $this->middleware('auth');
	}
	
	/**
	 * Listar membros das regionais
	 */
	public function indexRegionais($regional_id)
    {		
		$members = Member::orderBy('nome', 'ASC', SORT_REGULAR, true)
			->where('regional_id', $regional_id)
			->paginate(20);
		
		if($members->isEmpty()){
			return redirect()
				->route('regionais.show', $regional_id)
				->with(['alert'=>'Regional sem nenhum membro relacionado.', 'alert_type'=>'warning']);
		}
		
		$nome_regional = $members->first()->regional->nome;

        return view('members.index', compact('members', 'nome_regional'));
	}

	/**
	 * Listar membros apagados
	 */
	public function indexDeleted()
    {
        $members = Member::onlyTrashed()->orderBy('nome', 'ASC', SORT_REGULAR, true)->paginate(10);
        return view('members.indexDeleted', compact('members'));
	}
	
	/**
	 * Restaurar membros apagados
	 */
	public function restore($id)
    {
		$member = Member::onlyTrashed()
			->find($id);
		$member->restore();

		//dd($member);
		return redirect()->action('Member\MemberController@show', $id);
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
		$members = Member::where('nome', 'LIKE', '%'.$procurar.'%')->orderBy('nome')->get();
		        
        return view('members.resultadoProcura', compact('members', 'nome'));
    }

	/**
	 * Função para criar novo usuário. 
	 * A função create (MemberController@create) redireciona 
	 * para a página de procura para evitar usuários duplicados. 
	 * 
	 * Esta função mostra o formulario para criar usuários. 
	 */
	public function new(Request $request) 
    {		
            $igrejas = Igreja::get()->pluck('NomeCidade', 'id');
            $regionais = Regional::get()->pluck('NomeCidade', 'id');
            $igrejasPlaceHolder = $igrejas->isEmpty() ? "Nenhuma igreja cadastrada" : "Selecione...";
            $regionaisPlaceHolder = $regionais->isEmpty() ? "Nenhuma regional cadastrada" : "Selecione...";
            
            return view('members.create', compact('igrejas', 'regionais', "igrejasPlaceHolder", 'regionaisPlaceHolder'));
    }
	
	public function aniversariantes($mes = null)
    {
		if(!$mes || $mes < 1 || $mes > 12){
			$mes = Carbon::today()->month;
		}
		$aniversariantes = Member::MonthBirthdays($mes)->get();
		$mesPT = $this->mesPT;
		
        return view('members.niver', compact('aniversariantes', 'mesPT', 'mes'));
	}
	
	public function etiquetasAniversariantes($mes = null)
	{
		// verificar se não foi definido um mes e se o mes esta entre Janeiro (1) e Dezembro (12)
		if(!$mes || $mes < 1 || $mes > 12){
			$mes = Carbon::today()->month;
		}

		// pegar os aniveriantes do referido mes
		$aniversariantes = Member::MonthBirthdaysName($mes)->get();

		// passar os dados de formatação da etiqueta (Letter com 20 etiquetas)
		$identacaoTop=3;
        $identacaoLeft=10;
        $top = [12.7, 38.1, 63.5, 88.9, 114.2, 139.7, 165.1, 190.5, 215.9, 241.3];
        $left = [4, 110.3];
		
		// Criar o arquivo pdf 
        $pdf = PDF::loadView('print.labelPDF20', compact('aniversariantes', 'top', 'left', 'identacaoTop', 'identacaoLeft' ))
            ->setPaper('letter','portrait');

		// Exibir o arquivo PDF na tela para imprimir as etiquetas
		return $pdf->stream('etiqueta.pdf');
	}

	public function upidig(Request $request, $id)
	{
		// Busca o membro pelo id
        $member = Member::find($id);

        // Atualiza a base de dado
		$update = $member->update($request->all());

		session()->forget(['last_member','last_member_nome']);
		
		return redirect()
                ->route( 'igrejas.show', $member->igreja->id )
                ->with(['alert'=>'Obreiro adicionado!', 'alert_type'=>'success']);
	}

	public function selecionar($id)
	{
		// Busca o membro pelo id
		$member = Member::find($id);
		
        // colocar o membro em uma section para voltar para ele depois de alguma ação
        session()->put('last_member', $id);
		session()->put('last_member_nome', $member->nome);  
		
		if(session()->get('last_igreja')){
		return redirect()
                ->route( 'igrejas.show', session()->get('last_igreja') )
				->with(['alert'=>'Obreiro selecionado!', 'alert_type'=>'success']);
		} else 	{
		return redirect()
                ->route( 'members.show', $id )
				->with(['alert'=>'Obreiro atualizado!', 'alert_type'=>'success']);
		}
	}

}
