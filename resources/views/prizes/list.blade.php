@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="display-5 text-success text-left">Наши призы</h2>
        <hr class="my-4">

        @include('layouts.prizes')

        <hr class="my-4">
        <a class="btn btn-outline-success btn-lg" href="{{ route('home') }}" role="button">Принять участие в розыгрыше
            призов </a>
    </div>
@endsection
