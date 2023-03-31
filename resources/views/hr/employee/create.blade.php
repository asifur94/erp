<x-app-layout>


    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')







            <main class="pt-20 -mt-2">
                <div class="mx-auto p-2">
                  <!-- row -->
                  <div class="flex flex-wrap flex-row">
                    <div class="flex-shrink max-w-full px-4 w-full">
                      <p class="text-xl font-bold mt-3 mb-5">Add Employee</p>
                    </div>
                    <div class="flex-1 p-6 bg-gray-100  bg-opacity-60 " >
                        <form class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                                <label  class="inline-block mb-2">First Name</label>
                                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                                <label  class="inline-block mb-2">Last Name</label>
                                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            </div>
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                                <label  class="inline-block mb-2">Position</label>
                                <select  class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0  select-caret appearance-none">
                                  <option selected="">Choose...</option>
                                  <option value="Admin">Admin</option>
                                  <option value="Accounts">Accounts</option>
                                  <option value="Logistics">Logistics</option>
                                  <option value="HR">HR</option>
                                  <option value="Executive">Executive</option>
                                  <option value="Manager">Manager</option>
                                  <option value="Others">Others</option>
                                </select>
                              </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Image</label>
                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 ">
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Gender</label>
                            <select  class="inline-block w-full leading-5 relative py-2 pl-3 pr-8 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0  select-caret appearance-none">
                              <option selected="">Choose...</option>
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Number</label>
                            <input type="number" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full  mb-6" >
                            <label  class="inline-block mb-2">Salary</label>
                            <input type="number" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full  mb-6" >
                            <label  class="inline-block mb-2">Description</label>
                            <input type="text" class="w-full leading-5 relative py-6 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 ">
                          </div>


                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >
                            <label  class="inline-block mb-2">Email</label>
                            <input type="email" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >
                            <label  class="inline-block mb-2">Birth Date</label>
                            <input type="date" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/3 mb-6" >
                            <label  class="inline-block mb-2">Join Date</label>
                            <input type="date" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Present Address</label>
                            <input type="address" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Permanamt Address</label>
                            <input type="address" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                          </div>

                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Experience</label>
                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            <a href="" class="py-2 mt-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ml-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                                </svg>
                            </a>
                          </div>
                          <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 mb-6" >
                            <label  class="inline-block mb-2">Education</label>
                            <input type="text" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " >
                            <a href="" class="py-2 mt-2 px-4 mb-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add new
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ml-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                                </svg>
                            </a>
                          </div>


                          <div class="flex-shrink text-center max-w-full px-4 w-full" >
                            <button type="submit" class="py-3 px-20 inline-block text-center rounded mb-3 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Continue
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block ltr:ml-2 rtl:mr-2 bi bi-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                            </button>
                          </div>
                        </form>
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
