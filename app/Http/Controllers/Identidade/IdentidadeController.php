<?php

namespace App\Http\Controllers\Identidade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Identidade;
use App\Igreja;
use App\Member;
use PDF;
use phpDocumentor\Reflection\Types\Null_;

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
        $classColor = 'success';
        $listTitle = 'Identidades Ministerias ativas';
        $identidades = Identidade::orderBy('created_at', 'DESC', SORT_REGULAR, true)
        ->where('validade', '>=', now())
            ->paginate(10);
        return view('identidade.index', compact('identidades', 'listTitle', 'classColor'));
    }

    /**
     * Lista as id's ministeriais por ordem decrescente de data de expedição.
     *
     * @return \Illuminate\Http\Response
     */
    public function vencidas()
    {
        $classColor = 'danger';
        $listTitle = 'Identidades Ministerias Esperando Renovação';
        $identidades = Identidade::orderBy('validade', 'DESC', SORT_REGULAR, true)
            ->where('validade', '<', now())->where('arquivo', '=', Null)
            ->paginate(10);

        return view('identidade.index', compact('identidades', 'listTitle', 'classColor'));
    }

    /**
     * Lista as id's ministeriais por ordem decrescente de data de expedição.
     *
     * @return \Illuminate\Http\Response
     */
    public function antigas()
    {
        $classColor = 'warning';
        $listTitle = 'Identidades Ministerias ANTIGAS';
        $identidades = Identidade::orderBy('validade', 'DESC', SORT_REGULAR, true)
            ->where('validade', '<', now())->where('arquivo', '=', 1)
            ->paginate(10);
            
        return view('identidade.index', compact('identidades', 'listTitle', 'classColor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Formulario de criação - não usado';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->data_ordenacao){
            return redirect()
                ->route( 'members.show', $request->member_id )
                ->with(['alert'=>'Obreiro sem data de ordenação cadastrada! Por favor acrescente ao cadastro a data de ordenação.', 'alert_type'=>'danger']);
        }

        // verificar identidades que estão para revação e marcar como renovadas mudando para '1' o campo 'ignorar_renovaao'
        $updateRenovacao = Identidade::where('arquivo', '=', Null)->where('data_impressao','<>',null)->where('validade','<',now())->update(['arquivo' => 1]);

        $identidade = Identidade::create($request->all());

        return redirect()->route('identidades.show', $identidade->id);
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
        
        if(!isset($identidade)){
            return redirect()
                ->route('identidades.index')
                ->with([
                    'alert'=>'Identidade não encontrada', 
                    'alert_type'=>'danger'
                    ]);
        }
        $member = $identidade->member;
        $igreja = ($member) ? Igreja::find($identidade->member->igreja_id) : '';
        //dd($igreja);

        if($identidade->data_impressao >= "2022-05-26 00:00:00" || $identidade->data_impressao == null){
            return view('identidade.show2022', compact('identidade', 'member', 'igreja'));
        } else {
            return view('identidade.show', compact('identidade', 'member', 'igreja'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $identidade = Identidade::find($id);
        if(!isset($identidade)){
            return redirect()
                ->route('identidades.index')
                ->with([
                    'alert'=>'Identidade não encontrada', 
                    'alert_type'=>'danger'
                    ]);
        }
        $member = $identidade->member;
        $igreja = ($identidade->member) ? Igreja::find($identidade->member->igreja_id) : '';
        return view('identidade.edit', compact('identidade', 'igreja'));
    }

    public function arquivo($id)
    {
        $identidade = Identidade::find($id);
        $update = $identidade->update(['arquivo' => 1]);

        if($update){
            return redirect()
                ->route('identidades.show', $id)
                ->with(['alert'=>'Atualizado com sucesso', 'alert_type'=>'success']);
        } else {
            return redirect()
                ->route('members.show', $identidade->member_id)
                ->with(['alert'=>'Houve algum erro e os dados não foram atualizados', 'alert_type'=>'success']);
        }

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
        // Valida os campos
        $validatedData = $request->validate([
            'nome' => 'required|max:45|string',
            'cargo' => 'required|max:10',
            'igreja_nome' => 'required|max:34|string',
        ]);

        // Busca a Identidade Ministerial pelo id
        $identidade = Identidade::find($id);

        // Verifica se ja foi impresso - não alterar IDs que foram impressas
        if($identidade->data_impressao){
            return redirect()
                ->route('identidades.show', $id)
                ->with(['alert'=>__('Não é possivel alterar uma Identidade Ministerial que já foi impressa'), 'alert_type'=>'info']);
        }
 
        // Atualiza a base de dados
        $update = $identidade->update($request->all());
        
        if($update){
            return redirect()
                ->route('identidades.show', $id)
                ->with(['alert'=>'Atualizado com sucesso', 'alert_type'=>'success']);
        } else {
            return redirect()
                ->route('identidades.edit', $id)
                ->with(['alert'=>'Houve algum erro e os dados não foram atualizados', 'alert_type'=>'success']);
        }
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

    /**
     * criar PDF para impressão.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        //$identidade = Identidade::find($id);
        $identidade = Identidade::find($id);
        if($identidade == null){
            return redirect()
                ->route('identidades.index')
                ->with(['alert'=>"Identidade {$id} não existe", 'alert_type'=>'danger']);
        }
        if($identidade->data_impressao == Null){
            $identidade->data_impressao = now();
            $identidade->save();
        }

        if($identidade->data_impressao >= "2022-05-26 00:00:00"){
            return view('print.idV2', compact('identidade'));
        } else {
            return view('print.id', compact('identidade'));
        }

        
    }   

    /**
     * Procurar por uma id pelo número.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        
        return redirect()->route('identidades.show', $request->id);

    }
}
