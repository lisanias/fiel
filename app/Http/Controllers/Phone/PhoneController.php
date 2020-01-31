<?php

namespace App\Http\Controllers\Phone;

use App\Phone;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);
        $member = Member::find($phone->member_id);
        return(view('phone.edit', compact('phone', 'member')));
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
            'ddd' => 'nullable|max:2',
            'numero' => 'required',
            'telefone_tipo' => 'nullable',
        ]);

        // Pega todos os dados que vem do formulário
        $dataForm = $request->all();
        
        // Busca o membro pelo id
        $phone = Phone::find($id);

        // Atualiza a base de dados
        $update = $phone->update($dataForm);
        
        // retorna para pagina do membro ou continue em edit se deu algo errado
        if( $update )
            return redirect()
                ->route( 'members.show', $phone->member_id )
                ->with(['alert'=>'Telefone atualizado!', 'alert_type'=>'success']);
        else
            return redirect()
                ->route('members.edit', $id )
                ->with(['alert'=>'Não foi possivel gravar os dados!', 'alert_type'=>'danger']);

        echo 'atualizar';
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

