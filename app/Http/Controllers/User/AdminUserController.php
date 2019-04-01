<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User as Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
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
        $users = Auth::orderBy('name', 'ASC', SORT_REGULAR, true)->paginate(20);
        return view('auth.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
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
        $user = Auth::find($id);
        if($user)
            return view('auth.show', compact('user'));
        else
            return abort(404);
            //return $this->index()->with('alert', 'Você tentou acessar um unuário inexistente')->with('alertType', 'danger');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::find($id);
        if($user)
            return view('auth.edit', compact('user'));
        else
            return abort(404, 'Usuário não encontrado');
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
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users,email,'.$id],
            'username' => ['string', 'min:5', 'max:25', 'unique:users,username,'.$id]
        ]);

        // Pega os dados do formulário
        $dataForm = $request->all();

        //Localiza a celula que quer alterar na base de dados
        $user = Auth::find($id);

        $update = $user->update($dataForm);

        if($update)
            return redirect()->route('user.show', $id)->with("alert", trans('messages.userUpdateSuccess'))->with('alertType', 'success');
        else
            return redirect()->back()->with("alert","erro ao tentar gravar dados do usuário");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Auth::destroy($id);
        return redirect()->route('user.index')->with('alert', 'O usuário foi apagado com sucesso, não tem como voltar atrás.')->with('alertType', 'warning');
    }

    /**
     * Update passord
     */
    public function updatePassword(Request $request, $id)
    {
        $validator = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::find($id);
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect()->route('user.show', $id)->with("alert", trans('messages.passwordUpdateSuccess'))->with('alertType', 'success');
    }
}
