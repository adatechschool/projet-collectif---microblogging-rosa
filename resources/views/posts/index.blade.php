<x-guest-layout>

<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Welcome to the Potato List</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">

    </div>
    <div>

    </div>
  </div>
</nav>
    @foreach ($posts as $post)
    <div class="h-full">
 
 <div class="border-b-2 block md:flex">

   <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
     <div class="flex justify-between">
     </div>

     <div class="w-full p-8 mx-2 flex justify-center">
       <!--<img id="showImage" class="max-w-xs w-32 items-center border" src="https://e7.pngegg.com/pngimages/727/249/png-clipart-pigeon-pigeon.png" alt=""> -->                         
       </div>
   </div>
   
   <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
     <div class="rounded  shadow p-6">
       <div class="pb-6">
       <div class="username">{{$post->name}} </div>
       <img  class="img_url" src="{{$post->img_url}}">
         <div class="flex">
         </div>
       </div>
       <div class="pb-4">
       <div class ="description">{{$post->description}} </div>
   
       </div>
     </div>
   </div>

 </div>

</div>
  @endforeach

 
</x-guest-layout>