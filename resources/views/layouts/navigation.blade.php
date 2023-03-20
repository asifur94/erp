
<nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 md:w-0': open, 'w-0 md:w-64': !(open) }" class="fixed transition-all duration-500 ease-in-out h-screen bg-white  shadow-sm w-0 md:w-64" aria-expanded="false">
    <div class="h-full overflow-y-auto scrollbars" bis_skin_checked="1">
        <!--logo-->
        <div class="mt-18 text-center py-5" bis_skin_checked="1">
            <a href="#" class="relative">
              <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden hidden-compact">
                <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="../src/img/logo.png"> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1" viewBox="0 0 300.000000 300.000000">
                  <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                    <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                    -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                    -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                    5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                    58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                    465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"></path>
                    <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                    0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                    -687 428 -110 29 -111 28 -153 -37z"></path>
                    <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                    l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                    62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                    -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                    -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                    217 -10 16 -14 14 -45 -18z"></path>
                  </g>
                </svg><span class="text-gray-700 ">ERP</span>
              </h2>
              <h2 class="text-3xl font-semibold mx-auto logo-compact hidden">
                <!-- <img class="inline-block w-7 h-auto -mt-1" src="../src/img/logo.png"> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 -mt-1" viewBox="0 0 300.000000 300.000000">
                  <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                    <path class="text-pink-500" d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                    -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                    -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                    5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                    58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                    465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z"></path>
                    <path class="text-indigo-500" d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                    0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                    -687 428 -110 29 -111 28 -153 -37z"></path>
                    <path class="text-indigo-500" d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                    l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                    62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                    -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                    -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                    217 -10 16 -14 14 -45 -18z"></path>
                  </g>
                </svg>
              </h2>
            </a>
          </div>

        <!-- Sidebar menu -->
        <ul x-data="{selected:1}" class="w-full float-none flex flex-col font-medium ltr:pl-1.5 rtl:pr-1.5">
          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500  text-indigo-500 dark:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
              </svg>
              <!-- <i class="ltr:mr-2 rtl:ml-2 fas fa-home"></i> -->
              <span>Dashboards</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down rotate-0" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 1, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 1) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal">

              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="index-ecommerce.html">Ecommerce</a>
              </li>

              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="index-sales.html">Sales</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="index-marketing.html">Marketing</a>
              </li>
            </ul>
          </li>

          {{-- <li>
            <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="calendar.html">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-calendar4-week" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"></path>
                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-calendar-alt"></i> -->
              <span>Calendar</span>
            </a>
          </li> --}}

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 2 }" @click="selected !== 2 ? selected = 2 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 " href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-store"></i> -->
              <span>Ecommerce</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 2, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 2) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 2" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" style="display: none;">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="route('ecommerce.products.index')">Products</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/product-detail.html">Product Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/order.html">Orders</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/order-detail.html">Order Details</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/customers.html">Customers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/cart.html">Shopping Cart</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/checkout.html">Checkout</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/seller.html">Sellers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="ecommerce/invoice.html">Invoice</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-suitcase"></i> -->
              <span>HR management</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 3, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 3) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" style="display: none;">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="project/list.html">Personnel file</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="project/detail.html">Schedule management</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="project/kanban.html">Performance management</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="project/create.html">Leave management</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 " href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-file-earmark-richtext" viewBox="0 0 16 16">
                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-file"></i> -->
              <span>Accounts</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 4, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 4) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 4" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" style="display: none;">
              <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false">
               <a @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" id="auth" class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-gray-300" href="javascript:;" aria-expanded="false">
                  Authentication
                  <!-- caret -->
                  <span class="inline-block ltr:float-right rtl:float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"></i> -->
                  </span>
                </a>
                <ul class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" x-show="open" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" role="menu" aria-orientation="vertical" aria-labelledby="auth" style="display: none;">
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/register-basic.html">Register basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/register-cover.html">Register cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/register-ilustration.html">Register ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="authentication/login-basic.html">Login basic</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/login-cover.html">Login cover</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/login-ilustration.html">Login ilustration</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/forgot-password.html">Forgot password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/confirm-email.html">Confirm email</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/change-password.html">Change password</a>
                  </li>
                  <li class="relative">
                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="authentication/logout-page.html">Logout page</a>
                  </li>
                </ul>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-profile.html">Profile</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-service.html">Services</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-faq.html">Faq</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-pricing.html">Pricing</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-maintenance.html">Maintenance</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-404.html">404</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="pages-starter.html">Starter</a>
              </li>
            </ul>
          </li>



          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 5 }" @click="selected !== 5 ? selected = 5 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 " href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layout-sidebar-inset" viewBox="0 0 16 16">
                <path d="M14 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"></path>
                <path d="M3 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-columns"></i> -->
              <span>Analyticals and others</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 5, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 5) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 5" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" style="display: none;">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-sidedark.html">Side Dark</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-dark.html">Dark mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-rtl.html">RTL mode</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-compact.html">Compact</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-topnav.html">Top Navbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="layout-preloader.html">Preloader</a>
              </li>
            </ul>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <a :class="{ 'text-indigo-500 dark:text-gray-300': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 hover:text-indigo-500 " href="javascript:;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 bi bi-layers" viewBox="0 0 16 16">
                <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"></path>
              </svg>
              <!-- <i class="mr-2 fas fa-layer-group"></i> -->
              <span>Administrator area</span>
              <!-- caret -->
              <span class="inline-block ltr:float-right rtl:float-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transform transition duration-300 mt-1.5 bi bi-chevron-down ltr:-rotate-90 rtl:rotate-90" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }" width=".8rem" height=".8rem" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!-- <i class="transform transition duration-300 fas fa-chevron-down" :class="{ 'rotate-0': selected == 6, 'ltr:-rotate-90 rtl:rotate-90': !(selected == 6) }"></i> -->
              </span>
            </a>

            <!-- dropdown menu -->
            <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 ltr:pl-7 rtl:pr-7 py-0.5 ltr:text-left rtl:text-right mb-1 font-normal" style="display: none;">


              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/pagination.html">Pagination</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/popovers.html">Popovers</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/progress.html">Progress</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/ribbon.html">Ribbon</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/scrollbar.html">Scrollbar</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/spinners.html">Spinners</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/sweetalert.html">Sweet alert</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/tabs.html">Tabs</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500 " href="components/tooltips.html">Tooltips</a>
              </li>
            </ul>
          </li>





        </ul>


      </div>
</nav>

<div x-bind:aria-expanded="open" :class="{ 'ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0': open, 'ltr:ml-0 ltr:mr-0 md:ltr:ml-64 rtl:mr-0 rtl:ml-0 md:rtl:mr-64': !(open) }" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ltr:ml-64 ltr:-mr-64 md:ltr:ml-0 md:ltr:mr-0 rtl:mr-64 rtl:-ml-64 md:rtl:mr-0 md:rtl:ml-0" aria-expanded="true" bis_skin_checked="1">
      <!-- Navbar -->
<nav :class="{ 'ltr:left-64 ltr:-right-64 md:ltr:left-0 md:ltr:right-0 rtl:right-64 rtl:-left-64 md:rtl:right-0 md:rtl:left-0': open, 'ltr:left-0 ltr:right-0 md:ltr:left-64 rtl:right-0 rtl:left-0 md:rtl:right-64': !(open) }" class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 ltr:left-0 md:ltr:left-64 ltr:right-0 rtl:right-0 md:rtl:right-64 rtl:left-0 px-6 bg-white  shadow-sm transition-all duration-500 ease-in-out w-full" id="desktop-menu">
        <!-- sidenav button-->
        <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600  focus:outline-none focus:ring-0" aria-controls="sidebar-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
          <span class="sr-only">Mobile menu</span>
          <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="hidden md:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            <path class="md:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
          </svg>

          <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
          </svg>
          <!-- <i class="text-2xl fas fa-bars"></i> -->
        </button>

        <div class="flex items-center">
            <!-- Search -->
            <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
                <div class="flex flex-wrap items-stretch w-full relative" bis_skin_checked="1">
                    <input type="text" class="flex-shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0    " placeholder="Search…" aria-label="Search">
                    <div class="flex -mr-px" bis_skin_checked="1">
                        <button class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            <!-- <i class="fas fa-search"></i> -->
                        </button>
                    </div>
                </div>
            </form>

            <!-- menu -->
            <ul class=" flex ltr:ml-auto rtl:mr-auto mt-2">
                <!-- Customizer -->
                <li x-data="{ open: false }" class="relative">
                    <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                        <span class="sr-only">Customizer</span>
                        <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                        </svg>
                        <!-- <i class="text-2xl fas fa-cog"></i> -->
                    </a>

                    <!-- Right Offcanvas -->
                    <div class="fixed w-full h-full inset-0 z-50" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;" bis_skin_checked="1">
                        <!-- bg open -->
                        <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                        <nav id="mobile-nav" class="flex flex-col ltr:right-0 rtl:left-0 w-72 fixed top-0 bg-white  h-full overflow-auto z-40 scrollbars show" x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu" aria-orientation="vertical" aria-labelledby="navbartoggle" x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full" style="display: none;">
                            <div class="p-6 bg-indigo-500 text-gray-100 border-b border-gray-200 " bis_skin_checked="1">
                                <div class="flex flex-row justify-between" bis_skin_checked="1">
                                    <h3 class="text-md font-bold">Customizer</h3>
                                    <button @click="open = false" type="button" class="inline-block w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </button>
                                </div>
                            </div>
                            <div class="py-3 px-6 border-b border-gray-200 " bis_skin_checked="1">
                                <p class="text-base text-semibold">Color Scheme</p>
                                <div class="flex flex-row" bis_skin_checked="1">
                                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in" bis_skin_checked="1">
                                        <input type="checkbox" name="lightdark" id="lightdark" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white  border-2  appearance-none cursor-pointer">
                                        <label for="lightdark" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300  cursor-pointer"></label>
                                    </div>
                                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                                </div>
                            </div>
                            <div class="py-3 px-6 border-b border-gray-200 " bis_skin_checked="1">
                                <p class="text-base text-semibold">Sidebar Color</p>
                                <div class="flex flex-row" bis_skin_checked="1">
                                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in" bis_skin_checked="1">
                                        <input type="checkbox" name="sidecolor" id="sidecolor" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white  border-2  appearance-none cursor-pointer">
                                        <label for="sidecolor" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300  cursor-pointer"></label>
                                    </div>
                                    <p class="text-sm text-gray-500 self-center">Light and Dark</p>
                                </div>
                            </div>
                            <div class="py-3 px-6 border-b border-gray-200 " bis_skin_checked="1">
                                <p class="text-base text-semibold">Direction</p>
                                <div class="flex flex-row" bis_skin_checked="1">
                                    <div class="relative inline-block w-8 py-3 mt-0.5 ltr:mr-3 rtl:ml-3 align-middle select-none transition duration-200 ease-in" bis_skin_checked="1">
                                        <input type="checkbox" name="rtlmode" id="rtlmode" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white  border-2  appearance-none cursor-pointer">
                                        <label for="rtlmode" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300  cursor-pointer"></label>
                                    </div>
                                    <p class="text-sm text-gray-500 self-center">LTR and RTL</p>
                                </div>
                            </div>
                            <div class="py-3 px-6 border-b border-gray-200 " bis_skin_checked="1">
                                <p class="text-base text-semibold">Layout</p>
                                <div class="relative mb-3" bis_skin_checked="1">
                                    <a href="index.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100   hover:text-indigo-500 hover:bg-gray-200 self-center">Default</a>
                                    <a href="layout-compact.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100   hover:text-indigo-500 hover:bg-gray-200 self-center">Compact</a>
                                    <a href="layout-topnav.html" class="inline-block py-2 px-2.5 mt-2 rounded text-sm text-gray-500 bg-gray-100   hover:text-indigo-500 hover:bg-gray-200 self-center">Topnav</a>
                                </div>
                            </div>
                            <div id="customcolor" class="py-3 px-6 border-b border-gray-200 " bis_skin_checked="1">
                                <p class="text-base text-semibold">Primary Color</p>
                                <div class="relative my-3" bis_skin_checked="1">
                                    <div id="custred" title="red" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-red-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custyellow" title="yellow" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-yellow-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custgreen" title="green" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-green-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custblue" title="blue" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-blue-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custpurple" title="purple" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-purple-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custpink" title="pink" class="inline-block p-3 ltr:mr-1.5 rtl:ml-1.5 bg-pink-500 hover:opacity-90 rounded-full cursor-pointer" bis_skin_checked="1"></div>
                                    <div id="custindigo" title="reset color" class="inline-block cursor-pointer" bis_skin_checked="1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"></path>
                                            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"></path>
                                        </svg></div>
                                </div>
                            </div>
                            <div class="pt-6 px-6" bis_skin_checked="1">
                                <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 p-3 rounded-lg mb-4" bis_skin_checked="1">
                                    <div bis_skin_checked="1">
                                        How to apply? please read the documentation on <a href="docs/customize.html" class="underline font-semibold">Customize page</a>
                                    </div>
                                    <button type="button" @click="open = false">
                                        <span class="text-2xl">×</span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>
                </li><!-- End Customizer -->

                <!-- messages -->
                <li x-data="{ open: false }" class="relative">
                    <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" id="messages" @click="open = ! open">
                        <div class="relative inline-block" bis_skin_checked="1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                            </svg>
                            <!-- <i class="text-2xl fas fa-envelope"></i> -->
                            <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
                        </div>
                    </a>

                    <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white  border  shadow-md" style="display: none;" bis_skin_checked="1">
                        <div class="p-3 font-normal border-b border-gray-200 " bis_skin_checked="1">
                            <div class="relative" bis_skin_checked="1">
                                <div class="font-bold" bis_skin_checked="1">Messages</div>
                                <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0" bis_skin_checked="1">
                                    <a @click="open = ! open" href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2" title="Search message">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                        <!-- <i class="fas fa-search"></i> -->
                                    </a>
                                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute ltr:right-0 rtl:left-0 bg-white  z-10 rounded" style="min-width: 16rem; display: none;" bis_skin_checked="1">
                                        <form class="inline-block w-full">
                                            <div class="flex flex-wrap items-stretch w-full relative" bis_skin_checked="1">
                                                <input type="text" class="flex-shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 " placeholder="Search messages…" aria-label="Search">
                                                <div class="flex -mr-px" bis_skin_checked="1">
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
                        <div class="max-h-60 overflow-y-auto scrollbars show" bis_skin_checked="1">
                            <a href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="relative" bis_skin_checked="1">
                                            <img src="src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                                            <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Daniel Esteban</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">What do you think about this project?</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">12m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="relative" bis_skin_checked="1">
                                            <img src="src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                                            <span title="busy" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Carlos Garcia</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">Hello, how are you friends?</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">30m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="relative" bis_skin_checked="1">
                                            <img src="src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                                            <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Steven Rey</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">Thank you for your help today.</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">4h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="relative" bis_skin_checked="1">
                                            <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                                            <span title="offline" class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Roman Davis</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">Do you have time? I want to call you.</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">5h ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-3 text-center font-normal" bis_skin_checked="1">
                            <a href="#" class="hover:underline">Show all Messages</a>
                        </div>
                    </div>
                </li>

                <!-- notification -->
                <li x-data="{ open: false }" class="relative">
                    <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-none" id="notify" @click="open = ! open">
                        <div class="relative inline-block" bis_skin_checked="1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                            </svg>
                            <!-- <i class="text-2xl fas fa-bell"></i> -->
                            <span class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">1</span></span>
                        </div>
                    </a>

                    <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="w-72 origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white  shadow-md" style="display: none;" bis_skin_checked="1">
                        <div class="p-3 font-normal border-b border-gray-200 " bis_skin_checked="1">
                            <div class="relative" bis_skin_checked="1">
                                <div class="font-bold" bis_skin_checked="1">Notifications</div>
                                <div class="absolute top-0 ltr:right-0 rtl:left-0" bis_skin_checked="1">
                                    <a href="#" class="inline-block ltr:mr-2 rtl:ml-2" title="Clear all">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-4 h-4 bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                        </svg>
                                        <!-- <i class="fas fa-trash-alt"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="max-h-60 overflow-y-auto scrollbars show" bis_skin_checked="1">
                            <a class="relative" href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100 bg-gray-50" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white" bis_skin_checked="1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-calendar4-event" viewBox="0 0 16 16">
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"></path>
                                                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
                                            </svg>
                                            <!-- <i class="self-center fas fa-calendar"></i> -->
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Event will coming</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">Meeting with Mr.John Navas at:10.00Am</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">1h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a class="relative" href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white" bis_skin_checked="1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                                            </svg>
                                            <!-- <i class="self-center fas fa-thumbs-up"></i> -->
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1"><b class="text-gray-600 ">Daniel</b> like your post: <b class="text-gray-600 ">Hello World!</b></div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">3h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a class="relative" href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white" bis_skin_checked="1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center w-4 h-4 bi bi-hdd-stack" viewBox="0 0 16 16">
                                                <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"></path>
                                                <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"></path>
                                                <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                                            </svg>
                                            <!-- <i class="self-center fas fa-server"></i> -->
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-sm font-bold" bis_skin_checked="1">Server maintenance</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">Server maintenance at:07.00Am</div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">8h ago</div>
                                    </div>
                                </div>
                            </a>
                            <a class="relative" href="#">
                                <div class="flex flex-wrap flex-row items-center border-b border-gray-200  py-2 hover:bg-gray-100" bis_skin_checked="1">
                                    <div class="flex-shrink max-w-full px-2 w-1/4 text-center" bis_skin_checked="1">
                                        <div class="flex justify-center mx-auto w-8 h-8 rounded-full bg-indigo-500 text-white" bis_skin_checked="1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center w-4 h-4 bi bi-chat-left" viewBox="0 0 16 16">
                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                            </svg>
                                            <!-- <i class="self-center fas fa-comment"></i> -->
                                        </div>
                                    </div>
                                    <div class="flex-shrink max-w-full px-2 w-3/4" bis_skin_checked="1">
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1"><b class="text-gray-600 dark:text-gray-400">Carlos</b> comment in your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                                        <div class="text-gray-500 text-sm mt-1" bis_skin_checked="1">1d ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-3 text-center font-normal" bis_skin_checked="1">
                            <a href="#" class="hover:underline">Show all Notifications</a>
                        </div>
                    </div>
                </li>

                <!-- profile -->
                <li x-data="{ open: false }" class="relative">
                    <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
                        <div class="relative" bis_skin_checked="1">
                            <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="src/img/avatar/avatar.png" alt="avatar">
                            <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                        </div>
                        <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center">Ari Budin</span>
                    </a>
                    <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white  shadow-md" style="min-width:12rem;display: none;">
                        <li class="relative">
                            <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center" bis_skin_checked="1">
                                <div class="flex-shrink max-w-full px-4 w-1/3" bis_skin_checked="1">
                                    <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full" alt="Ari Budin">
                                </div>
                                <div class="flex-shrink max-w-full px-4 w-2/3 ltr:pl-1 rtl:pr-1" bis_skin_checked="1">
                                    <div class="font-bold" bis_skin_checked="1"><a href="#" class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari Budin</a></div>
                                    <div class="text-gray text-sm mt-1" bis_skin_checked="1">Professional Front end developer.</div>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <hr class="border-t border-gray-200  my-0">
                        </li>
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-gear" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                </svg>
                                <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-question-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path>
                                </svg>
                                <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-translate" viewBox="0 0 16 16">
                                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"></path>
                                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"></path>
                                </svg>
                                <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                            </a>
                        </li>
                        <li class="relative">
                            <hr class="border-t border-gray-200  my-0">
                        </li>
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline ltr:mr-2 rtl:ml-2 w-4 h-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                </svg>
                                <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
      </nav>
      <!-- End Navbar -->


 </div>







