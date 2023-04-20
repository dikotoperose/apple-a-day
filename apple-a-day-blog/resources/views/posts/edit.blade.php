
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apple A Day') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('posts.update', $post->id)}}" method="post" style="padding:1.25rem">
    @csrf
    @isset($post)
        @method('put')
    @endisset
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        Post Title
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Please write the post title" value="{{$post->title}}" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
        Post Content
      </label>
      <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" name="content" rows="5"  placeholder="Please write the post summary" required>{{$post->content}}</textarea>

    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="details">
        Post Details
      </label>
      <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="post_detail" name="post_detail" rows="10" placeholder="Please write the post detail" required>{{$post->post_detail}}</textarea>
    </div>
    <div class="flex items-center justify-between">
    <button type="submit" class="btn btn-info">Update Post</button>
    </div>
  </form>


</div>

</div>
        </div>
        
</div>
    
</x-app-layout>
