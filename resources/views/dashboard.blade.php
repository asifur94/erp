<x-app-layout>

    <div x-data="{ open: false }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')



<main class="pt-20 -mt-2">
            <div class="mx-auto p-2" >
                <!-- row -->
                <div class="flex flex-wrap flex-row" >
                    <div class="flex-shrink max-w-full px-4 w-full" >
                        <p class="text-xl font-bold mt-3 mb-5">Sales</p>
                    </div>
                </div>
      <div class="flex flex-wrap flex-row" >
                    <div class="flex-shrink max-w-full w-full" >
                        <div class="flex flex-wrap flex-row" >
            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" >
                <h3 class="text-base font-bold mb-2">Sales</h3>
                <h2 class="text-3xl font-bold mb-4">1,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" >
                  <div class="flex items-center" title="Target" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> 1100
                  </div>
                  <div class="flex items-center text-green-500" >
                    +5%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" >
                  <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" >
                  <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" >
                <h3 class="text-base font-bold mb-2">Expanse</h3>
                <h2 class="text-3xl font-bold mb-4">$12,500</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" >
                  <div class="flex items-center" title="Target" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $9,600
                  </div>
                  <div class="flex items-center text-green-500" >
                    +25%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" >
                  <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" >
                  <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" >
                <h3 class="text-base font-bold mb-2">Deposit</h3>
                <h2 class="text-3xl font-bold mb-4">$5,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" >
                  <div class="flex items-center" title="Target" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $4500
                  </div>
                  <div class="flex items-center text-green-500" >
                    +10%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" >
                  <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" >
                  <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" >
                <h3 class="text-base font-bold mb-2">Profit</h3>
                <h2 class="text-3xl font-bold mb-4">$7,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" >
                  <div class="flex items-center" title="Target" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $6100
                  </div>
                  <div class="flex items-center text-red-500" >
                    -15%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" >
                  <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" >
                  <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" ></div>
                </div>
              </div>
            </div>

            {{-- <div class="flex flex-wrap flex-row" bis_skin_checked="1"> --}}
            <!-- Sales Revenue -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-2/4 mb-6" >
                <div class="p-6 bg-white  rounded-lg shadow-lg h-full" >
                    <div class="flex flex-row justify-between pb-6" >
                        <div class="flex flex-col" >
                      <h3 class="text-base font-bold">Revenue</h3>
                      <span class="text-gray-500 font-semibold text-sm">Today's Earning: <span class="text-green-500">$1,570.30</span></span>
                        </div>
                  </div>
                    <div class="relative" >
                        <canvas class="max-w-100" id="LineChart" style="display: block; box-sizing: border-box; height: 349px; width: 698px;" width="698" height="349"></canvas>
                    </div>
                </div>
            </div>


            <!-- Cost Breakdown -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" >
                <div class="flex pb-6" >
                  <div class="flex flex-col" >
                    <h3 class="text-base font-bold">Cost Breakdown</h3>
                  </div>
                </div>
                <div class="flex flex-row" >
                  <div class="flex-shrink max-w-full w-1/2" >
                    <canvas class="max-w-100" id="ChartCost" style="display: block; box-sizing: border-box; height: 316px; width: 316px;" width="316" height="316"></canvas>
                  </div>
                  <div class="flex-shrink max-w-full w-1/2" >
                    <div class="text-left ml-6" >
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" >
                        <h3 class="font-semibold text-sm">Marketing</h3>
                        <p class="font-semibold text-indigo-500">$3,100</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" >
                        <h3 class="font-semibold text-sm">Sales</h3>
                        <p class="font-semibold text-indigo-500">$2,350</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" >
                        <h3 class="font-semibold text-sm">Maintenance</h3>
                        <p class="font-semibold text-indigo-500">$1,260</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" >
                        <h3 class="font-semibold text-sm">Others</h3>
                        <p class="font-semibold text-indigo-500">$980</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- Sales Leaderboard -->
            <div class="flex-shrink max-w-full px-4 w-full mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" >
                <div class="flex flex-row justify-between pb-3" >
                  <div class="flex flex-col" >
                    <h3 class="text-base font-bold">Sales Leaderboard</h3>
                  </div>
                </div>
                <div class="relative" >
                  <div class="overflow-x-auto" >
                    <table class="table-bordered-bottom table-sm w-full ltr:text-left rtl:text-right text-sm">
                      <thead>
                        <tr>
                          <th class="hidden lg:block">Rank</th>
                          <th>Name</th>
                          <th>Activity</th>
                          <th>Sales</th>
                          <th>Revenue</th>
                          <th>Profit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-center">
                          <td class="hidden lg:table-cell">
                            <div >#1</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" >
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="{{asset('assets/img/profile.png')}}" alt="Image Description">
                              <div class="lg:ml-2" >
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" >
                                  John Thomas
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" >
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div >8/10</div>
                          </td>
                          <td>
                            <div >101</div>
                          </td>
                          <td>
                            <div >$2,860</div>
                          </td>
                          <td>
                            <div >$860</div>
                          </td>
                        </tr >
                        <tr class="text-center">
                          <td class="hidden lg:table-cell">
                            <div >#2</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" >
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="{{asset('assets/img/profile.png')}}" alt="Image Description">
                              <div class="lg:ml-4" >
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" >
                                  Carlos Garcia
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" >
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div >8/10</div>
                          </td>
                          <td>
                            <div >98</div>
                          </td>
                          <td>
                            <div >$2,660</div>
                          </td>
                          <td>
                            <div >$760</div>
                          </td>
                        </tr>
                        <tr class="text-center">
                          <td class="hidden lg:table-cell">
                            <div >#3</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" >
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="{{asset('assets/img/profile.png')}}" alt="Image Description">
                              <div class="lg:ml-4" >
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" >
                                  Daniel Esteban
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" >
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div >8/10</div>
                          </td>
                          <td>
                            <div >96</div>
                          </td>
                          <td>
                            <div >$2,640</div>
                          </td>
                          <td>
                            <div >$746</div>
                          </td>
                        </tr>
                        <tr class="text-center">
                          <td class="hidden lg:table-cell">
                            <div >#4</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" >
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="{{asset('assets/img/profile.png')}}" alt="Image Description">
                              <div class="lg:ml-4" >
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" >
                                  Steven Rey
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" >
                                  Target: $2,500 <span class="text-red-500">not reached</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div >7/10</div>
                          </td>
                          <td>
                            <div >86</div>
                          </td>
                          <td>
                            <div >$2,360</div>
                          </td>
                          <td>
                            <div >$660</div>
                          </td>
                        </tr>
                        <tr class="text-center">
                          <td class="hidden lg:table-cell">
                            <div >#5</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" >
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="{{asset('assets/img/profile.png')}}" alt="Image Description">
                              <div class="lg:ml-4" >
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" >
                                  Roman Davis
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" >
                                  Target: $2,500 <span class="text-red-500">not reached</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div >6/10</div>
                          </td>
                          <td>
                            <div >67</div>
                          </td>
                          <td>
                            <div >$1,860</div>
                          </td>
                          <td>
                            <div >$560</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product Performance -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" >
              <div class="p-6 bg-white  rounded-lg shadow-lg h-full" >
                <table class="table-sm text-sm ltr:text-left rtl:text-right w-full">
                  <thead>
                    <tr class="border-b ">
                      <th>
                        <p class="text-base font-bold">Product Performance</p>
                      </th>
                      <th>
                        Sales
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" >
                            <div class="flex-shrink-0 h-10 w-10" >
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product1.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" >
                              <div class="leading-5" >
                                Nike Women's Race Running Shoe
                              </div>
                              <div class="text-xs leading-5 text-gray-500" >
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" >$4,345</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" >
                            <div class="flex-shrink-0 h-10 w-10" >
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product2.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" >
                              <div class="leading-5" >
                                Nike Womens Free RN Flyknit 2018
                              </div>
                              <div class="text-xs leading-5 text-gray-500" >
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" >$3,235</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" >
                            <div class="flex-shrink-0 h-10 w-10" >
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product3.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" >
                              <div class="leading-5" >
                                Nike Women's Sneaker Running Shoes
                              </div>
                              <div class="text-xs leading-5 text-gray-500" >
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" >$1,545</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" >
                            <div class="flex-shrink-0 h-10 w-10" >
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product4.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" >
                              <div class="leading-5" >
                                Nike Women's Gymnastics Tennis Shoes
                              </div>
                              <div class="text-xs leading-5 text-gray-500" >
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" >$1,045</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Sales Pipeline -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" >
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" >
                <div class="flex pb-6" >
                  <div class="flex flex-col" >
                    <h3 class="text-base font-bold">Monthly Sales Target</h3>
                  </div>
                </div>
                <div class="relative" >
                  <canvas class="max-w-100" id="ChartTarget" style="display: block; box-sizing: border-box; height: 316px; width: 632px;" width="632" height="316"></canvas>
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
