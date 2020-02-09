<?php

/**
 *  Alterar endereços de obreiros e igrejas.
 * 
 *  Funçoes válidas:
 *    -> Show, Edit, Update, Destroy.
 */

namespace App\Http\Controllers\Address;

use App\Address;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\verificaCEP;

class AddressController extends Controller
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
        $address = Address::find($id);
        $addresspai = $address->addressable;

        return view('address.edit', compact('address', 'addresspai'));
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
            'tipo' => 'nullable|max:20',
            'logradouro' => 'nullable|max:100',
            'bairro' => 'nullable|max:50',
            'cidade' => 'required|max:50',
            'uf' => 'required|max:2',
            'cep' => ['nullable', 'max:9', new verificaCEP],
        ]);

        // Pega todos os dados que vem do formulário
        $dataForm = $request->all();

        // Busca o endereço pelo id
        $address = Address::find($id);
        // busca o membro pelo endereço
        $origem = $address->addressable;

        // Atualiza a base de dados
        $update = $address->update($dataForm);

        // retorna para pagina do membro ou continue em edit se deu algo errado
        if( $update )
            return redirect()
                ->route( $origem->getTable().'.show', $origem->id )
                ->with(['alert'=>'Endereço atualizado!', 'alert_type'=>'success']);
        else
            return redirect()
                ->route( $origem->getTable().'.edit', $id )
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
        $address = Address::find($id);
        $origem = $address->addressable;
        //dd($origem);
        $address->delete();

        return redirect()->route( $origem->getTable().'.show', $origem->id);
    }
}
