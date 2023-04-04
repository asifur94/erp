<x-app-layout>

    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')



              <main class="flex w-full h-full   pt-16 -mt-2">


                <section class=" px-20 w-full flex flex-col bg-white ">

                  <section>
                    <h1 class="font-bold mt-5 text-2xl">Create application</h1>
                    <article class="mt-8 text-gray-500 leading-7 tracking-wider">
                        <form class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >

                              <input type="text" placeholder="To" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 ">
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >

                                <input type="date" placeholder="Leave Resone" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                              </div>
                              <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >

                                <input type="date" placeholder="Leave Resone" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                              </div>

                            <div class="flex-shrink max-w-full px-4 w-full  mb-6" >

                              <input type="Text" placeholder="CC" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full  mb-6" >

                              <input type="Text" placeholder="Leave Resone" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            </div>

                          </form>


                    </article>

                  </section>
                  <section class="mt-6 border rounded-xl bg-gray-50 mb-3">
                    <textarea class="w-full bg-gray-50 p-2 rounded-xl" placeholder="Type your message here..." rows="12">

                    </textarea>
                    <div class="flex items-center justify-between p-2" >
                      <button class="h-6 w-6 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                        </svg>
                      </button>
                      <button class="bg-purple-600 text-white px-6 py-2 rounded-xl">Send</button>
                    </div>
                  </section>
                </section>
              </main>



        </div>
        <div @click="open = false" >
            <div x-bind:aria-expanded="open" :class="{ 'block': open, 'hidden': !(open) }" class="fixed bg-slate-900 bg-opacity-70  w-full h-full inset-x-0 top-0 z-30 md:hidden block" aria-expanded="true" >
            </div>
        </div>



    </div>







    </x-app-layout>
