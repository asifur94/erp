<x-app-layout>


    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')




    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2" >
          <!-- row -->
          <div class="container mx-auto ">
            <div class="flex-shrink max-w-full px-4 w-full" >
                <p class="text-xl font-bold mt-3 mb-5">Calender</p>
              </div>
            <div class="wrapper bg-white rounded shadow w-full ">
              <div class="header flex justify-between border-b p-2 py-6">
                <div>
                    <div x-data="{ open: false }" class="relative">
                        <a href="javascript:;" class=" focus:outline-none" id="messages" @click="open = ! open">
                            <div class="relative inline-block" >
                                <button class="ml-2 bg-blue-500 py-2 px-4 text-white rounded-full">Add Event</button>
                            </div>
                          </a>

                        <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute  rounded top-full z-50 py-0.5 text-left bg-white  shadow-md"  style="">

                          <div class=" w-full overflow-y-auto scrollbars show" >

                              <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100 bg-slate-50" >

                                <div class="flex-1 p-6 bg-gray-100  bg-opacity-60 " >
                                    <form class="flex-shrink max-w-full px-4 w-full ">
                                      <div class="flex-shrink max-w-full px-4 w-full  mb-6" >
                                        <label for="" class="inline-block mb-2">Event Name</label>
                                        <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 ">
                                      </div>
                                      <div class="flex-shrink max-w-full px-4 w-full  mb-6" >
                                        <label  class="inline-block mb-2">Date</label>
                                        <input type="date" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 ">
                                      </div>






                                      <div class="flex-shrink max-w-full px-4 w-full" >
                                        <button type="submit" class="py-2 px-5 inline-block text-center rounded mb-3 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Submit

                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <span class="text-lg font-bold">
                            2020 July
                          </span>
                          <div class="buttons">
                            <button class="p-1">
                              <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                                <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
                              </svg>
                            </button>
                            <button class="p-1">
                              <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                              </svg>
                            </button>
                          </div>
                        </div>







              <table class="w-full">
                <thead>
                  <tr>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
                    </th>
                    <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                      <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
                      <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center h-20">
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">1</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                          <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                            <span class="event-name">
                              Meating
                            </span>
                            <span class="time">
                              12:00~14:00
                            </span>
                          </div>
                          <div class="event bg-purple-400 text-white rounded p-1 text-sm mb-1">
                            <span class="event-name">
                              Meating
                            </span>
                            <span class="time">
                              18:00~20:00
                            </span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">2</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">3</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">4</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">6</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">7</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                          <div class="event bg-blue-400 text-white rounded p-1 text-sm mb-1">
                            <span class="event-name">
                              Shopping
                            </span>
                            <span class="time">
                              12:00~14:00
                            </span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500 text-sm">8</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                  </tr>

                  <!--         line 1 -->
                  <tr class="text-center h-20">
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">9</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">10</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">12</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">13</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">14</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">15</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500 text-sm">16</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                  </tr>
                  <!--         line 1 -->

                  <!--         line 2 -->
                  <tr class="text-center h-20">
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">16</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">17</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">18</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">19</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">20</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">21</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500 text-sm">22</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                  </tr>
                  <!--         line 2 -->

                  <!--         line 3 -->
                  <tr class="text-center h-20">
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">23</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">24</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">25</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">26</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">27</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">28</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500 text-sm">29</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                  </tr>
                  <!--         line 3 -->

                  <!--         line 4 -->
                  <tr class="text-center h-20">
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">30</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">31</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">1</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">2</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">3</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500">4</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                    <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                      <div class="flex flex-col h-40  xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                        <div class="top h-5 w-full">
                          <span class="text-gray-500 text-sm">5</span>
                        </div>
                        <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                      </div>
                    </td>
                  </tr>
                  <!--         line 4 -->
                </tbody>
              </table>
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
