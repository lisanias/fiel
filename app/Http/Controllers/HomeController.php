<?php

namespace App\Http\Controllers;

use App\Member;
use App\Igreja;
use App\Identidade;
use App\Regional;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members =  Member::all()->count();
        $igrejas =  Igreja::all()->count();
        $identidades = Identidade::orderBy('created_at', 'DESC', SORT_REGULAR, true)
            ->where('validade', '>=', now())
            ->count();
        $nivers = Member::MonthBirthdays()->get();
        $regionais = Regional::all()->count();
        return view('home.home', compact('members', 'igrejas', 'nivers', 'identidades', 'regionais'));
    }
}
