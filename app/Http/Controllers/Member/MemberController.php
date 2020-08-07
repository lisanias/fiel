<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Member;
use App\Phone;
use App\Igreja;
use App\Regional;
use App\Rules\verificaCPF;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('nome', 'ASC', SORT_REGULAR, true)->paginate(20);
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Antes de criar um novo membro, envia para o formulário de pesquisa
         * para saber se o existe um membro com o mesmo nome
         */

        return view('members.find');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|max:20',
            'nome' => 'required|max:100|string',
            'nome_abreviado' => 'nullable|max:30',
            'email' => 'nullable|email|max:191',
            'dnas' => 'nullable|date',
            'naturalde' => 'nullable|max:100',
            'rg' => 'required|max:30',
            'cpf' => ['nullable', 'max:14', new verificaCPF],
            'data_filiacao' => 'nullable|date',
            'data_ordenacao' => 'required|date',
        ]);

        // Pega todos os dados que vem do formulário
        $dataForm = $request->all();
        $member = Member::create($dataForm);
        
        //return "Adicionar ". $member->id;
        return redirect(route('members.address.create', $member->id));
        //return redirect()->route('members.show', $member->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        if(!$member){
            return redirect()
                ->route('members.index')
                ->with(['alert'=>'Obreiro não encontrado. Talvez ele tenha sido apagado!', 'alert_type'=>'warning']);
        }
        $phones = $member->phones;
        $addresses = $member->addresses;
        $identidades = $member->identidades->sortByDesc('validade');
        $igreja = $member->igreja('Igreja')->first();
        
        return view('members.show', compact('member', 'phones', 'addresses', 'igreja', 'identidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
        $regionais = Regional::get()->pluck('nome', 'id');
        $member = Member::find($id);
        $igrejas = Igreja::get()->pluck('NomeCidade', 'id');
        $igrejasPlaceHolder = $igrejas->isEmpty() ? "Nenhuma igreja cadastrada" : "Selecione...";
        $regionaisPlaceHolder = $regionais->isEmpty() ? "Nenhuma regional cadastrada" : "Selecione...";   

        return view('members.edit', compact('member', 'igrejas', 'regionais', 'igrejasPlaceHolder', 'regionaisPlaceHolder'));
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
        $validatedData = $request->validate([
            'titulo' => 'required|max:20',
            'nome' => 'required|max:100|string',
            'nome_abreviado' => 'nullable|max:32',
            'email' => 'nullable|email|max:191',
            'dnas' => 'nullable|date',
            'naturalde' => 'nullable|max:100',
            'rg' => 'required|max:30',
            'cpf' => ['nullable', 'max:14', new verificaCPF],
            'igreja_id' => 'required|max:191|string',
            'data_filiacao' => 'nullable|date',
            'data_ordenacao' => 'required|date',
        ]);

        // Pega os dados do formulário
        $dataForm = $request->all();

        // Busca o membro pelo id
        $member = Member::find($id);

        // Atualiza a base de dados
        $update = $member->update($dataForm);
        
        // retorna para pagina do membro ou continue em edit se deu algo errado
        if( $update )
            return redirect()
                ->route( 'members.show', $member->id )
                ->with(['alert'=>'Obreiro atualizado!', 'alert_type'=>'success']);
        else
            return redirect()
                ->route('members.edit', $id )
                ->with(['alert'=>'Não foi possivel gravar os dados!', 'alert_type'=>'danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedRows = Member::destroy($id);
        //dd($deletedRows);
        
        // retorna para pagina do membro ou continue em edit se deu algo errado
        if( $deletedRows )
            return redirect()
                ->route('members.index')
                ->with(['alert'=>'Arquivo Apagado!', 'alert_type'=>'success']);
        else
            return redirect()
                ->route('members.show', $id )
                ->with(['alert'=>'O arquivo não foi apagado!', 'alert_type'=>'danger']);
    }
}
