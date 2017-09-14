@extends('admin-layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body bg-light">
            <p><strong>ID: </strong>{{ $speaker->id }}</p>
            <p><strong>Имя, Фамилия: </strong>{{ $speaker->name }}</p>
            <p><strong>Цитата: </strong>{{ $speaker->info }}</p>
            <p>
                <strong>Концеренции: </strong><br>
                @foreach($speaker->conferences as $conference)
                    {{ $conference->title }}<br>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection