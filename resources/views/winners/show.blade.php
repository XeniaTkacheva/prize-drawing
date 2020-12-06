@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="display-6 text-left">Здесь будет ваша статистика!</h4>
        <hr class="my-4">
        <p>А пока просто играйте...</p>

        <a class="btn btn-primary btn-lg my-5" href="{{ route('home') }}" role="button">Повторить участие в
            розыгрыше</a>
    </div>

@endsection
