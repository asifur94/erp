<x-app-layout>

    <div x-data="{ open: false }" class="overflow-hidden bg-gray-100  " >

        @include('layouts.navigation')



        <div x-bind:aria-expanded="open" :class="{ 'ml-0 mr-0 md:ml-20 md:mr-0': open, 'ml-0 mr-0 md:ml-64': !(open) }" class="min-h-screen relative mt-2 transition-all duration-500 ease-in-out ml-0 mr-0 md:ml-20 md:mr-0" aria-expanded="true" >

            @include('layouts.header')



            <main class="u-min-h-screen pt-20 -mt-2">
                <div class="flex flex-row h-screen overflow-hidden">
                    <!-- Chat sidebar -->
                    <div class="hidden lg:flex lg:flex-col flex-shrink-0 w-80 border-r border-gray-200">
                      <div class="h-20 px-6 flex justify-between items-center bg-white border-b border-gray-200">
                        <div class="text-lg font-medium">Chats</div>
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="Close sidebar">
                          <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 3.29289C20.0976 3.68342 20.0976 4.31658 19.7071 4.70711L4.70711 19.7071C4.31658 20.0976 3.68342 20.0976 3.29289 19.7071C2.90237 19.3166 2.90237 18.6834 3.29289 18.2929L18.2929 3.29289C18.6834 2.90237 19.3166 2.90237 19.7071 3.29289Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L4.70711 3.29289C4.31658 2.90237 3.68342 2.90237 3.29289 3.29289C2.90237 3.68342 2.90237 4.31658 3.29289 4.70711L18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071Z"/>
                          </svg>
                        </button>
                      </div>
                      <div class="flex-1 overflow-y-auto">
                        <div class="px-6 py-4">
                          <input type="text" class="block w-full rounded-lg py-2 px-3 border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:border-blue-500" placeholder="Search chats">
                        </div>
                        <div class="divide-y divide-gray-200">
                          <div class="px-6 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                            <img class="h-10 w-10 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1578324161717-5f9a07e3b77e" alt="User avatar">
                            <div class="w-full">
                              <div class="flex items-center justify-between">
                                <div class="font-medium">John Smith</div>
                                <div class="text-sm text-gray-500">3 days ago</div>
                              </div>
                              <div class="truncate mt-1 w-full">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                              </div>
                            </div>
                          </div>
                          <div class="px-6 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                            <img class="h-10 w-10 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1587614383475-d60b7cd0c8e6" alt="User avatar">
                            <div class="w-full">
                              <div class="flex items-center justify-between">
                                <div class="font-medium">Jane Doe</div>
                                <div class="text-sm text-gray-500">2 days ago</div>
                              </div>
                              <div class="truncate mt-1 w-full">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                              </div>
                            </div>
                          </div>
                          <div class="px-6 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                            <img class="h-10 w-10 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1616628617846-7e1e0" alt="User avatar">
                            <div class="w-full">
                              <div class="flex items-center justify-between">
                                <div class="font-medium">Alex Johnson</div>
                                <div class="text-sm text-gray-500">1 day ago</div>
                              </div>
                              <div class="truncate mt-1 w-full">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Chat window -->
                    <div class="flex-1 flex flex-col bg-white overflow-hidden">
                      <!-- Chat header -->
                      <div class="border-b border-gray-200 h-20 bg-white px-6 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                          <img src="https://images.unsplash.com/photo-1578324161717-5f9a07e3b77e" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                          <div class="flex flex-col">
                            <div class="text-lg font-medium">John Smith</div>
                            <div class="text-sm text-gray-500">Active now</div>
                          </div>
                        </div>
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="Close conversation">
                          <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 3.29289C20.0976 3.68342 20.0976 4.31658 19.7071 4.70711L4.70711 19.7071C4.31658 20.0976 3.68342 20.0976 3.29289 19.7071C2.90237 19.3166 2.90237 18.6834 3.29289 18.2929L18.2929 3.29289C18.6834 2.90237 19.3166 2.90237 19.7071 3.29289Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L4.70711 3.29289C4.31658 2.90237 3.68342 2.90237 3.29289 3.29289C2.90237 3.68342 2.90237 4.31658 3.29289 4.70711L18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071Z"/>
                          </svg>
                        </button>
                      </div>

                      <!-- Chat messages -->
                      <div class="flex-1 overflow-y-auto px-6 py-4">
                        <div class="flex flex-col space-y-4">
                          <div class="flex items-center space-x-3">
                            <img src="https://images.unsplash.com/photo-1578324161717-5f9a07e3b77e" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                            <div class="flex flex-col">
                              <div>
                                <span class="font-medium">John Smith</span>
                                <span class="text-sm text-gray-500 ml-1">3 days ago</span>
                              </div>
                              <div class="bg-blue-100 p-2 rounded-lg mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                              </div>
                            </div>
                          </div>

                          <div class="flex items-center space-x-3">
                            <img src="https://images.unsplash.com/photo-1578324161717-5f9a07e3b77e" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                            <div class="flex flex-col">
                              <div>
                                <span class="font-medium">John Smith</span>
                                <span class="text-sm text-gray-500 ml-1">Yesterday</span>
                              </div>
                              <div class="bg-blue-100 p-2 rounded-lg mt-1">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.
                              </div>
                            </div>
                          </div>
                          <div class="flex items-center justify-end space-x-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                            </div>
                            <img src="https://images.unsplash.com/photo-1587614383475-d60b7cd0c8e6" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                          </div>
                          <div class="flex items-center space-x-3">
                            <img src="https://images.unsplash.com/photo-1578324161717-5f9a07e3b77e" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                            <div class="flex flex-col">
                              <div>
                                <span class="font-medium">John Smith</span>
                                <span class="text-sm text-gray-500 ml-1">Today at 12:30 PM</span>
                              </div>
                              <div class="bg-blue-100 p-2 rounded-lg mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                              </div>
                            </div>
                          </div>
                          <div class="flex items-center justify-end space-x-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                            </div>
                            <img src="https://images.unsplash.com/photo-1587614383475-d60b7cd0c8e6" alt="User avatar" class="h-10 w-10 rounded-full object-cover">
                          </div>
                        </div>
                      </div>

                      <!-- Chat input -->
                      <form class="border-t border-gray-200 px-6 py-4">
                        <div class="flex space-x-3">
                          <div class="flex-1 min-w-0">
                            <label for="message" class="sr-only">Write a message</label>
                            <textarea id="message" name="message" rows="3" class="block w-full rounded-md bg-gray-100 border-transparent focus:border-blue-500 focus:bg-white focus:ring-0"></textarea>
                          </div>
                          <button type="submit" class="inline-flex items-center justify-center h-12 px-6 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Send
                          </button>
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
