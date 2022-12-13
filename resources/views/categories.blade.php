@extends('index')

@section('content')
<section id="blog">
    <div class="container w-4/5 mx-auto">
        <h1 class="text-4xl font-bold mb-10">Post Categories</h1>
        <ul class="mb-5">
            @foreach ($categories as $category)
            <li class="list-disc hover:text-sky-400">
                <h2 class="text-xl">
                    <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
            @endforeach
        </ul>
        <a href="/blog" class="underline">Back to blog</a>
    </div>
</section>
@endsection