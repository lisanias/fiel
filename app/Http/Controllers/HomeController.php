<?php

namespace App\Http\Controllers;

use App\Member;
use App\Igreja;
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
        $members =  Member::all();
        $igrejas =  Igreja::all();
        $nivers = Member::MonthBirthdays()->get();
        return view('home', compact('members', 'igrejas', 'nivers'));
    }
}
