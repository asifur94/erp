<x-app-layout>

    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')



              <main class="flex w-full h-full   pt-16 -mt-2">
                <section class="flex flex-col w-2/12 bg-white ">
                  <div class="w-16 mx-auto mt-12 mb-20 p-4 bg-indigo-400 rounded-2xl " >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>





                  </div>
                  <nav class="relative flex flex-col py-4 items-center">
                    <a href="#" class="relative w-16 p-4 bg-purple-100 text-purple-900 rounded-2xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"></path>
                      </svg>
                      <span class="absolute -top-2 -right-2 bg-red-600 h-6 w-6 p-2 flex justify-center items-center text-white rounded-full">3</span>
                    </a>
                    <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                      </svg>
                    </a>
                    <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                      </svg>
                    </a>
                    <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                      </svg>
                    </a>
                    <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-24">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                      </svg>
                    </a>

                  </nav>
                </section>
                <section class="flex flex-col pt-3 w-4/12 bg-gray-50 h-full overflow-y-scroll">
                  <label class="px-3">
                    <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full" placeholder="Search...">
                  </label>

                  <ul class="mt-6">
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 bg-indigo-600 text-white">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md">23m ago</p>
                      </a>
                      <div class="text-md" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                    <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
                      <a href="#" class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Akhil Gautam</h3>
                        <p class="text-md text-gray-400">23m ago</p>
                      </a>
                      <div class="text-md italic text-gray-400" >You have been invited!</div>
                    </li>
                  </ul>
                </section>
                <section class="w-6/12 px-4 flex flex-col bg-white ">
                  <div class="flex justify-between items-center h-48 border-b-2 mb-8" >
                    <div class="flex space-x-4 items-center" >
                      <div class="h-12 w-12 rounded-full overflow-hidden" >
                        <img src="https://bit.ly/2KfKgdy" loading="lazy" class="h-full w-full object-cover">
                      </div>
                      <div class="flex flex-col" >
                        <h3 class="font-semibold text-lg">Akhil Gautam</h3>
                        <p class="text-light text-gray-400">akhil.gautam123@gmail.com</p>
                        <p class="text-light text-gray-400"><span class="text-black p-1">CC :</span>hgjggh@gmail.com</p>
                      </div>
                    </div>
                    <div >
                      <ul class="flex text-gray-400 space-x-4">
                        <li class="w-6 h-6">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
                          </svg>
                        </li>
                        <li class="w-6 h-6">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                        </li>

                        <li class="w-6 h-6">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                          </svg>
                        </li>
                        <li class="w-6 h-6">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                          </svg>
                        </li>
                        <li class="w-6 h-6">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                          </svg>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <section>
                    <h1 class="font-bold text-2xl">We need UI/UX designer</h1>
                    <article class="mt-8 text-gray-500 leading-7 tracking-wider">
                      <p>Hi Akhil,</p>
                      <p>Design and develop enterprise-facing UI and consumer-facing UI as well as
                        REST API
                        backends.Work with
                        Product Managers and User Experience designers to create an appealing user experience for desktop web and
                        mobile web.</p>
                      <footer class="mt-12">
                        <p>Thanks &amp; Regards,</p>
                        <p>Alexandar</p>
                      </footer>
                    </article>
                    <ul class="flex space-x-4 mt-12">
                      <li class="w-10 h-10 border rounded-lg p-1 cursor-pointer transition duration-200 text-indigo-600 hover:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                        </svg>
                      </li>
                      <li class="w-10 h-10 border rounded-lg p-1 cursor-pointer transition duration-200 text-blue-800 hover:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                        </svg>
                      </li>
                      <li class="w-10 h-10 border rounded-lg p-1 cursor-pointer transition duration-200 text-pink-400 hover:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                        </svg>
                      </li>
                      <li class="w-10 h-10 border rounded-lg p-1 cursor-pointer transition duration-200 text-yellow-500 hover:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                        </svg>
                      </li>
                    </ul>
                  </section>
                  <section class="mt-6 border rounded-xl bg-gray-50 mb-3">
                    <textarea class="w-full bg-gray-50 p-2 rounded-xl" placeholder="Type your reply here..." rows="3"></textarea>
                    <div class="flex items-center justify-between p-2" >
                      <button class="h-6 w-6 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                        </svg>
                      </button>
                      <button class="bg-purple-600 text-white px-6 py-2 rounded-xl">Reply</button>
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
