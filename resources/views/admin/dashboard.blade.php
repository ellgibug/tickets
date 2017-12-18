@extends('admin-layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5 mb-5 bg-light">
        <div class="card-body">
            @component('components.who')
            @endcomponent
        </div>
    </div>

    <table class="table table-sm">
        <thead>
        <tr>
            <th>Билет</th>
            <th>Цена 1 билета</th>
            <th>Конференция</th>
            <th>Продано билетов</th>
            <th>Выручка</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tickets as $ticket)
            <tr>
                <td>{{ $ticket->ticket_id}}</td>
                <td>${{ $ticket->price }}</td>
                <td>{{ $ticket->title }}</td>
                <td>{{ $ticket->ticket_amount }}</td>
                <td>${{ $ticket->ticket_amount * $ticket->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {{--данные в графике можно вывести по-другому--}}

    <canvas id="myChart" width="400" height="200"></canvas>
    <script>
        $(document).ready(function () {
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:[
                            @foreach($tickets as $ticket)
                                {{ $ticket->ticket_id}},
                            @endforeach
                    ],
                    datasets: [{
                        label: '# Выручка',
                        data:[
                            @foreach($tickets as $ticket)
                            {{ $ticket->ticket_amount * $ticket->price}},
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        });
    </script>

</div>
@endsection
