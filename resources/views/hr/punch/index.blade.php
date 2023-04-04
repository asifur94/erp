<x-app-layout>



    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')




    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2" >
          <!-- row -->
          <div class="flex flex-wrap flex-row" >
            <div class="flex-shrink max-w-full px-4 w-full" >
              <p class="text-xl font-bold mt-3 mb-5">Check In / Check Out / Leave</p>
            </div>


        <div class="mb-4 px-4 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-5 w-full" >
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path><path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd"></path><path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                    </svg>
                </div>
                <div class="p-4 text-right" >
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Working Day</p>
                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">20</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4" >
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+55%</strong>&nbsp;than last week</p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md" >
                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-4 text-right" >
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Check In On Time</p>
                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">23</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4" >
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600"><strong class="text-green-500">+3%</strong>&nbsp;than last month</p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md" >
                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                    </svg>
                </div>
                <div class="p-4 text-right" >
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Late</p>
                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">3</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4" >
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-red-500">-2%</strong>&nbsp;than yesterday</p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md" >
                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                    </svg>
                </div>
                <div class="p-4 text-right" >
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Off Day</p>
                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">1</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4" >
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+5%</strong>&nbsp;than yesterday</p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md" >
                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                    </svg>
                </div>
                <div class="p-4 text-right" >
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Leave</p>
                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">1</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4" >
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+5%</strong>&nbsp;than yesterday</p>
                </div>
            </div>

        </div>

        <!-- Table -->
            <div class="flex-shrink max-w-full px-4 w-full mb-6" >
              <div class="p-6 bg-white  rounded-lg shadow-lg h-full" >
                <div class="flex flex-wrap flex-row -mx-4" >
                  <div class="flex-shrink max-w-full px-4 w-full" >
                    <div class="md:flex md:justify-between" >
                      <div >
                        <a href="#" class="py-2 text-xl px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            Check In
                        </a>

                      </div>
                      <div >
                        <a href="Leave" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            Leave
                        </a>

                      </div>
                      <div >
                        <a href="#" class="py-2 text-xl px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            Check Out
                        </a>

                      </div>


                    </div>
                    <div class="w-full mb-6 overflow-x-auto" >
                      <form action="">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" >

                            <div class="dataTable-container" >
                                <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600  dataTable-table">
                          <thead>
                            <tr class="bg-gray-100 ">

                                <th class="hidden lg:table-cell" data-sortable="" style="width: 14.3514%;">
                                    <a href="#" class="dataTable-sorter">Name</a>
                                </th>
                                <th data-sortable="" style="width: 20.5152%;">
                                    <a href="#" class="dataTable-sorter">Shop Location</a>
                                </th>
                                <th class="hidden lg:table-cell" data-sortable="" style="width: 17.7553%;">
                                    <a href="#" class="dataTable-sorter">Check In</a>
                                </th>
                                <th class="hidden lg:table-cell" data-sortable="" style="width: 17.6633%;">
                                    <a href="#" class="dataTable-sorter">Check Out</a>
                                </th>
                                <th class="text-center" data-sortable="" style="width: 10.1196%;">
                                    <a href="#" class="dataTable-sorter">Date</a>
                                </th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200  rounded-full">Check In</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 rounded-full">Check Out</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Khulna
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-green-500 rounded-full">9.50 AM</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-green-500 rounded-full">8.30 PM</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-yellow-400 rounded-full">10.05 AM</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-green-500 rounded-full">9.01 PM</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-red-500 text-white rounded-full">Absent</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-green-500 rounded-full">9.01 PM</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-gray-400 rounded-full">Off Day</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-gray-400 rounded-full">Off Day</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-yellow-100 rounded-full">HL 2.00 PM</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-green-500 rounded-full">9.01 PM</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-green-100 rounded-full">Leave</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-green-100 rounded-full">Leave</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                            <tr class="border-b text-center">

                                <td class="hidden lg:table-cell">John doe</td>
                                <td>
                                <a href="#">
                                  <div class="flex flex-wrap flex-row items-center" >

                                    <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Kushtia
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 bg-green-500 rounded-full">10.05 AM</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border  border-gray-200 bg-yellow-400 rounded-full">6.00 PM</span>
                              </td>
                              <td class="text-center">01.02.2023</td>

                            </tr>

                        </tbody>
                        </table>
                    </div>

                </div>


                 {{-- <!-- select all -->
                 <script type="text/javascript">

                  </script> --}}




                      </form>
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
