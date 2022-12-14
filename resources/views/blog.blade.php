@extends('index')

@section('content')
<section id="blog" class="mb-10">
    <div class="container w-4/5 mx-auto">
        <h1 class="text-center text-4xl font-bold mb-5">{{ $title }}</h1>
        <form action="/blog" class="w-fit mx-auto mb-10">
            <div class="w-fit flex rounded-md border">
                <input class="w-[600px] p-2 focus:outline-lime-400" type="text" placeholder="Search.." value="{{ $searching }}" name="search">
                <button class="py-2 px-4 rounded-tr-md rounded-br-md bg-lime-400 text-white" type="submit">Search</button>
            </div>
        </form>
        @if ($posts->count())
            @if (!$searching)
                <article class="mb-8 border border-slate-200 text-center">
                    <img src="https://source.unsplash.com/1500x500?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }} photo" class="mb-4">
                    <div class="p-4">
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
                    </div>
                </article>
            @endif
            <div class="grid grid-cols-3 gap-6">
                @foreach ($posts->skip(1-(int)isset($searching)) as $post)
                    <article class="border border-slate-300">
                        <div class="absolute px-2 py-1 text-white bg-black/50">
                            <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" alt="">
                        <div class="p-4">
                            <a href="/blog/{{ $post->slug }}">
                                <p class="text-2xl font-bold">{{ $post->title }}</p>
                            </a>
                            <p class="text-sm mb-2">
                                By <a href="/author/{{ $post->author->username }}" class="text-orange-400">{{ $post->author->name }}</a>
                            </p>
                            <p class="pb-2">{{ $post->excerpt }}</p>
                            <a href="/blog/{{ $post->slug }}" class="text-sky-600">Read more...</a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <p class="text-xl text-center">No post found.</p>    
        @endif
    </div>
</section>
@endsection