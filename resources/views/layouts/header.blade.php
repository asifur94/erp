<nav :class="{ 'left-0 right-0 md:left-20 md:right-0': open, 'left-0 right-0 md:left-64': !(open) }" class="z-20 fixed mt-0 transition-all duration-500 ease-in-out left-0 right-0 md:left-20 md:right-0" id="desktop-menu">
    <div class="py-4 md:py-2 flex flex-row flex-nowrap items-center justify-between bg-white  shadow-lg shadow-cyan-100/10  px-6" >
      <div class="flex" >
        <!-- sidenav button-->
        <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600  focus:outline-none focus:ring-0" aria-controls="sidebar-menu" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
            <span class="sr-only">Mobile menu</span>
            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="h-8 w-8 block" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
              <path class="hidden md:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
              <path class="md:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
            </svg>

            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="h-8 w-8 hidden" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
              <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
              <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
            </svg>
            <!-- <i class="text-2xl fas fa-bars"></i> -->
          </button>

        <!-- Search -->
        <form class="hidden md:inline-block md:ml-4">
          <div class="flex flex-wrap items-stretch w-full relative" >
            <input type="text" class="flex-shrink flex-grow max-w-full leading-5 relative text-sm w-48 py-2 pl-10 pr-4 rounded text-slate-800 bg-slate-50 overflow-x-auto focus:outline-none border border-slate-100 focus:border-slate-200 focus:ring-0 " placeholder="Search…" aria-label="Search">
            <div class="absolute left-0 -ml-px" >
              <button class="flex items-center py-2 px-4 -ml-1 rounded-r leading-5 text-slate-500 hover:ring-0 focus:outline-none focus:ring-0" type="button">
                <i class="text-xl bx bx-search-alt"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <a class="flex flex-row items-center mr-4 md:hidden" href="#">
        <img class="w-6 h-6 mr-1.5" alt="Logo" src="src/img/logo/logo11.png">
        <span class="text-2xl font-bold">ERP</span>
      </a>

      <!-- Time-->
      <div id="clock" class=" text-center text-lg font-bold"></div>
      <div id="datetime" class="text-center text-4xl font-bold mb-4"></div>

      <!-- header right-->
      <div x-data="{ show: true }" >
        <!-- top menu -->
        <button id="navmenu" type="button" class="inline-flex md:hidden items-center justify-center text-slate-800 hover:text-slate-600  focus:outline-none focus:ring-0" aria-controls="top-menu" @click="show = !show" aria-expanded="true" x-bind:aria-expanded="show.toString()">
          <span class="sr-only">Menu</span>
          <div x-description="Icon closed" x-state:on="Menu show" x-state:off="Menu closed" :class="{ 'hidden': show, 'block': !(show) }" class="hidden" >
            <i class="text-2xl bx bx-x"></i>
          </div>

          <div x-description="Icon closed" x-state:on="Menu show" x-state:off="Menu closed" :class="{ 'block': show, 'hidden': !(show) }" class="block" >
            <i class="text-2xl bx bx-dots-vertical"></i>
          </div>
        </button>

        <!-- menu -->
        <ul :class="{ 'hidden md:flex': show, 'flex': !(show) }" class="absolute top:12 md:top-0 left-0 right-0 bg-white  md:bg-transparent border-t border-b md:border-t-0 md:border-b-0 border-slate-100 w-full justify-center md:relative mt-4 md:mt-0 hidden md:flex">

          <!-- messages -->
          {{-- <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" id="messages" @click="open = ! open">
              <div class="relative inline-block" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                </svg>
                <!-- <i class="text-2xl fas fa-envelope"></i> -->
                <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
              </div>
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white  shadow-md" bis_skin_checked="1" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 " >
                <div class="relative" >
                  <div class="font-bold" >Messages</div>
                  <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0" >
                    <a @click="open = ! open" href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2" title="Search message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                      </svg>
                      <!-- <i class="fas fa-search"></i> -->
                    </a>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white  z-10 rounded" style="min-width: 16rem; display: none;" >
                       <form class="inline-block w-full">
                        <div class="flex flex-wrap items-stretch w-full relative" >
                          <input type="text" class="flex-shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 " placeholder="Search messages…" aria-label="Search">
                          <div class="flex -mr-px" >
                            <button class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                              <!-- <i class="fas fa-search"></i> -->
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="Mark all as read">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-envelope-open" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"></path>
                      </svg>
                      <!-- <i class="fas fa-envelope-open"></i> -->
                    </a>
                    <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                      </svg>
                      <!-- <i class="fas fa-edit"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show" >
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                        <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Daniel Esteban</div>
                      <div class="text-gray-500 text-sm mt-1" >What do you think about this project?</div>
                      <div class="text-gray-500 text-sm mt-1" >12m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                        <span title="busy" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Carlos Garcia</div>
                      <div class="text-gray-500 text-sm mt-1" >Hello, how are you friends?</div>
                      <div class="text-gray-500 text-sm mt-1" >30m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Steven Rey</div>
                      <div class="text-gray-500 text-sm mt-1" >Thank you for your help today.</div>
                      <div class="text-gray-500 text-sm mt-1" >4h ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200   py-2 hover:bg-gray-100" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Roman Davis</div>
                      <div class="text-gray-500 text-sm mt-1" >Do you have time? I want to call you.</div>
                      <div class="text-gray-500 text-sm mt-1" >5h ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal" >
                <a href="#" class="hover:underline">Show all Messages</a>
              </div>
            </div>
          </li> --}}

          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 mt-1 flex text-sm rounded-full focus:outline-none" id="messages" @click="open = ! open">
              <div class="relative inline-block" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                  </svg>
                <span class="flex justify-center absolute -top-2 -right-1  text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
              </div>
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute -right-32 md:right-0 rounded top-full z-50 py-0.5 text-left bg-white  shadow-md"  style="">
              <div class="p-3 font-normal border-b border-slate-200 " >
                <div class="relative w-full flex flex-row justify-between items-center" >
                  <div class="text-sm font-bold" >Messages</div>
                  <a href="#" class="inline-block" title="Mark all as read">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-envelope-open" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"></path>
                      </svg>
                  </a>
                  <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="New message">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                    </svg>
                    <!-- <i class="fas fa-edit"></i> -->
                  </a>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show" >
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100 bg-slate-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar5.jpg" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                        <span title="online" class="flex justify-center absolute -bottom-0.5 right-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Daniel Esteban</div>
                      <div class="text-slate-500 text-sm mt-1" >What do you think about this project?</div>
                      <div class="text-slate-500 text-sm mt-1" >12m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100 bg-slate-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar4.jpg" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                        <span title="busy" class="flex justify-center absolute -bottom-0.5 right-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Carlos Garcia</div>
                      <div class="text-slate-500 text-sm mt-1" >Hello, how are you friends?</div>
                      <div class="text-slate-500 text-sm mt-1" >30m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100 bg-slate-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar3.jpg" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 right-2 text-center bg-slate-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Steven Rey</div>
                      <div class="text-slate-500 text-sm mt-1" >Thank you for your help today.</div>
                      <div class="text-slate-500 text-sm mt-1" >4h ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="relative" >
                        <img src="src/img/avatar/avatar2.jpg" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 right-2 text-center bg-slate-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Roman Davis</div>
                      <div class="text-slate-500 text-sm mt-1" >Do you have time? I want to call you.</div>
                      <div class="text-slate-500 text-sm mt-1" >5h ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal" >
                <a href="#" class="hover:underline text-sm">Show all Messages</a>
              </div>
            </div>
          </li>

          <!-- notification -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 mt-1 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
              <div class="relative inline-block" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                  </svg>
                <span class="flex justify-center absolute -top-2 -right-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">1</span></span>
              </div>
            </a>

            <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute -right-20 md:right-0 rounded top-full z-50 py-0.5 text-left bg-white  shadow-md" style="display: none;" >
              <div class="p-3 font-normal border-b border-slate-200 " >
                <div class="relative w-full flex flex-row justify-between items-center" >
                  <div class="text-sm font-bold" >Notifications</div>
                  <a href="#" class="inline-block" title="Clear all">
                    {{-- <i class="text-xl bx bx-trash-alt"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                </svg>
                  </a>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show" >
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100 bg-slate-50" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-cyan-500 text-white" >
                        <i class="self-center bx bx-calendar"></i>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Event will coming</div>
                      <div class="text-slate-500 text-sm mt-1" >Meeting with Mr.John Navas at:10.00Am</div>
                      <div class="text-slate-500 text-sm mt-1" >1h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-cyan-500 text-white" >
                        <i class="self-center bx bx-like"></i>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-slate-500 text-sm mt-1" ><b class="text-slate-600 ">Daniel</b> like your post: <b class="text-slate-600 ">Hello World!</b></div>
                      <div class="text-slate-500 text-sm mt-1" >3h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200 py-2 hover:bg-slate-100" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-cyan-500 text-white" >
                        <i class="self-center bx bx-server"></i>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-sm font-bold" >Server maintenance</div>
                      <div class="text-slate-500 text-sm mt-1" >Server maintenance at:07.00Am</div>
                      <div class="text-slate-500 text-sm mt-1" >8h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-slate-200  py-2 hover:bg-slate-100" >
                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" >
                      <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-cyan-500 text-white" >
                        <i class="self-center bx bx-comment"></i>
                      </div>
                    </div>
                    <div class="flex-shrink max-w-full px-2 w-3/4" >
                      <div class="text-slate-500 text-sm mt-1" ><b class="text-slate-600 ">Carlos</b> comment in your post: <b class="text-slate-600 ">Hello World!</b></div>
                      <div class="text-slate-500 text-sm mt-1" >1d ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-sm text-center font-normal" >
                <a href="#" class="hover:underline">Show all Notifications</a>
              </div>
            </div>
          </li>

          <!-- profile -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="pt-2 pl-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
              <div class="relative" >
                <img class="h-10 w-10 rounded-full border border-slate-200 bg-slate-700" src="{{asset('assets/img/profile.png')}}" alt="avatar">
                <span title="online" class="flex justify-center absolute -bottom-0.5 right-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 rounded top-full z-50 py-0.5 text-left bg-white  shadow-md" style="min-width:12rem;display: none;">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-700" href="#">Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-700" href="#">Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-700" href="#">Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="border-t border-slate-200  my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-700" href="#">Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <script type="text/javascript">
//     const clock = document.getElementById('clock');

//     function updateTime() {
//   const now = new Date();
//      const timeString = now.toLocaleTimeString();
//          const dateString = now.toLocaleDateString();
//              clock.textContent = `${timeString} & ${dateString}`;
//     }

//     updateTime();
//     setInterval(updateTime, 1000);

function updateTime() {
    const now = new Date();
    const date = now.toLocaleDateString(undefined, { day: 'numeric', month: 'long', year: 'numeric' });
    const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
    const clock = document.getElementById('clock');
    clock.textContent = `${date} ${time}`;
  }

  updateTime();
  setInterval(updateTime, 1000);

  </script>
