<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Team;
use App\Models\Testomonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard()
    {
        $teams = Team::count();
        $notices = Notice::count();
        $testos = Testomonial::count();
        return view('dashboard',compact('teams','notices','testos'));
    }

    public function home()
    {
        $teams = Team::all();
        $notices = Notice::all();
        $testos = Testomonial::all();
        return view('welcome',compact('teams','notices','testos'));
    }
}
