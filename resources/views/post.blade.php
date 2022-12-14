@extends('index')

@section('content')
<section>
    <div class="container w-4/5 mx-auto">
        <article class="w-2/3 mb-8 mx-auto">
            <h1 class="text-4xl font-bold mb-3">{{ $post->title }}</h2>
            <h4 class="text-lg mb-2">
                By <a href="/author/{{ $post->author->username }}" class="text-orange-400">{{ $post->author->name }}</a> on <a href="/category/{{ $post->category->slug }}" class="underline text-blue-400">{{ $post->category->name }}</a>
            </h4>
            <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }} photo" class="mb-4">

            <div class="my-2 text-lg flex flex-col gap-2">
                {!! $post->body !!}
            </div>

            <a href="/blog" class="underline">Back to blog</a>
        </article>
    </div>
</section>
@endsection