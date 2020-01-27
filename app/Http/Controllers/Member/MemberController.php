<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Member;
use App\Phone;
use App\Igreja;
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
        //$igrejas = Igreja::orderBy('name', 'ASC', SORT_REGULAR, true)->get()->pluck('NameCidade', 'id');
        //$membros = Member::get();
        
        //return view('members.create', compact('igrejas'));
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
            'nome_abreviado' => 'nullable|max:20',
            'email' => 'nullable|email|max:191',
            'dnas' => 'nullable|date',
            'naturalde' => 'nullable|max:100',
            'rg' => 'required|max:30',
            'cpf' => ['required', 'max:14', new verificaCPF],
            'igreja_id' => 'required|max:191|string',
            'data_filiacao' => 'nullable|date',
            'data_ordenacao' => 'required|date',
        ]);

        // Pega todos os dados que vem do formulário
        $dataForm = $request->all();
        $member = Member::create($dataForm);
        
        return "Adicionar {{$dataForm}}";
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
        $phones = $member->phones('Phone')->get();
        $addresses = $member->addresses('Address')->get();
        $igreja = Igreja::find($member->igreja_id);
        return view('members.show', compact('member', 'phones', 'addresses', 'igreja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        $igrejas = Igreja::get()->pluck('NameCidade', 'id');
        //dd($igrejas);
        //die();
        return view('members.edit', compact('member', 'igrejas'));
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
            'nome_abreviado' => 'nullable|max:20',
            'email' => 'nullable|email|max:191',
            'dnas' => 'nullable|date',
            'naturalde' => 'nullable|max:100',
            'rg' => 'required|max:30',
            'cpf' => ['required', 'max:14', new verificaCPF],
            'igreja_id' => 'required|max:191|string',
            'data_filiacao' => 'nullable|date',
            'data_ordenacao' => 'required|date',
        ]);

        $member = Member::find($id);
        return "escript de alteração na base de dados do membro id: {{$id}}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "apagar id: {{$id}}";
    }
}
