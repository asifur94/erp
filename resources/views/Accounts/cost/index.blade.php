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
              <p class="text-xl font-bold mt-3 mb-5">Cost</p>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full mb-6" >
              <div class="p-6 bg-white rounded-lg shadow-lg h-full" >
                <div class="flex flex-wrap flex-row -mx-4" >
                  <div class="flex-shrink max-w-full px-4 w-full" >
                    <div class="md:flex md:justify-between" >
                      <div >
                        <a href="{{ 'AddCost' }}" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                        </svg></a>
                      </div>

                      <div >
                        <a href="" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Cash <span>2000$</span> </a>
                      </div>

                      <div >
                        <div id="bulk-actions" >
                          <label class="flex flex-wrap flex-row">
                            <select id="bulk_actions" name="bulk_actions" class="inline-block leading-5 relative py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mb-3 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                              <option>Action</option>
                              <option value="activate">In stock</option>
                              <option value="deactivate">Deactivate</option>
                              <option value="out">Out stock</option>
                              <option value="delete">Delete</option>
                            </select>
                            <input type="submit" id="bulk_apply" class="ltr:ml-2 rtl:mr-2 py-2 px-4 inline-block text-center mb-3 rounded leading-5 border hover:bg-gray-300 focus:outline-none focus:ring-0 cursor-pointer" value="Apply">
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="w-full mb-6 overflow-x-auto" >
                      <form action="">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns" >
                            <div class="dataTable-top" >
                                <div class="dataTable-dropdown" >
                                    <label>
                                        <select class="dataTable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page
                                    </label>
                                </div>
                                <div class="dataTable-search" >
                                    <input class="dataTable-input" placeholder="Search..." type="text">
                                  </div>
                            </div>
                                <div class="dataTable-container" >
                                  <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dataTable-table">
                          <thead>
                            <tr class="bg-gray-100">
                              <th data-sortable="false" style="width: 4.22406%;">
                                <input id="check_all" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded">
                              </th>
                              <th data-sortable="" style="width: 49.4031%;">
                                <a href="#" class="dataTable-sorter">Purpose</a>
                              </th>

                              <th class="hidden lg:table-cell" data-sortable="" style="width: 11.3866%;">
                                <a href="#" class="dataTable-sorter">Date</a>
                              </th>
                              <th data-sortable="" style="width: 9.27456%;">
                                <a href="#" class="dataTable-sorter">Amount</a>
                              </th>
                              <th class="hidden lg:table-cell" data-sortable="" style="width: 6.51974%;">
                                <a href="#" class="dataTable-sorter">Evidence</a>

                              </th>
                              <th class="hidden lg:table-cell" data-sortable="" style="width: 10.8356%;">
                                <a href="#" class="dataTable-sorter">Status</a>
                              </th>
                              <th data-sortable="false" style="width: 8.35629%;">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded">
                              </td>
                                <td>
                                <a href="">
                                  <div class="flex flex-wrap flex-row items-center" >
                                    <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                     Entertainment
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">27/05/2022</td>
                              <td class="text-center">
                                <span class="line-through mr-2">$97</span>
                              </td>
                              <td class="text-center hidden lg:table-cell">
                                <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                </div>
                              </td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Approve</span>
                              </td>
                              <td class="text-center">
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                  </svg>
                                </a>
                                <a href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                  </svg>
                                </a>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                     <!--Pagination-->
        <div class="flex mt-10 items-center justify-between">
            <p class="min-w-max text-gray-600">
                Showing Results 10 of 128
            </p>
            <div class="min-w-max flex gap-2 items-center">
                <button class="w-8 h-8 rotate-180 bg-white flex items-center justify-center"><img
                        src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                <p
                    class="w-8 h-8 bg-white border border-gray-100 flex items-center justify-center text-blue-600 text-[10px]">
                    10</p>
                <p class="text-xs text-gray-600">of 128</p>
                <button class="w-8 h-8 bg-white flex items-center justify-center"><img
                        src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
            </div>
        </div>
                    </div>

                        <!-- select all -->
                        <script type="text/javascript">
                          const selectall = document.querySelector("#check_all");
                          if ( selectall != null) {
                            selectall.addEventListener("click", function(){
                              if (document.querySelector("#check_all").checked == true) {
                                var ele=document.querySelectorAll('.checkedall');
                                for(var i=0; i<ele.length; i++){
                                    if(ele[i].type=='checkbox')
                                        ele[i].checked=true;
                                }
                              } else {
                                var ele=document.querySelectorAll('.checkedall');
                                for(var i=0; i<ele.length; i++){
                                    if(ele[i].type=='checkbox')
                                        ele[i].checked=false;

                                }
                              }
                            });
                          }
                        </script>
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
