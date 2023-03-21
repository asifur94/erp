

    <div class="hidden md:block left-0 top-0 bottom-0 w-0 md:w-20" >
        <div class="w-full h-full  " ></div>
    </div>


    <nav id="sidebar-menu" x-description="Mobile menu" x-bind:aria-expanded="open" :class="{ 'w-64 ml-0 md:w-20 sidebar-small': open, 'w-64 -ml-64 md:ml-0': !(open) }" class="fixed transition-all duration-500 ease-in-out h-screen bg-slate-100  text-slate-500 z-40 w-64 ml-0 md:w-20 sidebar-small" aria-expanded="true">
        <div class="sidebar-small-overflow h-full overflow-y-auto scrollbars show" >
          <div class="w-full flex flex-row justify-center py-5" >
            <h2 class="flex flex-row items-center text-xl text-slate-100 font-semibold">
              <img class="w-7 h-7" alt="Logo" src="src/img/logo/logo11.png">
              <span class="ml-1.5 sidebar-small-text text-slate-800">ERP</span>
            </h2>
          </div>

          <!-- Sidebar menu -->
          <ul id="side-menu" x-data="{selected:1}" class="sidebar-small-menu w-full float-none flex flex-col font-medium px-1 pb-6">
            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 1 }" @click="selected !== 1 ? selected = 1 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-bar-chart-square mr-1"></i>
                <span class="sidebar-small-text">Dashboards</span>
                <!-- caret -->
                <span class="inline-block float-right sidebar-small-text">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 1, '-rotate-90': !(selected == 1) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 1" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index.html">Finance</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-analytics.html">Analytics</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-sales.html">Sales</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-sales-team.html">Sales Team</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-crm.html">CRM</a>
                </li>
                <li class="relative">
                  <a class="text-cyan-500 block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="index-support.html">Support</a>
                </li>
              </ul>
            </li>

            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 3 }" @click="selected !== 3 ? selected = 3 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-grid-alt mr-1"></i>
                <span class="sidebar-small-text">Ecommerce</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 3, '-rotate-90': !(selected == 3) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 3" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'product' }}">Products</a>
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



                {{-- <li class="relative">
                  <a class="flex flex-row justify-between items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="ilustration.html">Ilustrations <i class="text-xs px-0.5 rounded text-cyan-700 bg-cyan-100">Bonus</i></a>
                </li> --}}
              </ul>
            </li>

            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 4 }" @click="selected !== 4 ? selected = 4 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-file mr-1"></i>
                <span class="sidebar-small-text">HR</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 4, '-rotate-90': !(selected == 4) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 4" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'employee' }}">Employees</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'attendance' }}">Attendance</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="{{ 'leave' }}">Leave</a>
                </li>

              </ul>
            </li>

            {{-- <li class="relative">
              <a class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="landing.html">
                <i class="sidebar-small-icon bx bx-globe mr-1"></i>
                <span class="sidebar-small-text">Landing page</span>
              </a>
            </li>

            <!-- dropdown -->
            <li class="relative">
              <a :class="{ 'text-cyan-500 bg-slate-700': selected == 6 }" @click="selected !== 6 ? selected = 6 : selected = null" class="block py-2.5 px-6 rounded hover:bg-slate-700 hover:text-cyan-500" href="javascript:;">
                <i class="sidebar-small-icon bx bx-layout mr-1"></i>
                <span class="sidebar-small-text">Components</span>
                <!-- caret -->
                <span class="sidebar-small-text inline-block float-right">
                  <i class="transform transition duration-300 bx bx-chevron-down -rotate-90" :class="{ 'rotate-0': selected == 6, '-rotate-90': !(selected == 6) }"></i>
                </span>
              </a>

              <!-- dropdown menu -->
              <ul x-show="selected == 6" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="block rounded rounded-t-none top-full z-50 pl-6 py-0.5 text-left mb-1 font-normal" style="display: none;">
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#accordion">Accordion</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#alerts">Alerts</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#avatar">Avatar</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#badge">Badge</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#breadcrumb">Breadcrumb</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#buttons">Buttons</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#card">Card</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#carousel">Carousel</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#collapse">Collapse</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#dragdrop">Drag Drop</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#dropdowns">Dropdowns</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#layouts">Layouts</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#grid">Grid</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#list-group">List Group</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#modal">Modal</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#navbar">Navbar</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#notif">Notification</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#offcanvas">Offcanvas</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#pagination">Pagination</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#popovers">Popovers</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#pricing">Pricing</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#progress">Progress</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#scrollbar">Scrollbar</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#spinners">Spinners</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#tabs">Tabs</a>
                </li>
                <li class="relative">
                  <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-cyan-500" href="components.html#tooltips">Tooltips</a>
                </li>
              </ul>
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



