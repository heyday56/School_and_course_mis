<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')

        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post"
                action="{{ url('/edit/student/' . $student->id) }}" enctype="multipart/form-data">
                @csrf

                <!-- First Name -->
                <div class="flex flex-col text-right">
                    <label for="name" class="mb-2 text-sm font-medium text-gray-700">نام</label>
                    <input type="text" name="name" id="name" placeholder="نام را وارد کنید" value="{{ $student->name }}"
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
                        value="{{ $student->lastName }}"
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
                        value="{{ $student->fatherName }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('fatherName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Family Phone -->
                <div class="flex flex-col text-right">
                    <label for="family_phone" class="mb-2 text-sm font-medium text-gray-700">شماره تلقن اقارب</label>
                    <input type="text" name="family_phone" id="family_phone" placeholder="شماره تلفن را وارد کنید"
                        value="{{ $student->family_phone }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('family_phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- ID Card -->
                <div class="flex flex-col text-right">
                    <label for="idCard" class="mb-2 text-sm font-medium text-gray-700">کد ملی</label>
                    <input type="text" name="idCard" id="idCard" placeholder="کد ملی را وارد کنید"
                        value="{{ $student->idCard }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('idCard')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Birth Day -->
                <div class="flex flex-col text-right">
                    <label for="birthday" class="mb-2 text-sm font-medium text-gray-700">تاریخ تولد</label>
                    <input type="date" name="birthday" id="birthday" placeholder=" تاریخ تولد را وارد کنید "
                        value="{{ $student->birthday }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('birthday')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Image -->
                <div class="flex flex-col text-right">
                    <label for="image" class="mb-2 text-sm font-medium text-gray-700">تصویر </label>
                    <input type="file" name="image" id="image" value="{{ $student->image }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-max-100 h-max-100">

                    <img src="{{ asset($student->image) }}" class="border border-gray-300 rounded-lg w-20 h-30">
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
    <script>
        function OpenItem(itemId, iconId) {
            document.getElementById("salary_item").style.display = 'none';
            document.getElementById("salary_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            document.getElementById("course_item").style.display = 'none';
            document.getElementById("course_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            document.getElementById("student_item").style.display = 'none';
            document.getElementById("student_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            document.getElementById("employee_item").style.display = 'none';
            document.getElementById("employee_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';

            const item = document.getElementById(itemId);
            const icon = document.getElementById(iconId);

            if (item.style.display == "none") {
                item.style.display = "block";
                icon.innerHTML = '<i class="fa-solid fa-angle-down ml-2"></i>';
            } else {
                item.style.display = "none";
                icon.innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            }
        }
    </script>
</x-app-layout>