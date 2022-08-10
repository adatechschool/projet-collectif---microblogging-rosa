<x-guest-layout>


  <div class="2xl:container 2xl:mx-auto">
    <div class="bg-white dark:bg-gray-800 rounded shadow-lg py-5 px-7">
      <nav class="flex justify-between">
        <div class="flex items-center space-x-3 lg:pr-16 pr-6">
          <img class="cursor-pointer dark:bg-white p-1 rounded-full" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg1.svg" alt="circle" />
          <h2 class="font-normal text-2xl leading-6 text-gray-800 dark:text-white">Potato List</h2>
        </div>

        <!-- For medium and plus sized devices -->

        <img class="cursor-pointer dark:bg-white rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg3.svg" alt="bell" />
    </div>
    </nav>
    <!-- for smaller devcies -->

    <div class="block md:hidden w-full mt-5">
      <div onclick="selectNew()" class="cursor-pointer px-4 py-3 text-white bg-indigo-600 rounded flex justify-between items-center w-full">

        <img id="ArrowSVG" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg4.svg" alt="down arrow" class="rotate-180 transform" />
      </div>
      <div class="relative">
        <ul id="list" class="hidden font-normal text-base leading-4 absolute top-2 w-full rounded shadow-md z-20">
          <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Arts</li>
          <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Space</li>
          <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Game</li>
          <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Utility</li>
          <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Cards</li>
        </ul>
      </div>
    </div>
  </div>
  </div>



  <section class="container">
    @foreach ($users as $user)

    <!-- This is an example component -->

    <div class="h-full">

      <div class="border-b-2 block md:flex">

        <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
          <div class="flex justify-between">
          </div>

          <div class="w-full p-8 mx-2 flex justify-center">
            <img id="showImage" class="max-w-xs w-32 items-center border img_url" src="{{$user->img_url}}">

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
              <div class="description">{{$user->description}} </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    @endforeach
  </section>
</x-guest-layout>