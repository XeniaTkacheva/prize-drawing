@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="display-5 text-success text-left">Наши призы</h2>
        <hr class="my-4">
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
        <hr class="my-4">
        <a class="btn btn-outline-success btn-lg" href="{{ route('home') }}" role="button">Принять участие в розыгрыше
            призов </a>
    </div>
@endsection
