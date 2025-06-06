<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post" action="{{ url('/add/employee/') }}"
                enctype="multipart/form-data">
                @csrf

                <!-- First Name -->
                <div class="flex flex-col text-right">
                    <label for="name" class="mb-2 text-sm font-medium text-gray-700">نام</label>
                    <input type="text" name="name" id="name" placeholder="نام را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Last Name -->
                <div class="flex flex-col text-right">
                    <label for="last_name" class="mb-2 text-sm font-medium text-gray-700">نام خانوادگی</label>
                    <input type="text" name="lastName" id="last_name" placeholder="نام خانوادگی را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('lastName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Father Name -->
                <div class="flex flex-col text-right">
                    <label for="fatherName" class="mb-2 text-sm font-medium text-gray-700">نام پدر</label>
                    <input type="text" name="fatherName" id="fatherName" placeholder="نام پدر را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('fatherName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="flex flex-col text-right">
                    <label for="phone" class="mb-2 text-sm font-medium text-gray-700">شماره تلفن</label>
                    <input type="text" name="phone" id="phone" placeholder="شماره تلفن را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>



                <!-- ID Card -->
                <div class="flex flex-col text-right">
                    <label for="idCard" class="mb-2 text-sm font-medium text-gray-700">کد ملی</label>
                    <input type="text" name="idCard" id="idCard" placeholder="کد ملی را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('idCard')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Position -->
                <div class="flex flex-col text-right">
                    <label for="position" class="mb-2 text-sm font-medium text-gray-700">وظیفه</label>
                    <select name="position" id="position"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="استاد">استاد</option>
                        <option value="مدیر">مدیر</option>
                        <option value="کاگر">کاگر</option>
                        <option value="گارد">گارد</option>

                    </select>
                </div>

                <!-- Salary -->
                <div class="flex flex-col text-right">
                    <label for="salary" class="mb-2 text-sm font-medium text-gray-700">معاش</label>
                    <input type="text" name="salary" id="salary" placeholder="معاش را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('salary')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                </div>

                <!-- Image -->
                <div class="flex flex-col md:col-span-2 text-right">
                    <label for="image" class="mb-2 text-sm font-medium text-gray-700">آدرس تصویر</label>
                    <input type="file" name="image" id="image"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="md:col-span-2 text-left">
                    <button type="submit"
                        class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        ذخیره
                    </button>
                </div>
            </form>
        </div>


    </div>

</x-app-layout>