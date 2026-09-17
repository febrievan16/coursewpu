<x-layout :title="$title">
    
   {{-- @foreach ($posts as $post)
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
   @endforeach --}}


  <div class="py-8 px-4 mx-auto max-w-7xl lg:py-16 lg:px-6">    
      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
        @foreach ($posts as $post)
          <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/categories/{{ $post->category->slug }}">
                  <span class="{{ $post->category->colour }} text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                     {{ $post->category->name }}
                  </span>
                  </a>
                  <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/author/{{ $post->author->username }}">{{ $post['title'] }}</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 100) }}</p>
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-4">
                      <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                      <span class="font-medium text-sm dark:text-white">
                          <a href="/author/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
                      </span>
                  </div>
                  <a href="/sblog/{{ $post['slug'] }}" class="inline-flex text-sm items-center font-medium text-blue-500 text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                  </a>
              </div>
          </article> 
         @endforeach     
      </div>  
  </div>


</x-layout>