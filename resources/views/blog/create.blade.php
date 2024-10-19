@extends('layouts.custom')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Create Post</h1>
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" type="text" name="title" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="slug">Slug</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" type="text" name="slug" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" name="content" rows="10" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Post</button>
    </form>
</div>
@endsection
