@extends('admin-layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Пользователи</h1>
    <table class="table table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>ФИО</th>
            <th>E-mail</th>
            <th>Компания</th>
            <th>Должность</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->company }}</td>
            <td>{{ $user->position }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection