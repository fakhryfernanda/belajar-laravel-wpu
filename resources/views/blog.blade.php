@extends('index')

@section('content')
<section id="blog">
    <div class="container w-4/5 mx-auto">
        <div class="mb-10">
            <h1 class="text-4xl font-bold mb-2">Blog Page</h1>
            <h4><a href="/categories" class="underline text-sky-400">See categories</a></h4>
        </div>
        <div>
            @foreach ($posts as $post)
            <article class="mb-6 pb-4 border-b border-b-slate-300">
                <a href="/blog/{{ $post->id }}">
                    <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                </a>
                <h4 class="text-lg mb-2">
                    By <a href="#" class="text-orange-400">{{ $post->user->name }}</a> on <a href="/category/{{ $post->category->slug }}" class="underline text-blue-400">{{ $post->category->name }}</a>
                </h4>
                {{-- <h5>Written by: {{ $post["author"] }}</h5> --}}
                <p class="pb-2">{{ $post->excerpt }}</p>
                <a href="/blog/{{ $post->id }}" class="text-sky-600">Read more...</a>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection