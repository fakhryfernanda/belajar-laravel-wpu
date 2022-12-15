@extends('index')

@section('content')
    <div class="w-4/5 mx-auto">
        <h1 class="text-4xl font-bold">Hello {{ auth()->user()->name }}</h1>
    </div>
@endsection