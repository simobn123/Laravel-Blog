@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold">Edit Blog</h1>
    </div>

    <div class="container mx-auto pt-15 pb-5">
        <form
            action="/blog/{{$post->slug}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-5 mb-5" type="text" name="title"  value="{{ $post->title }}">
            <textarea class="w-full h-60 text-l rounded-lg shadow-lg border-b p-5 mb-5" name="description" >
                {{ $post->description }}
            </textarea>

            <div class="py-15">
                <label class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">
                    <span>Select an image to upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button class="bg-green-700 hover:bg-green-200 text-gray-200 hover:text-gray-700 rounded-lg p-5 font-bold uppercase transition duration-300 cursor-pointer" type="submit" >Submit The Post</button>
        </form>
    </div>
@endsection
