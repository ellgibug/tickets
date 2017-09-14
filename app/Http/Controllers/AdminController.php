<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Conference;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = DB::table('ticket_user')
            ->select(DB::raw('count(*) as ticket_amount, ticket_id, tickets.price, conferences.title'))
            ->join('tickets', 'ticket_user.ticket_id', '=', 'tickets.id')
            ->join('conferences', 'tickets.conference_id', '=', 'conferences.id')
            ->groupBy('ticket_id')
            ->get();

        return view('admin.dashboard', compact('tickets'));
    }
}
