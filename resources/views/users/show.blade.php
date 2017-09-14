@extends('admin-layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body bg-light">
            <p><strong>ID: </strong>{{ $user->id }}</p>
            <p><strong>Имя, Фамилия: </strong>{{ $user->name }}</p>
            <p><strong>E-mail: </strong>{{ $user->email }}</p>
            <p><strong>Компания: </strong>{{ $user->company }}</p>
            <p><strong>Должность: </strong>{{ $user->position }}</p>
            <p>
                <strong>Заказанные билеты: </strong><br>
                @foreach($user->tickets as $ticket)
                    id - {{ $ticket->id }} | цена - ${{ $ticket->price }}<br>
                @endforeach
            </p>
        </div>
    </div>



</div>

@endsection