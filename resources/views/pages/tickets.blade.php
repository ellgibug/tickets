@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card mt-5">
        <div class="card-body bg-light text-center">
            <p class="lead font-weight-bold">
                Добро пожаловать, {{ Auth::guard('web')->user()->name }}!
            </p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('cart') }}">Купленные билеты</a>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="card mt-5">
            <div class="card-body bg-light text-center">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif
    <h1 class="display-3 text-center">Билеты</h1>
    @foreach($tickets->chunk(2) as $ticketChunk)
    <div class="row">
        @foreach($ticketChunk as $ticket)
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <a href="{{ route('add-to-cart', $ticket->id) }}" class="btn btn-light btn-sm" role="button" id="add-btn">${{ $ticket->price }}</a>
                    {{ $ticket->conference->title }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $ticket->conference->place }}</h5>
                    <h6 class="card-title">{{ $ticket->conference->time }}</h6>
                    @foreach($ticket->conference->speakers as $speaker)
                        <li>{{ $speaker->name }}</li>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

@endsection
