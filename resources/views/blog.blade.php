<x-layout :title="$title">
    
   @foreach ($posts as $post)
       <article class="py-8 max-w-3xl border-b border-gray-300">
         <a href="/sblog/{{ $post['slug'] }}">
            <h1 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post['title'] }}</h1>
            </a>
        <div class="text-base text-gray-500">
            By <a href="/author/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 12 Januari 2020 | in <a href="/categories/{{ $post->category->slug }}" class="hover:underline">{{ $post->category->name }}</a> 
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 80) }}</p>
        <a href="/sblog/{{ $post['slug'] }}" class="text-blue-500 hover:underline font-medium">Read more &raquo;</a>
    </article>
   @endforeach

</x-layout>