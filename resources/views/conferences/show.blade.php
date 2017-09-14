@extends('admin-layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body bg-light">
            <p><strong>ID: </strong>{{ $conference->id }}</p>
            <p><strong>Название: </strong>{{ $conference->title }}</p>
            <p><strong>Место: </strong>{{ $conference->place }}</p>
            <p><strong>Время: </strong>{{ $conference->time }}</p>
            <p>
                <strong>Спикеры: </strong><br>
                @foreach($conference->speakers as $speaker)
                    {{ $speaker->name }}<br>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection