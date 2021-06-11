@props(['post'])

<article class="mb-8 bg-white shadow-lg overflow-hidden">
    <img class="w-full h-72 object-cover object-center" src="@if($post->image) {{ Storage::url($post->image->url) }} @else http://blog.test/storage/default_post_img.jpg @endif" alt="">
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gray-700 text-base">{!! $post->extract !!}</div>
    </div>
    <div class="px-6 pt-4 pb-4">
        @foreach($post->tags as $tag)
            <a href="{{ route('posts.tag', $tag) }}" class="inline-block text-white px-3 py-1 text-sm bg-{{ $tag->color }}-600 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>