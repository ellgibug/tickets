@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="display-3 text-center">Наши спикеры</h1>
    <table class="table table-hover mt-5">
        <thead>
        <tr>
            <th>Спикер</th>
            <th>Конференции</th>
            <th>Цитаты</th>
        </tr>
        </thead>
        <tbody>
        @foreach($speakers as $speaker)
            <tr>
                <td>{{ $speaker->name }}</td>
                <td>
                    @foreach($speaker->conferences as $conference)
                        <li>{{ $conference->title }}, {{ $conference->place }}, {{ $conference->time }}</li>
                        <br>
                    @endforeach
                </td>
                <td>
                    <p>{{ $speaker->info }}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection