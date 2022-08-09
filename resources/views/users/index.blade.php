<x-guest-layout>
    @foreach ($users as $user)
  {{$user->name}}:
  {{$user->description}}
  {{$user->email}}
 
  @endforeach
</x-guest-layout>