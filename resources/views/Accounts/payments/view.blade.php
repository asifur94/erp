<x-app-layout>


    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" bis_skin_checked="1">

            @include('layouts.header')







    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2" >
          <!-- row -->
          <div class="flex flex-wrap flex-row" >
            <div class="flex-shrink max-w-full px-4 w-full" >
              <p class="text-xl font-bold mt-3 mb-5">Asif</p>
              <p class="text-xl font-bold mt-3 mb-5">Kushtia</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6" >
              <div class="p-6 bg-white rounded-lg shadow-lg h-full" >
                <div class="flex flex-wrap flex-row -mx-4" >
                  <div class="flex-shrink max-w-full px-4 w-full" >

                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <div class="flex justify-between items-center mb-4">
                          <h2 class="text-3xl font-bold text-gray-800">Sell 200$</h2>

                          <span class="text-gray-400 text-sm"> Sep 30, 2023</span>
                        </div>

                        <div class="flex flex-wrap -mx-4 mb-4">
                          <div class="px-4 mb-4 w-full md:w-1/2 lg:w-1/3">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 py-5 px-6 rounded-lg shadow-md">
                              <h3 class="text-xl font-bold text-white mb-2">Expanse</h3>
                              <p class="text-lg text-white">20$</p>
                              <button class="ml-2 bg-green-500 py-2 px-4 text-white rounded-full">Accept</button>
                              <button class="ml-2 bg-red-500 py-2 px-4 text-white rounded-full">Deny</button>
                            </div>
                          </div>

                          <div class="px-4 mb-4 w-full md:w-1/2 lg:w-1/3">
                            <div class="bg-gradient-to-br from-green-500 to-green-600 py-5 px-6 rounded-lg shadow-md">
                              <h3 class="text-xl font-bold text-white mb-2">Deposit</h3>
                              <p class="text-lg text-white">100$</p>
                              <button class="ml-2 bg-blue-500 py-2 px-4 text-white rounded-full">Received</button>
                            </div>
                          </div>

                          <div class="px-4 mb-4 w-full md:w-1/2 lg:w-1/3">
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 py-5 px-6 rounded-lg shadow-md">
                              <h3 class="text-xl font-bold text-white mb-2">Due</h3>
                              <p class="text-lg text-white">10$</p>
                            </div>
                          </div>
                        </div>

                        <img  src="{{asset('assets/img/profile.png')}}" >


                        <div class="flex justify-center items-center">
                          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-8 rounded-full transition duration-300 ease-in-out">Submit</a>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>





    </div>
    <div @click="open = false" >
        <div x-bind:aria-expanded="open" :class="{ 'block': open, 'hidden': !(open) }" class="fixed bg-slate-900 bg-opacity-70  w-full h-full inset-x-0 top-0 z-30 md:hidden block" aria-expanded="true" >
        </div>
    </div>



</div>






</x-app-layout>
