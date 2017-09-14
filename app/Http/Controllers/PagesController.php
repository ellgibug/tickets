<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Conference;
use App\Speaker;
use Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('loginOrRegister');
        $this->middleware('auth')->only(['tickets', 'cart']);
    }

    public function mainPage()
    {
        $conferences = Conference::all();
        return view('pages.main-page', compact('conferences'));
    }
    
    public function loginOrRegister()
    {
        return view('pages.login-or-register');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function program()
    {
        return view('pages.program');
    }

    public function speakers()
    {
        $speakers = Speaker::all();
        return view('pages.speakers', compact('speakers'));
    }

    public function tickets()
    {
        $tickets = Ticket::all();
        return view('pages.tickets', compact('tickets'));
    }

    public function cart()
    {
        return view('pages.cart');
    }

}
