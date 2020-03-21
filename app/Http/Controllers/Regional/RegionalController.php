<?php

namespace App\Http\Controllers\Regional;

use App\Http\Controllers\Controller;
use App\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * somente usuários cadastrados
     */
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
        $regionais = Regional::orderBy('nome', 'ASC', SORT_REGULAR, true)->paginate(10);
        return view('regionais.index', compact('regionais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regionais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regional = Regional::create($request->all());
        if(!$regional){
            return redirect()
                ->route('regionais.create')
                ->with(['alert'=>'Não foi possivel salvar os dados', 'alert_type'=>'danger']);
        }
        return redirect()->route('regionais.show', $regional->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regional=Regional::find($id);

        // Procurar dados do Lider da regional caso tenha algum lider cadastrado
        $lider = $regional->lider_id? \App\Member::find($regional->lider_id):null;

        //dd($regional);
        if(!$regional){
            return redirect()
                ->route('regionais.index')
                ->with(['alert'=>'Regional não encontrada!', 'alert_type'=>'info']);
        }
        return view('regionais.show', compact('regional', 'lider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regional=Regional::find($id);

        // Procurar dados do Lider da regional caso tenha algum lider cadastrado
        $lider = $regional->lider_id? \App\Member::find($regional->lider_id):null;

        //dd($regional);
        if(!$regional){
            return redirect()
                ->route('regionais.index')
                ->with(['alert'=>'Regional não encontrada!', 'alert_type'=>'info']);
        }
        return view('regionais.edit', compact('regional', 'lider'));
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
        $regional = Regional::find($id);
        $update = $regional->update($request->all());

        if($update){
            return redirect()
                ->route('regionais.show', $regional->id)
                ->with(['alert' => 'Os dados da regional '.$regional->nome.' foi atualizado com sucesso', 'alert_type' => 'success']);
        } else {
            return redirect()
                ->back()
                ->with(['alert' => 'Os dados não foram gravados', 'alert_type' => 'alert']);
        }
        return redirect()
            ->route('regionais.index')
            ->with(['alert' => 'Houve algum erro!', 'alert_type' => 'alert']);
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
