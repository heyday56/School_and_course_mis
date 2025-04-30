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
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit">
            <table class="w-full table-auto text-right border-separate border-spacing-0 rtl">
                <thead class="bg-gray-100">
                    <tr>





                        <th>عملیات</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تاریخ ختم</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تاریخ شروع</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">فیس</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">استاد</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام صنف</th>





                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($courses as $course)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm flex flex-col items-center">
                                <a href="{{ url('/edit/course/' . $course->id) }}"
                                    class="bg-green-500 p-2 rounded-md text-white">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button onclick="confirmDelete({{ $course->id }})"
                                    class="bg-red-500 p-2 mt-1 rounded-md text-white">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                            <td class="px-6 py-4 text-sm">{{$course->end_date}}</td>
                            <td class="px-6 py-4 text-sm">{{$course->start_date}}</td>
                            <td class="px-6 py-4 text-sm">{{$course->fees}}</td>
                            <td class="px-6 py-4 text-sm">{{$course->teacher_id}}</td>
                            <td class="px-6 py-4 text-sm">{{$course->course_name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

        function confirmDelete(id) {
            if (confirm('آیا می خواهید حذف کنید؟')) {
                // Redirect to the delete route if the user confirms
                window.location.href = '/delete/course/' + id;
            }
        }
    </script>
</x-app-layout>