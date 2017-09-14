@extends('admin-layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Спонсоры</h1>
        <table class="table table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Организация</th>
                <th>Пожертвование</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sponsors as $sponsor)
                <tr>
                    <th scope="row">{{ $sponsor->id }}</th>
                    <td><a href="{{ route('sponsors.show', $sponsor->id) }}">{{ $sponsor->organization }}</a></td>
                    <td>{{ $sponsor->donation }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection