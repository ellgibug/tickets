@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="card mt-5">
            <div class="card-body bg-light text-center">
                <p class="lead font-weight-bold">
                    Добро пожаловать, {{ Auth::guard('web')->user()->name }}!
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('tickets') }}">Продолжить покупку</a>
                </div>
            </div>
        </div>
        <h1 class="display-3 text-center">Купленные билеты</h1>
        @foreach(Auth::guard('web')->user()->tickets as $ticket)
            <div class="card mt-3 mb-2">
                <div class="card-header">
                    Билет №{{ $ticket->id }}
                </div>
                <div class="card-body">
                    <p><strong>Владелец билета: </strong>{{ Auth::guard('web')->user()->name }}</p>
                    <p><strong>Конференция: </strong>{{ $ticket->conference->title }}</p>
                    <p><strong>Место и время проведения конференции: </strong>{{ $ticket->conference->place }}, {{ $ticket->conference->time }}</p>
                    <p><strong>Цена: </strong>${{ $ticket->price }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
