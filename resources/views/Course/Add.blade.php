<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        <div class="sidebare bg-white pt-5 w-1/5 h-full sticky min-h-screen">
            <div class="w-full my-5 flex flex-col items-center">
                <span><img src="{{ asset('image/school.jpg') }}" alt="School Logo"
                        class="w-24 h-24 rounded-full object-cover mb-4 shadow-lg" />
                </span>
                <span>
                    <h2>Solh</h2>
                </span>

            </div>
            <div class="px-5">
                <div onclick="OpenItem('teacher_item','teacher_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div id="teacher_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                    <div>
                        <span>استاد</span>
                        <i class="fa-solid fa-person-chalkboard ml-1"></i>
                    </div>
                </div>
                <ul id="teacher_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-list"></i>
                        <a href="{{ url('/read/teachers') }}" class="mr-1">لیست</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-plus"></i>
                        <a href="{{ url('/add/teacher') }}" class="mr-1">اضافه کردن</a>
                    </li>
                </ul>
            </div>

            <div class="px-5">
                <div onclick="OpenItem('student_item','student_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div id="student_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                    <div>
                        <span>شاگرد</span>
                        <i class="fa-solid fa-graduation-cap mr-1"></i>
                    </div>
                </div>
                <ul id="student_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-list"></i>
                        <a href="{{ url('/read/students') }}" class="mr-1">لیست</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-plus"></i>
                        <a href="{{ url('/add/student') }}" class="mr-1">اضافه کردن</a>
                    </li>
                </ul>
            </div>

            <div class="px-5">
                <div onclick="OpenItem('course_item','course_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div id="course_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                    <div>
                        <span>صنف</span>
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                </div>
                <ul id="course_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-list"></i>
                        <a href="{{ url('/read/courses') }}" class="mr-1">لیست</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-plus"></i>
                        <a href="{{ url('/add/course') }}" class="mr-1">اضافه کردن</a>
                    </li>
                </ul>
            </div>


            <div class="px-5">
                <div onclick="OpenItem('employee_item','employee_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div id="employee_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                    <div>
                        <span>کارمندان</span>
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                </div>
                <ul id="employee_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-list"></i>
                        <a href="{{ url('/teachers') }}" class="mr-1">لیست</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                        <i class="fa-solid fa-plus"></i>
                        <a href="{{ url('/add/teacher') }}" class="mr-1">اضافه کردن</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post" action="{{ url('/add/course/') }}">
                @csrf

                <!-- Course Name -->
                <div class="flex flex-col text-right">
                    <label for="course_name" class="mb-2 text-sm font-medium text-gray-700">نام صنف</label>
                    <input type="text" name="course_name" id="course_name" placeholder="نام صنف را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Teacher Name -->
                <div class="flex flex-col text-right">
                    <label for="teacher_id" class="mb-2 text-sm font-medium text-gray-700">استاد</label>
                    <select name="teacher_id" id="teacher_id"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Fees -->
                <div class="flex flex-col text-right">
                    <label for="fees" class="mb-2 text-sm font-medium text-gray-700">فیس</label>
                    <input type="number" name="fees" id="fees" placeholder=" فیس را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Start Date -->
                <div class="flex flex-col text-right">
                    <label for="start_date" class="mb-2 text-sm font-medium text-gray-700">تاریخ شروع</label>
                    <input type="date" name="start_date" id="start_date"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- End Date -->
                <div class="flex flex-col text-right">
                    <label for="end_date" class="mb-2 text-sm font-medium text-gray-700">تاریخ ختم</label>
                    <input type="date" name="end_date" id="end_date"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2 text-right">
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
            document.getElementById("teacher_item").style.display = 'none';
            document.getElementById("teacher_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
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