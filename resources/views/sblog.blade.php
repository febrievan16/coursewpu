<x-layout :title="$title">
    <article class="py-8 max-w-3xl">
        <h1 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h1>
        <div class="text-base text-gray-500">
            <a href="/author/{{ $post->author->username }}">{{ $post->author->name}}</a> | 1 januari 2025 | <a href="/category/{{ $post->category->id }}" class="hover:underline">{{ $post->category->name }}</a>
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class="text-blue-500 hover:underline font-medium"> &laquo; Back to daftar blog</a>
    </article>

</x-layout>