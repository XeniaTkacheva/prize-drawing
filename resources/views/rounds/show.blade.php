@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="display-5 text-left">Ваш выигрыш в категории {{$prize->name}}!</h2>
        <p>Выигрыш: {{$round->amount}} {{ $prize->unit }} </p>
        <hr class="my-4">
        <h4 class="display-6 text-left">Список выигрышей!</h4>

        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">Когда</th>
                <th scope="col">Что</th>
                <th scope="col">Сколько</th>
                <th scope="col">Ед.изм</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rounds as $round)
                <tr>
                    <th scope="row">{{$round->created_at}}</th>
                    <td>{{ $round->prize->name }}</td>
                    <td>{{ $round->amount }}</td>
                    <td>{{ $round->prize->unit }}</td>
                </tr>
            @endforeach
        </table>
        <a class="btn btn-primary btn-lg my-5" href="{{ route('home') }}" role="button">Повторить участие в
            розыгрыше</a>
    </div>

@endsection
