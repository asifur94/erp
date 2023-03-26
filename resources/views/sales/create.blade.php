<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.navigation')
        </div>
        <!--End SideBar-->

            <div class=" padding-l-30 pb-[30px] padding-r-26 -mt-28">

            </div>
            <div class="bg-white section-margin p-6 -mt-10">
                <h2 class="text-lg flex gap-2  items-center text-[#1A1C1E] font-bold">Add Employee <span><img src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span></h2>
                <form class="mt-6" action="">
                    <x-form-field name="name" type="text" label="Add Employee Name " placeholder="Ratul Ahmed" required="required" />
                    <x-form-field class="mt-8" name="email" type="text" label="Employee  Email  Address " placeholder="rahmed357@gmail.com" required="required" />
                    <div class="flex gap-x-4 mt-8">
                        <x-form-field class="flex-1" name="employeeId" type="text" label="Employee ID" placeholder="248438635" required="required" />
                        <x-form-field class="flex-1" name="address" type="text" label="Address" placeholder="Kustia, Bheramara" required="required" />
                    </div>
                    <x-form-field class="mt-8" name="type" type="select" label="Type" required="required">
                        <option selected>Choose a type</option>
                        <option value="">Amin</option>
                        <option value="">Hub Manager</option>
                    </x-form-field>
                    <div class="flex gap-x-4 mt-8">
                        <x-form-field class="flex-1" name="status" type="select" label="Status"  required="required">
                            <option selected>Choose a status</option>
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </x-form-field>
                        <x-form-field class="flex-1" name="hub" type="select" label="Hub" required="required">
                            <option selected>Choose a Hub</option>
                            <option value="">Bheramara</option>
                            <option value="">Kustia</option>
                            <option value="">Pabna</option>
                        </x-form-field>
                    </div>
                    <!--border-->
                    <span class="border-b border-[#EDF1F3] block my-8"></span>

                    <div class="flex gap-x-4">
                        <button type="submit" class="dc-submit-button">Add Employees</button>
                        <button type="button" class="dc-cancel-button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
