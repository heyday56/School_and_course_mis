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

        <!-- Content -->
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post"
                action="{{ url('/edit/teacher/' . $teacher->id) }}">
                @csrf

                <!-- First Name -->
                <div class="flex flex-col text-right">
                    <label for="name" class="mb-2 text-sm font-medium text-gray-700">نام</label>
                    <input type="text" name="name" id="name" placeholder="نام را وارد کنید" value="{{ $teacher->name }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Last Name -->
                <div class="flex flex-col text-right">
                    <label for="last_name" class="mb-2 text-sm font-medium text-gray-700">نام خانوادگی</label>
                    <input type="text" name="lastName" id="last_name" placeholder="نام خانوادگی را وارد کنید"
                        value="{{ $teacher->lastName }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Father Name -->
                <div class="flex flex-col text-right">
                    <label for="fatherName" class="mb-2 text-sm font-medium text-gray-700">نام پدر</label>
                    <input type="text" name="fatherName" id="fatherName" placeholder="نام پدر را وارد کنید"
                        value="{{ $teacher->fatherName }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Phone -->
                <div class="flex flex-col text-right">
                    <label for="phone" class="mb-2 text-sm font-medium text-gray-700">شماره تلفن</label>
                    <input type="text" name="phone" id="phone" placeholder="شماره تلفن را وارد کنید"
                        value="{{ $teacher->phone }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>



                <!-- ID Card -->
                <div class="flex flex-col text-right">
                    <label for="idCard" class="mb-2 text-sm font-medium text-gray-700">کد ملی</label>
                    <input type="text" name="idCard" id="idCard" placeholder="کد ملی را وارد کنید"
                        value="{{ $teacher->idCard }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Image -->
                <div class="flex flex-col md:col-span-2 text-right">
                    <label for="image" class="mb-2 text-sm font-medium text-gray-700">آدرس تصویر</label>
                    <input type="text" name="image" id="image" placeholder="آدرس تصویر را وارد کنید"
                        value="{{ $teacher->image }}"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
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

    <!-- Sidebar JS -->
    <script>
        function OpenItem(itemId, iconId) {
            const allItems = ['teacher', 'course', 'student', 'employee'];
            allItems.forEach(id => {
                document.getElementById(id + "_item").style.display = 'none';
                document.getElementById(id + "_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            });

            const item = document.getElementById(itemId);
            const icon = document.getElementById(iconId);

            if (item.style.display === "none") {
                item.style.display = "block";
                icon.innerHTML = '<i class="fa-solid fa-angle-down ml-2"></i>';
            } else {
                item.style.display = "none";
                icon.innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            }
        }
    </script>
</x-app-layout>