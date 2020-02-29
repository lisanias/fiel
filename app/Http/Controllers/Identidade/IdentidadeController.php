<?php

namespace App\Http\Controllers\Identidade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Identidade;
use App\Igreja;

class IdentidadeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Lista as id's ministeriais por ordem decrescente de data de expedição.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTitle = 'Identidades Ministerias ativas';
        $identidades = Identidade::orderBy('created_at', 'DESC', SORT_REGULAR, true)
        ->where('validade', '>=', now())
            ->paginate(10);
        return view('identidade.index', compact('identidades', 'listTitle'));
    }

    /**
     * Lista as id's ministeriais por ordem decrescente de data de expedição.
     *
     * @return \Illuminate\Http\Response
     */
    public function vencidas()
    {
        $listTitle = 'Identidades Ministerias vencidas';
        $identidades = Identidade::orderBy('validade', 'DESC', SORT_REGULAR, true)
            ->where('validade', '<', now())
            ->paginate(10);
        return view('identidade.index', compact('identidades', 'listTitle'));
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
        $identidade = Identidade::find($id);
        $member = $identidade->member;
        $igreja = ($member) ? Igreja::find($identidade->member->igreja_id) : '';
        //dd($igreja);
        return view('identidade.show', compact('identidade', 'member', 'igreja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
