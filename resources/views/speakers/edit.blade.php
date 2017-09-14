@extends('admin-layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Изменить спикера</h1>
        <form method="post" action="{{ route('speakers.update', $speaker->id) }}">
            {{ csrf_field() }}
            {{ method_field("PATCH") }}
            <div class="form-group">
                <label for="name">ФИО</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $speaker->name }}" required>
            </div>
            <div class="form-group">
                <label for="info">Цитаты/ комментарии</label>
                <textarea class="form-control" id="info" name="info" rows="3">{{ $speaker->info }}</textarea>
            </div>
            Конференции
            <div class="form-check">
                <label class="form-check-label">
                    @foreach($conferences as $conference)
                        <input class="form-check-input" type="checkbox" {{in_array($conference->id, $conference_speaker) ? "checked" : ""}} value="{{$conference->id}}" name="conferences[]"> {{$conference->title}} <br>
                    @endforeach
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection