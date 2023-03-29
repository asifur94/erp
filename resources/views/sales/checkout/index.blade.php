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
              <p class="text-xl font-bold mt-3 mb-5">Checkout</p>
            </div>

            <!-- Add Product -->
            <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <form class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-2/3 px-4 w-full" >
                           <input type="number" placeholder="Search Product" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputamount">
                       </div>
                       <div class="flex-shrink max-w-full md:w-1/3 px-4 w-full" >
                           <button type="submit" class="py-2 px-6 inline-block text-center font-extrabold rounded mb-3 leading-5  text-white bg-indigo-400 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add Product
                           </button>
                       </div>
                     </form>
                </div>
            </div>





            <div class="flex-shrink max-w-full px-4 w-full lg:w-2/4 mb-6" >
              <div class="p-6 bg-white  rounded-lg shadow-lg mb-6" >
                <div class="w-full overflow-x-auto" >
                  <div id="Accordione" x-data="{selected:0}" >
                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white " >

                      <div  >
                        <div class="flex-1 p-6 bg-gray-100  bg-opacity-60 " >
                          <form class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full px-4 w-full  mb-6" >
                              {{-- <label for="inputname" class="inline-block mb-2">Name</label> --}}
                              <input type="text" placeholder="Enter Name" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputname">
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full  mb-6" >

                                <input type="number" placeholder="Mobile Number" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputnumber">
                              </div>


                            <div class="flex-shrink max-w-full px-4 w-full mb-6" >

                              <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputAddress" placeholder="1234 Main St">
                            </div>

                            <!-- cash section -->
                            <div class="flex-shrink max-w-full px-4 w-full  " >
                                <div class="flex " >
                                    <label class="py-3  px-4 cursor-pointer ">
                                      <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="paymentMethod" value="cash" checked="">
                                      <span class="ltr:ml-2 rtl:mr-2">Cash</span>
                                    </label>
                                    <label class="py-3   px-4  cursor-pointer mb-3">
                                      <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="paymentMethod" value="credit">
                                      <span class="ltr:ml-2 rtl:mr-2">Credit/Debit Card</span>
                                    </label>
                                    <label class="py-3 px-4 cursor-pointer mb-3">
                                      <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="paymentMethod" value="bank">
                                      <span class="ltr:ml-2 rtl:mr-2">Mobile Banking</span>
                                    </label>
                                  </div>



                            </div>
                            <div class="flex-shrink max-w-full md:w-2/3 px-4 w-full mb-6" >

                                <input type="number" placeholder="Enter Amount" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputamount">
                            </div>
                            <div class="flex-shrink max-w-full md:w-1/3 px-4 w-full mb-6" >

                                <input type="number" placeholder="Discount" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputamount">
                            </div>


                             <!-- Gift section -->
                            <div class="flex-shrink max-w-full md:w-2/3 px-4 w-full mb-6" >

                                <input type="number" placeholder="Gift Name" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputamount">
                            </div>
                            <div class="flex-shrink max-w-full md:w-1/3 px-4 w-full mb-6" >

                                <button type="submit" class="py-2 px-6 inline-block text-center font-extrabold rounded mb-3 leading-5  text-white bg-indigo-400 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add Gift

                                </button>
                            </div>



                            {{-- <div class="flex-shrink max-w-full px-4 w-full" >
                              <button type="submit" class="py-2 px-5 inline-block text-center rounded mb-3 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                              </svg></button>
                            </div> --}}
                          </form>
                        </div>
                      </div>
                    </div>

                    <!-- list -->
                    <div class="relative flex flex-wrap flex-col shadow mb-4 bg-white " >
                      <div class="py-2 px-4 border-b border-gray-200 mb-0 bg-gray-100 " id="HeadingTwoe" >
                        <div class="d-grid mb-0" >
                          <button class="py-4 px-0 w-full rounded-md leading-5 font-medium flex justify-between focus:outline-none focus:ring-0" @click="selected !== 1 ? selected = 1 : selected = null">
                            <span class="font-bold">Step 2: Shipping info</span>
                            <span>
                              <svg class="transform transition duration-500" :class="{ '-rotate-180': selected == 1 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                      <div id="CollapseTwoe" x-show="selected == 1"  style="display: none;">
                        <div class="flex-1 p-6 bg-gray-100  bg-opacity-60 " >


                          <p class="mb-3 font-semibold">Shipping Method</p>
                          <div class="flex flex-wrap flex-row mb-6 text-gray-700" >
                            <label class="p-3 bg-green-100 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                              <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="shippingMethod" value="free" checked="">
                              <span class="ltr:ml-2 rtl:mr-2">Free</span>
                              <h5 class="mt-3 mb-1 font-semibold">Standart</h5>
                              <p class="text-gray-500">0$</p>
                            </label>
                            <label class="p-3 bg-green-200 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                              <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="shippingMethod" value="standart">
                              <span class="ltr:ml-2 rtl:mr-2">Express</span>
                              <h5 class="mt-3 mb-1 font-semibold">Ninja Express</h5>
                              <p class="text-gray-500">+12$</p>
                            </label>
                            <label class="p-3 bg-green-300 flex-shrink max-w-full px-4 w-full md:w-1/3 cursor-pointer">
                              <input type="radio" class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  focus:outline-none rounded-full" name="shippingMethod" value="express">
                              <span class="ltr:ml-2 rtl:mr-2">Express One Day</span>
                              <h5 class="mt-3 mb-1 font-semibold">Super Express</h5>
                              <p class="text-gray-500">+25$</p>
                            </label>
                          </div>
                          <div class="flex-shrink max-w-full w-full" >
                            <button type="submit" class="py-2 px-5 mb-3 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg></button>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <div class="flex-shrink max-w-full px-4 w-full lg:w-2/4 mb-6" >
              <div class="p-6 bg-white  rounded shadow-lg mb-6" >
                <div class="relative" >
                  <table class="table-auto w-full ltr:text-left rtl:text-right text-gray-600">
                    <thead class="border-b ">
                      <tr class="bg-gray-100 ">
                        <th class="p-4 font-normal">Products</th>
                        <th class="p-4 font-normal">Pricing</th>
                      </tr>
                    </thead>
                    <tbody class="bg-gray-100  bg-opacity-60  text-sm">
                      <tr class="border-b ">
                        <td class="p-4 font-normal">
                          <a href="#">
                            <div class="flex flex-wrap flex-row items-center" >
                              <div class="self-center" ><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}"></div>
                              <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                               <p>Nike Unisex-Child Free Rn (Big Kid)</p>
                               <p>SKU:3652837498274</p>
                              </div>
                            </div>
                          </a>
                        </td>
                        <td class="p-4 font-normal text-center">80$</td>
                      </tr>
                      <tr class="border-b ">
                        <td class="p-4 font-normal">
                          <a href="#">
                            <div class="flex flex-wrap flex-row items-center" >
                              <div class="self-center" ><img class="h-8 w-8" src="{{asset('assets/img/blue.jpeg')}}"></div>
                              <div class="leading-5  flex-1 ltr:ml-2 rtl:mr-2 mb-1" >
                                <p>Nike Unisex-Child Free Rn (Big Kid)</p>
                               <p>SKU:3652837498274</p>
                              </div>
                            </div>
                          </a>
                        </td>
                        <td class="p-4 font-normal text-center">70$</td>
                      </tr>
                    </tbody>
                    <tfoot class="bg-gray-100  bg-opacity-60  text-sm">
                      <tr class="border-b ">
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left"><b>Sub-Total</b></td>
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">$290</td>
                      </tr>
                      <tr class="border-b ">
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left"><b>Discount</b></td>
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">15%</td>
                      </tr>
                      <tr class="border-b ">
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left"><b>Total</b></td>
                        <td class="p-4 font-normal text-center ltr:text-right rtl:text-left totals">$258,8</td>
                      </tr>
                    </tfoot>
                  </table>

                </div>
              </div>
              <div class="flex-shrink max-w-full text-center px-4 w-full" >
                <button type="submit" class="py-4 px-40 inline-block text-center font-extrabold rounded mb-3 leading-5  text-white bg-indigo-400 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Purchase

                </button>
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
