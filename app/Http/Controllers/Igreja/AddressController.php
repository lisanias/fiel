<?php

namespace App\Http\Controllers\Igreja;

// use App\Address;
use App\Igreja;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $address_pai= Igreja::find($id);
        $address = $address_pai->addresses;
        return view('address.create', compact('address_pai', 'address'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tipo' => 'nullable|max:20',
            'logradouro' => 'nullable|max:100',
            'bairro' => 'nullable|max:50',
            'cidade' => 'required|max:50',
            'uf' => 'required|max:2',
            'cep' => ['nullable', 'max:9', new verificaCEP],
        ]);
        
        $dataForm = $request->all();

        $igreja = Igreja::find($id);
        $address = $igreja->addresses()->create($dataForm);

        if ($address) 
            return redirect()->route('igrejas.show', $igreja->id);
        else
            return redirect()->route('igrejas.adresss.create', $igreja->id);
    }
}       