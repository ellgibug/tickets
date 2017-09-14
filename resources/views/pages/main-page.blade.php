@extends('layouts.app')

@section('content')

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>
                        Header
                    </h3>
                    <p>This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>
                        Header
                    </h3>
                    <p>This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>
                        Header
                    </h3>
                    <p>This is a description for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section class="main-section" id="program">
<div class="container">
    <h1 class="display-3 text-center">Программа</h1>
    <div id="accordion" role="tablist" aria-multiselectable="false" class="mt-5">
        @foreach($conferences as $conference)
        <div class="card">
            <div class="card-header" role="tab" id="{{ $conference->id }}">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $conference->id }}" aria-expanded="false" aria-controls="collapse{{ $conference->id }}">
                        {{ $conference->title }}
                    </a>
                </h5>
            </div>
            <div id="collapse{{ $conference->id }}" class="collapse" role="tabpanel" aria-labelledby="{{ $conference->id }}">
                <div class="card-body">
                    <p><strong>Место: </strong>{{ $conference->place }}</p>
                    <p><strong>Время: </strong>{{ $conference->time }}</p>
                    <p>
                        <strong>Спикеры: </strong>
                        <br>
                        @foreach($conference->speakers as $speaker)
                            {{ $speaker->name }}<br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mx-auto mt-4" style="width: 200px">
        <a role="button" class="btn btn-outline-primary btn-lg" href="{{ route('program') }}">Узнать больше</a>
    </div>
</div>
</section>

<section class="main-section" id="speakers">
    <div class="container">
        <h1 class="display-3 text-center">Спикеры</h1>
        <p class="lead text-center">Мы пригласили настоящих профессионалов, которые выступят специально для Вас!</p>
        <div class="row mt-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                </div>
            </div>
        </div>
        <div class="mx-auto mt-5" style="width: 200px">
            <a role="button" class="btn btn-outline-primary btn-lg" href="{{ route('speakers') }}">Узнать больше</a>
        </div>
    </div>
</section>

<section class="main-section  bg-light" id="sponsors">
    <div class="container">
        <h1 class="display-3 text-center">Станьте нашим спонсором</h1>
        @if(Session::has('message'))
            <div class="card mt-5">
                <div class="card-body bg-light text-center">
                    <h1>{{ Session::get('message') }}</h1>
                </div>
            </div>
        @endif
        @include('layouts.errors')
        <form method="post" action="{{ route('sponsors.store') }}">
            {{ csrf_field() }}
            <div class="row mt-2">
                <div class="col-md-8 mx-auto">
                    <div class="form-group">
                        <label for="organization">Организация</label>
                        <input type="text" class="form-control" id="organization" name="organization" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="donation">Суммa</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" class="form-control" id="donation" name="donation" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="card">Номер карты</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="form-control" id="card" name="card" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto" style="width: 200px">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Помочь проекту</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>

        <h4 class="display-4 text-center">Наши почетные спонсоры</h4>
        <div class="row">
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $("input[name=card]").mask("9999 9999 9999 9999");
    });
</script>

@endsection