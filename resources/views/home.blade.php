@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="jumbotron-fluid">
                    <h1 class="display-4 text-center text-info">Привет Счастливчик!</h1>
                    <p class="lead">Сегодня мы разыгрываем призы</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <hr class="my-4">
                    <p>Нажми на кнопку - получишь результат: Твоя мечта осуществится!</p>
                    <form action="{{ route('add-round') }}" method="post" enctype="">
                        @csrf
                        <button class="btn btn-primary btn-lg mb-5" type="submit">Получить приз</button>
                    </form>
                </div>

                @include('layouts.prizes')

                <div class="">
                    <h3 class="display-6 mt-5  text-success">На эту минуту уже разыграно: </h3>
                    @foreach($prizes as $prize)

                        <p>{{$prize->name}} - {{ abs($prize->amount - $prize->actual_amount)}} {{ $prize->unit }}</p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
