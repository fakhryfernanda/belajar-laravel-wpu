@extends('index')

@section('content')
<section id="blog">
    <div class="container w-4/5 mx-auto">
        <div class="mb-10">
            <h1 class="text-4xl font-bold mb-2">{{ $title }}</h1>
            <h4><a href="/categories" class="underline text-sky-400">See categories</a></h4>
        </div>
        <article class="p-4 mb-8 border border-slate-200 text-center">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }} photo" class="mb-4">
            <a href="/blog/{{ $posts[0]->slug }}">
                <h2 class="text-2xl font-bold">{{ $posts[0]->title }}</h2>
            </a>
            <p class="text-sm mb-2">
                By <a href="/author/{{ $posts[0]->author->username }}" class="text-orange-400">{{ $posts[0]->author->name }}</a> on <a href="/category/{{ $posts[0]->category->slug }}" class="underline text-blue-400">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </p>
            <p class="mb-2">{{ $posts[0]->excerpt }}</p>
            <div class="w-fit p-2 mx-auto bg-blue-600 rounded-md shadow-sm">
                <a href="/blog/{{ $posts[0]->slug }}" class="block text-white text-sm">Read more</a>
            </div>
        </article>
        <div>
            @foreach ($posts as $post)
            <article class="mb-6 pb-4 border-b border-b-slate-300">
                <a href="/blog/{{ $post->slug }}">
                    <h2 class="text-2xl font-bold">{{ $post->title }}</h2>
                </a>
                <h4 class="text-lg mb-2">
                    By <a href="/author/{{ $post->author->username }}" class="text-orange-400">{{ $post->author->name }}</a> on <a href="/category/{{ $post->category->slug }}" class="underline text-blue-400">{{ $post->category->name }}</a>
                </h4>
                {{-- <h5>Written by: {{ $post["author"] }}</h5> --}}
                <p class="pb-2">{{ $post->excerpt }}</p>
                <a href="/blog/{{ $post->slug }}" class="text-sky-600">Read more...</a>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endsection