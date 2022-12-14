@extends('index')

@section('content')
<section id="blog">
    <div class="container w-4/5 mx-auto">
        <h1 class="text-4xl font-bold mb-10">Post Categories</h1>
        <div class="grid grid-cols-3 gap-6 mb-5">
            @foreach ($categories as $category)
            <a href="/category/{{ $category->slug }}" class="block">
                <div class="relative border border-slate-400 rounded-lg">
                    <img src="https://source.unsplash.com/800x800?{{ $category->name }}" alt="{{ $category->name }}" class="rounded-lg">
                    <h2 class="absolute top-1/2 -translate-y-1/2 w-full py-5 text-center text-2xl font-semibold text-white bg-black/70">
                        {{ $category->name }}
                    </h2>
                </div>
            </a>
            @endforeach
        </div>
        <a href="/blog" class="underline text-lg">Back to blog</a>
    </div>
</section>
@endsection