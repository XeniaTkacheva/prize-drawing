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
                    <button class="btn btn-primary btn-lg" type="submit" name="prize">Получить приз </button>
{{--                    <a class="btn btn-primary btn-lg" href="#" role="button">Получить приз </a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
