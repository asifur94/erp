<x-app-layout>

    <div x-data="{ open: false }" class="wrapper overflow-x-hidden bg-gray-100  " >

        @include('layouts.navigation')

    <main class="pt-20 -mt-2">
            <div class="mx-auto p-2" bis_skin_checked="1">
                <!-- row -->
                <div class="flex flex-wrap flex-row" bis_skin_checked="1">
                    <div class="flex-shrink max-w-full px-4 w-full" bis_skin_checked="1">
                        <p class="text-xl font-bold mt-3 mb-5">Sales KPI</p>
                    </div>
                </div>
      <div class="flex flex-wrap flex-row" bis_skin_checked="1">
                    <div class="flex-shrink max-w-full w-full" bis_skin_checked="1">
                        <div class="flex flex-wrap flex-row" bis_skin_checked="1">
            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" bis_skin_checked="1">
                <h3 class="text-base font-bold mb-2">Sales</h3>
                <h2 class="text-3xl font-bold mb-4">1,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" bis_skin_checked="1">
                  <div class="flex items-center" title="Target" bis_skin_checked="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> 1100
                  </div>
                  <div class="flex items-center text-green-500" bis_skin_checked="1">
                    +5%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" bis_skin_checked="1">
                  <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" bis_skin_checked="1">
                  <div class="bg-indigo-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" bis_skin_checked="1">
                <h3 class="text-base font-bold mb-2">Revenue</h3>
                <h2 class="text-3xl font-bold mb-4">$12,500</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" bis_skin_checked="1">
                  <div class="flex items-center" title="Target" bis_skin_checked="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $9,600
                  </div>
                  <div class="flex items-center text-green-500" bis_skin_checked="1">
                    +25%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" bis_skin_checked="1">
                  <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" bis_skin_checked="1">
                  <div class="bg-yellow-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" bis_skin_checked="1">
                <h3 class="text-base font-bold mb-2">Profit</h3>
                <h2 class="text-3xl font-bold mb-4">$5,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" bis_skin_checked="1">
                  <div class="flex items-center" title="Target" bis_skin_checked="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $4500
                  </div>
                  <div class="flex items-center text-green-500" bis_skin_checked="1">
                    +10%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" bis_skin_checked="1">
                  <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" bis_skin_checked="1">
                  <div class="bg-green-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
              </div>
            </div>

            <!-- target widget -->
            <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/4 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6 relative overflow-hidden" bis_skin_checked="1">
                <h3 class="text-base font-bold mb-2">Costs</h3>
                <h2 class="text-3xl font-bold mb-4">$7,200</h2>
                <!-- target -->
                <div class="flex flex-row justify-between w-full" bis_skin_checked="1">
                  <div class="flex items-center" title="Target" bis_skin_checked="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                      <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg> $6100
                  </div>
                  <div class="flex items-center text-red-500" bis_skin_checked="1">
                    -15%
                  </div>
                </div>

                <!-- bg circle -->
                <div class="absolute ltr:-right-16 rtl:-left-16 -top-16" bis_skin_checked="1">
                  <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
                <div class="absolute ltr:-right-4 rtl:-left-4 -top-24" bis_skin_checked="1">
                  <div class="bg-pink-500 opacity-10 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10" bis_skin_checked="1"></div>
                </div>
              </div>
            </div>

            <!-- Sales Revenue -->
            <div class="flex-shrink max-w-full px-4 w-full mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Sales Revenue</h3>
                  </div>
                </div>
                <div class="relative" bis_skin_checked="1">
                    <canvas class="max-w-100" id="ChartKpi" style="display: block; box-sizing: border-box; height: 672px; width: 1344px;" width="1344" height="672"></canvas>
                </div>
              </div>
            </div>

            <!-- Net profits -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Net profits</h3>
                  </div>
                </div>
                <div class="relative" bis_skin_checked="1">
                  <canvas class="max-w-100" id="BarProfit" style="display: block; box-sizing: border-box; height: 316px; width: 632px;" width="632" height="316"></canvas>
                </div>
              </div>
            </div>

            <!-- Up/Cross Sell -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Up/Cross Sell</h3>
                  </div>
                </div>
                <div class="flex flex-row" bis_skin_checked="1">
                  <div class="flex-shrink max-w-full w-1/2" bis_skin_checked="1">
                    <canvas class="max-w-100" id="Chartcross" style="display: block; box-sizing: border-box; height: 316px; width: 316px;" width="316" height="316"></canvas>
                  </div>
                  <div class="flex-shrink max-w-full w-1/2" bis_skin_checked="1">
                    <div class="text-left ml-6" bis_skin_checked="1">
                      <div class="flex flex-row items-center justify-between" bis_skin_checked="1">
                        <h3 class="semibold text-sm">Up Sell</h3>
                        <span class="text-sm text-green-500">+14%</span>
                      </div>
                      <p class="text-2xl font-bold text-indigo-500 mb-1">$6,300</p>
                      <div class="border-t border-gray-100  w-full my-2" bis_skin_checked="1"></div>
                      <div class="flex flex-row items-center justify-between" bis_skin_checked="1">
                        <h3 class="semibold text-sm">Cross Sell</h3>
                        <span class="text-sm text-red-500">-3%</span>
                      </div>
                      <p class="text-2xl font-bold text-indigo-500 mb-1">$3,400</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cost Breakdown -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Cost Breakdown</h3>
                  </div>
                </div>
                <div class="flex flex-row" bis_skin_checked="1">
                  <div class="flex-shrink max-w-full w-1/2" bis_skin_checked="1">
                    <canvas class="max-w-100" id="ChartCost" style="display: block; box-sizing: border-box; height: 316px; width: 316px;" width="316" height="316"></canvas>
                  </div>
                  <div class="flex-shrink max-w-full w-1/2" bis_skin_checked="1">
                    <div class="text-left ml-6" bis_skin_checked="1">
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" bis_skin_checked="1">
                        <h3 class="font-semibold text-sm">Marketing</h3>
                        <p class="font-semibold text-indigo-500">$3,100</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" bis_skin_checked="1">
                        <h3 class="font-semibold text-sm">Sales</h3>
                        <p class="font-semibold text-indigo-500">$2,350</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" bis_skin_checked="1">
                        <h3 class="font-semibold text-sm">Maintenance</h3>
                        <p class="font-semibold text-indigo-500">$1,260</p>
                      </div>
                      <div class="flex flex-row items-center justify-between border-b border-gray-100  py-4" bis_skin_checked="1">
                        <h3 class="font-semibold text-sm">Others</h3>
                        <p class="font-semibold text-indigo-500">$980</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Incremental Sales -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Incremental Sales</h3>
                  </div>
                </div>
                <div class="relative" bis_skin_checked="1">
                  <canvas class="max-w-100" id="ChartIncremental" style="display: block; box-sizing: border-box; height: 316px; width: 632px;" width="632" height="316"></canvas>
                </div>
              </div>
            </div>

            <!-- Sales Leaderboard -->
            <div class="flex-shrink max-w-full px-4 w-full mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex flex-row justify-between pb-3" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Sales Leaderboard</h3>
                  </div>
                </div>
                <div class="relative" bis_skin_checked="1">
                  <div class="overflow-x-auto" bis_skin_checked="1">
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
                        <tr>
                          <td class="hidden lg:table-cell">
                            <div bis_skin_checked="1">#1</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" bis_skin_checked="1">
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="src/img/avatar/avatar.png" alt="Image Description">
                              <div class="lg:ml-4" bis_skin_checked="1">
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" bis_skin_checked="1">
                                  John Thomas
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" bis_skin_checked="1">
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">8/10</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">101</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$2,860</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$860</div>
                          </td>
                        </tr>
                        <tr>
                          <td class="hidden lg:table-cell">
                            <div bis_skin_checked="1">#2</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" bis_skin_checked="1">
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="src/img/avatar/avatar2.png" alt="Image Description">
                              <div class="lg:ml-4" bis_skin_checked="1">
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" bis_skin_checked="1">
                                  Carlos Garcia
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" bis_skin_checked="1">
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">8/10</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">98</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$2,660</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$760</div>
                          </td>
                        </tr>
                        <tr>
                          <td class="hidden lg:table-cell">
                            <div bis_skin_checked="1">#3</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" bis_skin_checked="1">
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="src/img/avatar/avatar3.png" alt="Image Description">
                              <div class="lg:ml-4" bis_skin_checked="1">
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" bis_skin_checked="1">
                                  Daniel Esteban
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" bis_skin_checked="1">
                                  Target: $2,500 <span class="text-green-500">achieved</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">8/10</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">96</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$2,640</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$746</div>
                          </td>
                        </tr>
                        <tr>
                          <td class="hidden lg:table-cell">
                            <div bis_skin_checked="1">#4</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" bis_skin_checked="1">
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="src/img/avatar/avatar4.png" alt="Image Description">
                              <div class="lg:ml-4" bis_skin_checked="1">
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" bis_skin_checked="1">
                                  Steven Rey
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" bis_skin_checked="1">
                                  Target: $2,500 <span class="text-red-500">not reached</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">7/10</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">86</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$2,360</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$660</div>
                          </td>
                        </tr>
                        <tr>
                          <td class="hidden lg:table-cell">
                            <div bis_skin_checked="1">#5</div>
                          </td>
                          <td>
                            <div class="flex flex-wrap flex-row items-center" bis_skin_checked="1">
                              <img class="rounded-full shadow w-12 h-12 max-w-full border-2 border-gray-200 bg-gray-300  hidden lg:flex" src="src/img/avatar/avatar5.png" alt="Image Description">
                              <div class="lg:ml-4" bis_skin_checked="1">
                                <div class="font-bold text-gray-900  flex-shrink max-w-full mb-1" bis_skin_checked="1">
                                  Roman Davis
                                </div>
                                <div class="italic text-gray-500 flex-shrink max-w-full" bis_skin_checked="1">
                                  Target: $2,500 <span class="text-red-500">not reached</span>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">6/10</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">67</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$1,860</div>
                          </td>
                          <td>
                            <div bis_skin_checked="1">$560</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product Performance -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="p-6 bg-white  rounded-lg shadow-lg h-full" bis_skin_checked="1">
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
                          <div class="flex items-center" bis_skin_checked="1">
                            <div class="flex-shrink-0 h-10 w-10" bis_skin_checked="1">
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product1.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" bis_skin_checked="1">
                              <div class="leading-5" bis_skin_checked="1">
                                Nike Women's Race Running Shoe
                              </div>
                              <div class="text-xs leading-5 text-gray-500" bis_skin_checked="1">
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" bis_skin_checked="1">$4,345</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" bis_skin_checked="1">
                            <div class="flex-shrink-0 h-10 w-10" bis_skin_checked="1">
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product2.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" bis_skin_checked="1">
                              <div class="leading-5" bis_skin_checked="1">
                                Nike Womens Free RN Flyknit 2018
                              </div>
                              <div class="text-xs leading-5 text-gray-500" bis_skin_checked="1">
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" bis_skin_checked="1">$3,235</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" bis_skin_checked="1">
                            <div class="flex-shrink-0 h-10 w-10" bis_skin_checked="1">
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product3.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" bis_skin_checked="1">
                              <div class="leading-5" bis_skin_checked="1">
                                Nike Women's Sneaker Running Shoes
                              </div>
                              <div class="text-xs leading-5 text-gray-500" bis_skin_checked="1">
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" bis_skin_checked="1">$1,545</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#" class="hover:text-indigo-500">
                          <div class="flex items-center" bis_skin_checked="1">
                            <div class="flex-shrink-0 h-10 w-10" bis_skin_checked="1">
                              <img class="h-10 w-10 rounded-full" src="src/img/products/product4.jpg" alt="product images">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4" bis_skin_checked="1">
                              <div class="leading-5" bis_skin_checked="1">
                                Nike Women's Gymnastics Tennis Shoes
                              </div>
                              <div class="text-xs leading-5 text-gray-500" bis_skin_checked="1">
                                Women shoes
                              </div>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <div class="leading-5 text-green-700" bis_skin_checked="1">$1,045</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Sales Pipeline -->
            <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 mb-6" bis_skin_checked="1">
              <div class="bg-white  rounded-lg shadow-lg h-full p-6" bis_skin_checked="1">
                <div class="flex pb-6" bis_skin_checked="1">
                  <div class="flex flex-col" bis_skin_checked="1">
                    <h3 class="text-base font-bold">Monthly Sales Target</h3>
                  </div>
                </div>
                <div class="relative" bis_skin_checked="1">
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







    </x-app-layout>
