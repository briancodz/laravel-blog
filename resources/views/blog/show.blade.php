@extends('layouts.custom')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>
    <div class="prose max-w-full">
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('blog.index') }}" class="text-blue-500 mt-4 block">Back to Blog</a>
</div>
@endsection
