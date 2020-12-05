@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="jumbotron-fluid">
                    <h1 class="display-4 text-center text-info">Привет Счастливчик!</h1>
                    <p class="lead">Сегодня мы разыгрываем призы</p>
                    <hr class="my-4">
                    <p>Нажми на кнопку - получишь результат: Твоя мечта осуществится!</p>
                    <form action="" method="post" enctype=""></form>
                    <a class="btn btn-primary btn-lg mb-5" href="{{ url('/rounds') }}" role="button">Получить приз </a>
                </div>
                <div class="row d-flex justify-content-around text-center">
                    @foreach($prizes as $prize)
                        <div class="card col-md-3 border-success @if(!$prize->status) border-danger bg-light @endif ">
                            <div class="card-header">{{ $prize->name }}</div>
                            <div class="card-body">
                                <p class="card-text text-center my-5">Призовой фонд -
                                    @if($prize->name !== 'Бонусные баллы'){{ $prize->amount }} {{ $prize->unit }}
                                    @else неограничен
                                    @endif
                                </p>
                                @if($prize->status)
                                    <p class="card-text text-center text-success">
                                        Доступно!
                                    </p>
                                @else
                                    <p class="card-text text-center text-danger">
                                        {{ $prize->name }} все разыграны!
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
