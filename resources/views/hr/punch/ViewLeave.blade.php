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
              <p class="text-xl font-bold mt-3 mb-5">Leave</p>
            </div>




        <!-- Table -->
            <div class="flex-shrink max-w-full px-4 w-full mb-6" >
              <div class="p-6 bg-white  rounded-lg shadow-lg h-full" >
                <div class="flex flex-wrap flex-row -mx-4" >
                  <div class="flex-shrink max-w-full px-4 w-full" >
                    <div class="md:flex md:justify-between" >
                      <div >
                        <a href="AddLeave" class="py-2 text-xl px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                            Add Leave
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
                                    <a href="#" class="dataTable-sorter">Leave</a>
                                </th>
                                <th class="hidden lg:table-cell" data-sortable="" style="width: 17.6633%;">
                                    <a href="#" class="dataTable-sorter">Status</a>
                                </th>
                                <th class="hidden lg:table-cell" data-sortable="" style="width: 17.6633%;">
                                    <a href="#" class="dataTable-sorter">Date</a>
                                </th>
                                <th class="text-center" data-sortable="" style="width: 10.1196%;">
                                    <a href="#" class="dataTable-sorter">Action</a>
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
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200  rounded-full">Full Day</span>
                                </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight border border-gray-200 rounded-full">Approve</span>
                              </td>
                              <td class="text-center">01.02.2023</td>
                              <td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>

                              </td>
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
