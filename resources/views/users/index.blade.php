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
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Docs
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Examples
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Blog
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>


<section class = "container">
    @foreach ($users as $user)
     
        <!-- This is an example component -->

<div class="h-full">
 
 <div class="border-b-2 block md:flex">

   <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
     <div class="flex justify-between">
     </div>

     <div class="w-full p-8 mx-2 flex justify-center">
       <img id="showImage" class="max-w-xs w-32 items-center border" src="data:image/jpeg;base64,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" alt="">                          
       </div>
   </div>
   
   <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
     <div class="rounded  shadow p-6">
       <div class="pb-6">
       <div class="username">{{$user->name}} </div>
         <div class="flex">
         </div>
       </div>
       <div class="pb-4">
       <div class="email">{{$user->email}} </div>
       <div class ="description">{{$user->description}} </div>
       </div>
     </div>
   </div>

 </div>

</div>
  @endforeach
  </section>
</x-guest-layout>