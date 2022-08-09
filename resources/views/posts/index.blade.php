<x-guest-layout>
    @foreach ($posts as $post)
  {{$post->user->name}}
  {{$post->description}}
  {{$post->email}}
 
  @endforeach
</x-guest-layout>