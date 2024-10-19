@extends('layouts.custom')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Blog</h1>
    @foreach($posts as $post)
        <div class="mb-4 p-4 bg-white shadow rounded">
            <h2 class="text-2xl font-semibold">
                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
            </h2>
            <p class="mt-2">{{ Str::limit($post->content, 100) }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500">Read more</a>
        </div>
    @endforeach
</div>
@endsection
