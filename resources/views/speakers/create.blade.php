@extends('admin-layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Новый спикер</h1>
        <form method="post" action="{{ route('speakers.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="info">Цитаты/ комментарии</label>
                <textarea class="form-control" id="info" name="info" rows="3"></textarea>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    @foreach($conferences as $conference)
                        <input class="form-check-input" type="checkbox" value="{{$conference->id}}" name="conferences[]"> {{$conference->title}} <br>
                    @endforeach
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection