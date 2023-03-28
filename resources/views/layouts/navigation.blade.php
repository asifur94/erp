

    <div class="hidden md:block left-0 top-0 bottom-0 w-0 md:w-20" >
        <div class="w-full h-full  " ></div>
    </div>


    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 ml-0 md:w-20 sidebar-small': open, 'w-64 -ml-64 md:ml-0': !(open) }" class="fixed transition-all duration-500 ease-in-out h-screen bg-white  text-slate-500 z-40 w-64 ml-0 md:w-20 sidebar-small" aria-expanded="true">
        <div class="sidebar-small-overflow h-full overflow-y-auto scrollbars show" >
          <div class="w-full flex flex-row justify-center py-5" >
            <h2 class="flex flex-row items-center text-xl text-slate-100 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-5 w-5 text-cyan-500 ltr:mr-2 rtl:ml-2 bi bi-columns-gap" viewBox="0 0 16 16">
                    <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"></path>
                  </svg>
              <span class="ml-1.5 sidebar-small-text text-slate-800">ERP</span>
            </h2>
          </div>

          <!-- Sidebar menu -->
          <ul id="side-menu" x-data="{selected:1}" class="sidebar-small-menu w-full float-none flex flex-col font-medium px-1 pb-6">
            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
                  </svg>
                <span class="sidebar-small-text">Dashboards</span>
                <!-- caret -->
                <span class="inline-block float-right sidebar-small-text">
                    <svg class="transform transition duration-500 -rotate-180" :class="{ '-rotate-180': selected == 0 }" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"></path>
                      </svg>
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 1, '-rotate-90': !(selected == 1) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'dashboard' }}">Overview</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-analytics.html">Analytics</a>
                </li>

              </ul>
            </li>

            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"></path>
                  </svg>
                <span class="sidebar-small-text">Sales</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 3, '-rotate-90': !(selected == 3) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'products' }}">Products</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'order' }}">Orders</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'checkout' }}">Checkout</a>
                </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'customer' }}">Customers</a>
                  </li>



                {{-- <li class="relative">
                  <a class="flex flex-row justify-between items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="ilustration.html">Ilustrations <i class="text-xs px-0.5 rounded text-cyan-700 bg-cyan-100">Bonus</i></a>
                </li> --}}
              </ul>
            </li>

            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"></path>
                  </svg>
                <span class="sidebar-small-text">HR</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 4, '-rotate-90': !(selected == 4) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 4" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">

                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'employees' }}">Employees</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'attendance' }}">Attendance</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'leave' }}">Leave</a>
                </li>
                <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'salary' }}">Salary</a>
                  </li>
                  {{-- <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'leave' }}">Leave</a>
                  </li> --}}


              </ul>
            </li>


              <!-- dropdown -->
              <li class="relative">
                <a :class="{ 'text-cyan-500 bg-slate-700': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                    <img class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-shop"  src="{{asset('assets/img/account-service.svg')}}" alt="">
                  <span class="sidebar-small-text">Administrative</span>
                  <!-- caret -->
                  <span class="sidebar-small-text inline-block float-right">
                    <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 5, '-rotate-90': !(selected == 5) }"></i>
                  </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                  <li class="relative">

                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'employe' }}">Employees</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'attendance' }}">Attendance</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'leave' }}">Leave</a>
                  </li>
                  <li class="relative">
                      <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'salary' }}">Salary</a>
                    </li>
                    {{-- <li class="relative">
                      <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'leave' }}">Leave</a>
                    </li> --}}


                </ul>
              </li>
              <!-- dropdown -->
            <li class="relative">
                <a :class="{ 'text-cyan-500 bg-slate-700': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                    <img class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-shop"  src="{{asset('assets/img/money.svg')}}" alt="">
                  <span class="sidebar-small-text">Accounts</span>
                  <!-- caret -->
                  <span class="sidebar-small-text inline-block float-right">
                    <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 6, '-rotate-90': !(selected == 6) }"></i>
                  </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#accordion">Payments</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#alerts">Journal</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#avatar">Account</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#badge">Report</a>
                  </li>

                </ul>
              </li>

                 <!-- dropdown -->
            <li class="relative">
                <a :class="{ 'text-cyan-500 bg-slate-700': selected == 7 }" @click="selected !== 7 ? selected = 7 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                    <img class="inline-block h-5 w-5 ltr:mr-2 rtl:ml-2 bi bi-shop"  src="{{asset('assets/img/truck.svg')}}" alt="">
                  <span class="sidebar-small-text">logistics</span>
                  <!-- caret -->
                  <span class="sidebar-small-text inline-block float-right">
                    <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 7, '-rotate-90': !(selected == 7) }"></i>
                  </span>
                </a>

                <!-- dropdown menu -->
                <ul x-show="selected == 7" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                    <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'products' }}">Products</a>
                      </li>
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'order' }}">Orders</a>
                      </li>
                      <li class="relative">
                        <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'checkout' }}">Checkout</a>
                      </li>
                      <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'invoice' }}">Invoice</a>
                        </li>
                        <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'seller' }}">Seller</a>
                        </li>
                        <li class="relative">
                          <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'customer' }}">Customers</a>
                        </li>

                </ul>
              </li>


              <li class="relative">
                <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="{{ 'calender' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"></path>
                        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
                      </svg>

                  <span class="sidebar-small-text">Calender</span>
                </a>
              </li>

              <li class="relative">
                <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="{{ 'email' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-5 h-5 bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                      </svg>

                  <span class="sidebar-small-text">Email</span>
                </a>
              </li>

              <li class="relative mt-20">

                    <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="">
                        <img class="inline-block bottom-0 h-10 w-10 rounded-full border border-slate-200 bg-slate-700" src="{{asset('assets/img/profile.png')}}" alt="avatar">
                      <span class="sidebar-small-text">Asif</span>

                    </a>


              </li>


            {{-- <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="landing.html">
                <i class="sidebar-small-icon bx bx-globe mr-1"></i>
                <span class="sidebar-small-text">Landing page</span>
              </a>
            </li>



            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 7 }" @click="selected !== 7 ? selected = 7 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-list-ul mr-1"></i>
                <span class="sidebar-small-text">Forms</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 7, '-rotate-90': !(selected == 7) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 7" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms.html#input">Input</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms.html#select">Select</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms.html#checkradio">Check &amp; Radio</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms.html#range">Range</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms-advance.html">Advance Form</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="forms-advance.html#validation">Validation</a>
                </li>
              </ul>
            </li> --}}

            <!-- dropdown -->
            {{-- <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 8 }" @click="selected !== 8 ? selected = 8 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-table mr-1"></i>
                <span class="sidebar-small-text">Tables</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 8, '-rotate-90': !(selected == 8) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 8" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="tables.html">Basic Tables</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="tables-advance.html">Advance Tables</a>
                </li>
              </ul>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="typography.html">
                <i class="sidebar-small-icon bx bx-text mr-1"></i>
                <span class="sidebar-small-text">Typography</span>
              </a>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="widgets.html">
                <i class="sidebar-small-icon bx bx-layer mr-1"></i>
                <span class="sidebar-small-text">Widgets</span>
              </a>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="charts.html">
                <i class="sidebar-small-icon bx bx-chart mr-1"></i>
                <span class="sidebar-small-text">Charts</span>
              </a>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="icons.html">
                <i class="sidebar-small-icon bx bx-coffee mr-1"></i>
                <span class="sidebar-small-text">Icons</span>
              </a>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="plugins.html">
                <i class="sidebar-small-icon bx bx-plug mr-1"></i>
                <span class="sidebar-small-text">Plugins</span>
              </a>
            </li>

            <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="documentation.html">
                <i class="sidebar-small-icon bx bx-file-find mr-1"></i>
                <span class="sidebar-small-text">Documentation</span>
              </a>
            </li> --}}
          </ul>
        </div>
      </nav>



