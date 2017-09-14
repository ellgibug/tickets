@extends('admin-layouts.app')

@section('content')
    <div class="container mt-5">

        @if(Session::has('message'))
            <div class="card bg-light">
                <div class="card-body">
                    {{ Session::get('message') }}
                </div>
            </div>
        @endif

        <h1>Конфренция</h1>
        <table class="table table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Место</th>
                <th>Время</th>
                <th>Спикеры</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <th scope="row">{{ $conference->id }}</th>
                    <td><a href="{{ route('conferences.show', $conference->id) }}">{{ $conference->title }}</a></td>
                    <td>{{ $conference->place }}</td>
                    <td>{{ $conference->time }}</td>
                    <td>Спикеры</td>
                    <td>
                        <a href="{{route('conferences.edit', $conference->id)}}">Изменить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection