<?php

namespace App\Http\Controllers\Igreja;

use App\Igreja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IgrejaController extends Controller
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
        $igrejas = Igreja::orderBy('nome', 'ASC', SORT_REGULAR, true)->paginate(5);	
        return view('igreja.index', compact('igrejas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('igreja.create');
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
            'nome' => 'required|max:100|string',
            'nome_abreviado' => 'nullable|max:34',
            'email' => 'nullable|email|max:191',
            'membro_desde' => 'nullable|date',
            'telefone' => 'nullable|max:19',
        ]);

        $dataForm = $request->all();
        $igreja = Igreja::create($dataForm);
        
        //return 'id inserido = '. $igreja->id;
        return redirect(route('igrejas.address.create', $igreja->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        session()->put('last_igreja',$id);
        $igreja = Igreja::find($id);
        $members = $igreja->member;
        $pastor = $igreja->member->find($igreja->pastor_id);
        $addresses = $igreja->addresses;
        return view('igreja.show', compact('igreja', 'members', 'pastor', 'addresses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $igreja = Igreja::find($id);
        $members = $igreja->member->pluck('nome', 'id');
        return view('igreja.edit', compact('igreja', 'members')); 
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
            'nome' => 'required|max:100|string',
            'nome_abreviado' => 'nullable|max:35',
            'email' => 'nullable|email|max:191',
            'membro_desde' => 'nullable|date',
            'telefone' => 'nullable|max:19',
        ]);

         // Pega os dados do formulário
         $dataForm = $request->all();

         // Busca o membro pelo id
         $igreja = Igreja::find($id);
 
         // Atualiza a base de dados
         $update = $igreja->update($dataForm);

        return redirect()->route('igrejas.show', $id);
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
