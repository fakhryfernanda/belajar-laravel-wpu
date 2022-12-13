@extends('index')

@section('content')
<section id="blog">
    <div class="container w-4/5 mx-auto">
        <h1 class="text-4xl font-bold mb-10">Post Category : <span class="text-rose-400">{{ $category }}</span></h1>
        <div>
            @foreach ($posts as $post)
            <article class="mb-6">
                <a href="/blog/{{ $post->id }}">
                    <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                </a>
                <h4 class="text-lg mb-2">
                    By <a href="#" class="text-orange-400">{{ $post->user->name }}</a> on <a href="/category/{{ $post->category->slug }}" class="underline text-blue-400">{{ $post->category->name }}</a>
                </h4>
                {{-- <h5>Written by: {{ $post["author"] }}</h5> --}}
                <p>{{ $post->excerpt }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection