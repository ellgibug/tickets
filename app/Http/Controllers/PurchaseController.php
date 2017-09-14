<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Ticket;
use Session;

class PurchaseController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($ticket, $ticket->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('tickets');
    }
}
