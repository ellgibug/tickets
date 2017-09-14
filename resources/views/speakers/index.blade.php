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

        <h1>Спикеры</h1>
        <h2><a href="{{ route('speakers.create') }}">Новый спикер</a></h2>
        <table class="table table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($speakers as $speaker)
                <tr>
                    <th scope="row">{{ $speaker->id }}</th>
                    <td><a href="{{ route('speakers.show', $speaker->id) }}">{{ $speaker->name }}</a></td>
                    <td>
                        <a href="{{route('speakers.edit', $speaker->id)}}">Изменить</a>
                        <form action="{{route('speakers.destroy', $speaker->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn-link" id="delete-btn">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $("#delete-btn").click(function () {
                return confirm ('Удалить спикера?');
            });
        });
    </script>
@endsection