<x-app-layout>

    <div x-data="{ open: true }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')




    <main class="pt-20 -mt-2">
        <div class="mx-auto p-2" >
          <!-- row -->
          <div class="flex flex-wrap flex-row" >
            <form class="flex flex-wrap flex-row -mx-4>
            <div class="flex-shrink max-w-full px-4 w-full" >
              <p class="text-xl ml-5 font-bold mt-3 mb-5">Add New Role</p>
            </div>

            <!-- Add Role -->
            <div class="flex-shrink max-w-full px-4 w-full  mb-2" >

                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-2/3 px-4 w-full" >
                           <input type="number" placeholder="Search Role" class="w-full leading-5 relative py-2 px-4 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 " id="inputamount">
                       </div>
                       <div class="flex-shrink max-w-full md:w-1/3 px-4 w-full" >
                           <button type="submit" class="py-2 px-6 inline-block text-center font-extrabold rounded mb-3 leading-5  text-white bg-indigo-400 border border-indigo-500 hover:text-gray-100 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add Role
                           </button>
                       </div>
                     </div>
                </div>
            </div>


            <!-- Permission-->
            <div class="flex-shrink max-w-full px-4 w-full" >
                <p class="text-xl font-bold mt-3 mb-5">Permission</p>
              </div>
              <!-- Dashboard-->
            <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-1" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Dashboard</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-1"">
                                Dashboard
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-1" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-1" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>
                     </div>
                </div>
            </div>

              <!-- Account-->
              <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-2" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Accounts</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-2"">
                               Daily Payments
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-2" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-2" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-3"">
                               Accounts
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-3" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-3" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-4"">
                                Cost
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-4" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-4" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-5"">
                                Add Cost
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-5" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-5" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-6"">
                              Edit  Cost
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-6" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-6" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-7"">
                              Delete  Cost
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-7" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-7" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                     </div>
                </div>
              </div>

              <!-- Logistics-->
              <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-3" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Logistics</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-8"">
                               Products
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-8" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-8" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-9"">
                               Add Products
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-9" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-9" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-10"">
                                Edit Products
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-10" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-10" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-11"">
                                Delete Products
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-11" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-11" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-12"">
                              Delivery
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-12" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-12" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-13"">
                            Add Delivery
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-13" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-13" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-14"">
                            Edit Delivery
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-14" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-14" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-15"">
                            Delete Delivery
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-15" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-15" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-16"">
                              Corporate Sell
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-16" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-16" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-17"">
                            Add Corporate Sell
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-17" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-17" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-18"">
                            Edit Corporate Sell
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-18" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-18" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-19"">
                            Delete Corporate Sell
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-19" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-19" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-20"">
                              Customers
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-20" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-20" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>





                     </div>
                </div>
              </div>

              <!-- HR Admin-->
              <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-4" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all HR Admin</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-21"">
                               Employees
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-21" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-21" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-22"">
                               Add Employee
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-22" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-22" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-23"">
                                Edit Employee
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-23" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-23" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-24"">
                                Delete Employee
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-24" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-24" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-25"">
                              Attendance
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-25" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-25" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-26"">
                            Edit Attendance
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-26" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-26" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-27"">
                            Delete Attendance
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-27" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-27" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-28"">
                              Punch
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-28" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-28" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-29"">
                            Add Punch
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-29" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-29" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-30"">
                            Leave
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-30" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-30" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-31"">
                            Add Leave
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-31" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-31" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>



                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-32"">
                              Delete Leave
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-32" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-32" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>





                     </div>
                </div>
              </div>

              <!-- Sales-->
              <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-5" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Sales</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-33"">
                               Stocks
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-33" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-33" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-34"">
                               Add Checkout
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-34" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-34" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-35"">
                                Deposit
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-35" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-35" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-36"">
                                Add Deposit
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-36" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-36" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-37"">
                                Edit Deposit
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-37" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-37" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-38"">
                                Delete Deposit
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-38" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-38" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-39"">
                              Orders
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-39" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-39" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-40"">
                            Add Orders
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-40" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-40" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-41"">
                            Edit Orders
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-41" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-41" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-42"">
                            Delete Orders
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-42" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-42" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-43"">
                                Reshuffle/Return
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-43" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-43" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-44"">
                            Add Reshuffle/Return
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-44" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-44" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-45"">
                            Expanse
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-45" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-45" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-46"">
                           Edit Expanse
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-46" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-46" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-47"">
                            Delete  Expanse
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-47" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-47" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>

                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-48"">
                            Customers
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-48" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-48" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>





                     </div>
                </div>
              </div>

              <!-- Calender-->
              <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-6" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Calender</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-49"">
                                Calender
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-49" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-49" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>
                     </div>
                </div>
            </div>

            <!-- Email-->
            <div class="flex-shrink max-w-full px-4 w-full  mb-2" >
                <div class="p-6 bg-white  rounded shadow-lg mb-2" >
                    <label for="group-7" class="inline-block bg-indigo-300 rounded-full px-3 py-1 cursor-pointer text-indigo-700 mb-2">Select all Email</label>
                    <div class="flex flex-wrap flex-row -mx-4">
                       <div class="flex-shrink max-w-full md:w-1/4 mb-2 px-4 w-full" >
                        <div class="flex justify-between mb-0 py-2 bg-gray-200 rounded-md" >
                            <label class="flex-1 ml-3 text-gray-600 font-bold cursor-pointer" for="toggle-50"">
                                Email
                            </label>
                            <div class="flex-1 text-right mb-0 mr-3" >
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle[]" id="toggle-50" class="toggle-switchbox switchbox absolute block w-6 h-6 rounded-full bg-gray-600  appearance-none cursor-pointer"/>
                                    <label for="toggle-50" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                       </div>
                     </div>
                </div>
            </div>





        </form>
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

