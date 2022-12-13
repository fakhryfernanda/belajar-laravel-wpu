@extends('index')

@section('content')
<section>
    <div class="container w-4/5 mx-auto">
        <article class="mb-5">
            <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
            <h4 class="text-lg mb-2">
                By <a href="/author/{{ $post->author->username }}" class="text-orange-400">{{ $post->author->name }}</a> on <a href="/category/{{ $post->category->slug }}" class="underline text-blue-400">{{ $post->category->name }}</a>
            </h4>
            {{-- <h5>Written by: {{ $post["author"] }}</h5> --}}
            <div class="flex flex-col gap-3">
                {!! $post->body !!}
            </div>
        </article>

        <a href="/blog" class="underline">Back to blog</a>
    </div>
</section>
@endsection