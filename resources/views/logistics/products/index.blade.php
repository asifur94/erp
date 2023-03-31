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
              <p class="text-xl font-bold mt-3 mb-5">Manage Products</p>
            </div>

            <div class="mb-4 px-4 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4 w-full" >
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white"><path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path><path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd"></path><path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-right" >
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Stock</p>
                        <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">53</h4>
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
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">In Shop</p>
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
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Sell</p>
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
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Delivery</p>
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
              <div class="p-6 bg-white rounded-lg shadow-lg h-full" >
                <div class="flex flex-wrap flex-row -mx-4" >
                  <div class="flex-shrink max-w-full px-4 w-full" >
                    <div class="md:flex md:justify-between" >
                      <div >
                        <a href="{{ 'AddProduct' }}" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                          <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                        </svg></a>
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
                                <a href="#" class="dataTable-sorter">Products</a>
                              </th>

                              <th class="hidden lg:table-cell" data-sortable="" style="width: 11.3866%;">
                                <a href="#" class="dataTable-sorter">Update</a>
                              </th>
                              <th data-sortable="" style="width: 9.27456%;">
                                <a href="#" class="dataTable-sorter">Pricing</a>
                              </th>
                              <th class="hidden lg:table-cell" data-sortable="" style="width: 6.51974%;">
                                <a href="#" class="dataTable-sorter">Qty</a>
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
                                <a href="{{ 'product' }}">
                                  <div class="flex flex-wrap flex-row items-center" >
                                    <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}"></div>
                                    <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                      Nike Women's Race Running Shoe
                                      <div class="pt-1 text-sm italic text-gray-500 w-full">
                                        Women Shoes
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">27/05/2022</td>
                              <td class="text-center">
                                <span class="line-through mr-2">$97</span>
                                <span class="text-green-500">79$</span>
                              </td>
                              <td class="text-center hidden lg:table-cell">1256</td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                              <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">20/05/2022</td>
                              <td class="text-center">$87</td>
                              <td class="text-center hidden lg:table-cell">568</td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                              <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">18/05/2022</td>
                              <td class="text-center">$77</td>
                              <td class="text-center hidden lg:table-cell">999</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                                <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">18/05/2022</td>
                              <td class="text-center">$97</td>
                              <td class="text-center hidden lg:table-cell">0</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full">Not active</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                                <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">18/05/2022</td>
                              <td class="text-center">$97</td>
                              <td class="text-center hidden lg:table-cell">56</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                              <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">18/05/2022</td>
                              <td class="text-center">$97</td>
                              <td class="text-center hidden lg:table-cell">0</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-pink-700 bg-pink-100 rounded-full">Out stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                                <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">18/05/2022</td>
                              <td class="text-center">$97</td>
                              <td class="text-center hidden lg:table-cell">56</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                                <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td><td class="hidden lg:table-cell">17/05/2022</td>
                              <td class="text-center"><span class="line-through mr-2">$97</span>
                                <span class="text-green-500">79$</span></td>
                              <td class="text-center hidden lg:table-cell">6</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Low stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                                <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">10/05/2022</td>
                              <td class="text-center">$87</td>
                              <td class="text-center hidden lg:table-cell">56</td>
                              <td class="hidden lg:table-cell"><span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
                            <tr>
                              <td>
                                <input type="checkbox" class="checkedall form-checkbox w-4 h-4 text-indigo-500 border border-gray-300 rounded"></td>
                              <td>
                                <a href="{{ 'product' }}">
                                    <div class="flex flex-wrap flex-row items-center" >
                                        <div class="self-center"><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}">
                                        </div>
                                        <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                          Nike Women's Race Running Shoe
                                          <div class="pt-1 text-sm italic text-gray-500 w-full">
                                            Women Shoes
                                          </div>
                                        </div>
                                      </div>
                                </a>
                              </td>
                              <td class="hidden lg:table-cell">08/05/2022</td>
                              <td class="text-center">$97</td>
                              <td class="text-center hidden lg:table-cell">56</td>
                              <td class="hidden lg:table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">In stock</span></td>
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
