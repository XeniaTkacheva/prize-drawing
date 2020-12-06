@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="display-5 text-left">Список всех выигрышей!</h2>
        <hr class="my-4">

        <table class="table table-sm border-success">
            <thead>
            <tr class="bg-success-light text-success">
                <th scope="col">Когда</th>
                <th scope="col">Что</th>
                <th scope="col">Сколько</th>
                <th scope="col">Ед.изм</th>
                <th scope="col">Кто</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rounds as $round)
                <tr class="">
                    <th scope="row">{{$round->created_at}}</th>
                    <td>{{ $round->prize->name }}</td>
                    <td>{{ $round->amount }}</td>
                    <td>{{ $round->prize->unit }}</td>
                    <td>{{ $round->winner->name }}</td>
                </tr>
            @endforeach
        </table>
        <hr class="my-4">
        <a class="btn btn-outline-success btn-lg" href="{{ route('home') }}" role="button">Принять участие в розыгрыше
            призов </a>
    </div>

@endsection
