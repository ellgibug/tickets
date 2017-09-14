@extends('admin-layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body bg-light">
            <p><strong>ID: </strong>{{ $sponsor->id }}</p>
            <p><strong>Организация: </strong>{{ $sponsor->organization }}</p>
            <p><strong>Пожертвование: </strong>{{ $sponsor->donation }}</p>
            <p><strong>Карта: </strong>{{ $sponsor->card }}</p>
        </div>
    </div>
</div>
@endsection