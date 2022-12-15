@extends('index')

@section('content')
    <div class="mx-auto w-fit">
        <h2 class="mb-5 text-3xl text-center font-semibold">Please sign in</h2>
        <form action="/login" method="post" class="flex flex-col">
            @csrf
            <input class="w-[300px] py-3 px-4 border border-gray-300" name="email" type="text" placeholder="Email address">
            <input class="w-[300px] py-3 px-4 border border-gray-300" name="password" type="text" placeholder="Password">
            {{-- <div class="mt-2 flex items-center gap-2">
                <input class="block" type="Checkbox">
                <p>Remember me</p>
            </div> --}}
            <button class="mt-4 py-2 text-lg text-white bg-blue-500 text-center rounded-md">Sign in</button>
        </form>
        <p class="text-center mt-5">Not registered? <a href="/register" class="underline text-blue-500">Register Now!</a></p>
    </div>
@endsection