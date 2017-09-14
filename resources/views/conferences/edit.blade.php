@extends('admin-layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Изменить конференцию</h1>
        <form method="post" action="{{ route('conferences.update', $conference->id) }}">
            {{ csrf_field() }}
            {{ method_field("PATCH") }}
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $conference->title }}" required>
            </div>
            <div class="form-group">
                <label for="place">Место</label>
                <input type="text" class="form-control" id="place" name="place" value="{{ $conference->place }}" required>
            </div>
            <div class="form-group">
                <label for="time">Время</label>
                <input type="datetime" class="form-control" id="time" name="time" value="{{ $conference->time }}" required>
            </div>
            Спикеры
            <div class="form-check">
                <label class="form-check-label">
                    @foreach($speakers as $speaker)
                        <input class="form-check-input" type="checkbox" {{in_array($speaker->id, $conference_speaker) ? "checked" : ""}} value="{{$speaker->id}}" name="speakers[]"> {{$speaker->name}} <br>
                    @endforeach
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("input[name=time]").mask("9999-99-99 99:99:99",{placeholder:"ГГГГ-MM-ДД ЧЧ:ММ:СС"});
        });
    </script>
@endsection