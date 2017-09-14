<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Auth;

class TicketController extends Controller
{
    public function addToCart($id)
    {
        $ticket = Ticket::find($id);

        $ticket->users()->attach(Auth::guard('web')->user()->id);
        
        return redirect()->route('tickets')->with('message', 'Спасибо за покупку! Вот ваши билеты.!');

    }
}
