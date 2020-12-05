@extends('layouts.app')

@section('content')
    @guest()
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="jumbotron-fluid text-center">
                        <h2 class="display-4 text-center">Добро пожаловать в гости!</h2>
                        <p class="lead py-4">Зарегистрируйся или войди в систему, чтобы принять участие в розыгрыше.</p>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="jumbotron-fluid text-center">
                        <h2 class="display-5 text-center">Добро пожаловать {{ Auth::user()->name }}!</h2>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Принять участие в розыгрыше призов </a>
                    </div>
                </div>
            </div>
        </div>
    @endguest

@endsection
