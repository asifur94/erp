<x-app-layout>


    <div x-data="{ open: false }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" bis_skin_checked="1">

            @include('layouts.header')







            <main class="pt-20 -mt-2">
                <div class="mx-auto p-2">
                  <!-- row -->
                  <div class="flex flex-wrap flex-row">
                    <div class="flex-shrink max-w-full px-4 w-full">
                      <p class="text-xl font-bold mt-3 mb-5">Product Detail</p>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full mb-6">
                      <div class="p-6 bg-white  rounded-lg shadow-lg h-full">
                        <div class="flex flex-wrap flex-row -mx-4">
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 text-center">
                            <div class="p-4">
                              <a href="{{asset('assets/img/blue.jpeg')}}" class="glightbox3 max-w-full w-full h-auto" data-gallery="gallery1">
                                <img src="{{asset('assets/img/blue.jpeg')}}" alt="image">
                              </a>
                              <ul class="py-4 ltr:text-left rtl:text-right">
                                <li class="inline-block">
                                  <a href="{{asset('assets/img/blue.jpeg')}}" class="glightbox3" data-gallery="gallery1">
                                    <img src="{{asset('assets/img/blue.jpeg')}}" class="w-20 h-auto ltr:mr-1 rtl:ml-1 border border-dashed"></a>
                                </li>
                                <li class="inline-block">
                                  <a href="{{asset('assets/img/blue.jpeg')}}" class="glightbox3" data-gallery="gallery1">
                                    <img src="{{asset('assets/img/blue.jpeg')}}" class="w-20 h-auto ltr:mr-1 rtl:ml-1 border border-dashed"></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-2/3">
                            <h1 class="text-2xl text-semibold mb-4">Nike Women's Race Running Shoe</h1>

                            <p class="mb-4 text-sm">Sales: 836x</p>
                            <h3 class="font-bold text-3xl text-green-600 mb-4"><span class="line-through mr-2 font-normal text-gray-500">97$</span>79$</h3>

                            <div class="flex">
                              <p class="mb-2 text-sm ltr:mr-2 rtl:ml-2">Color</p>
                              <div class="flex flex-nowrap flex-row items-center mb-4 text-sm" bis_skin_checked="1">
                                <div class="flex flex-nowrap flex-row items-center mr-3">
                                  <input class="form-checkbox text-indigo-500  h-4 w-4 border border-gray-300  ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor1" checked="">
                                  <label class="inline-block" for="procolor1">
                                   Blue
                                  </label>
                                </div>
                                <div class="flex flex-nowrap flex-row items-center mr-3">
                                  <input class="form-checkbox text-indigo-500  h-4 w-4 border border-gray-300  ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor2">
                                  <label class="inline-block" for="procolor2">
                                    Purple
                                  </label>
                                </div>
                                <div class="flex flex-nowrap flex-row items-center mr-3">
                                  <input class="form-checkbox text-indigo-500  h-4 w-4 border border-gray-300  ltr:mr-3 rtl:ml-3 rounded-full" type="radio" name="procolor" id="procolor3">
                                  <label class="inline-block" for="procolor3">
                                    Green
                                  </label>
                                </div>
                              </div>
                            </div>



                            <div class="text-sm">
                              <p class="mb-2">Brand: <a href="#" class="hover:text-indigo-500">Iphone</a></p>
                              <p class="mb-2">Category: <a href="#" class="hover:text-indigo-500">Smartphone</a></p>
                              <p class="mb-2">Stock: 178</p>
                            </div>
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full">

                            <div class="w-full pt-4" >

                                  <h2 class="text-lg font-semibold mb-2">Nike Women's Race Running Shoe</h2>
                                  <p class="mb-4">With nike renew run you can move for as long as you want, thanks to the even softer foam for maximum cushioning. Designed for everyday runners, this shoe offers secure support, traction and durability for maximum comfort on the go.</p>
                                  <h2 class="text-lg font-semibold mb-2">Spesification</h2>
                                  <ul>
                                    <li class="py-2 border-b  flex items-center justify-between"><span class="text-gray-500">Dimension:</span> 15.75 x 11.81 x 5.91 inches; 1.28 Pounds</li>
                                    <li class="py-2 border-b  flex items-center justify-between"><span class="text-gray-500">Model:</span> CK6360-100</li>
                                    <li class="py-2 border-b  flex items-center justify-between"><span class="text-gray-500">Department:</span> Women</li>
                                    <li class="py-2 border-b  flex items-center justify-between"><span class="text-gray-500">Date First Available:</span> June 29, 2021</li>
                                    <li class="py-2 border-b  flex items-center justify-between"><span class="text-gray-500">Color:</span> Blue, Green, Purple</li>
                                  </ul>
                                </div>





                              </div>



                              </div>
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
