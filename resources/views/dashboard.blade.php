<x-app-layout>
    <div class="container h-screen flex flex-row justify-between  rounded-lg rounded-br-lg">
        <div class="sidebare bg-white pt-5 w-1/5 h-full sticky">
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
                    <div><i class="fa-solid fa-person-chalkboard mr-1"></i>
                        <span>Teacher</span>
                    </div>
                    <div id="teacher_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                </div>
                <ul id="teacher_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-list"></i>
                        <a href="{{ url('/teachers') }}" class="ml-1">Teachers</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-plus"></i>
                        <a href="#" class="ml-1">Add</a>
                    </li>
                </ul>
            </div>
            <div class="px-5">
                <div onclick="OpenItem('subject_item','subject_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div><i class="fa-solid fa-book-open"></i>

                        <span>Subject</span>
                    </div>
                    <div id="subject_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                </div>
                <ul id="subject_item" style="display:none;" class="ml-2">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-list"></i>
                        <a href="#" class="ml-1">Subjects</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-plus"></i>
                        <a href="#" class="ml-1">Add</a>
                    </li>
                </ul>
            </div>
            <div class="px-5">
                <div onclick="OpenItem('student_item','student_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div> <i class="fa-solid fa-graduation-cap mr-1"></i>

                        <span>Student</span>
                    </div>
                    <div id="student_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                </div>
                <ul id="student_item" style="display:none;" class="ml-1">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-list"></i>
                        <a href="#" class="ml-1">Subjects</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-plus"></i>
                        <a href="#" class="ml-1">Add</a>
                    </li>
                </ul>
            </div>

            <div class="px-5">
                <div onclick="OpenItem('employee_item','employee_icon')"
                    class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
                    <div> <i class="fa-solid fa-user mr-1"></i>
                        <span>Employee</span>
                    </div>
                    <div id="employee_icon">
                        <i class="fa-solid fa-angle-up ml-2"></i>
                    </div>
                </div>
                <ul id="employee_item" style="display:none;" class="ml-1">
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-list"></i>
                        <a href="#" class="ml-1">Subjects</a>
                    </li>
                    <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row items-center">
                        <i class="fa-solid fa-plus"></i>
                        <a href="#" class="ml-1">Add</a>
                    </li>
                </ul>
            </div>


        </div>
        <div class="bg-white w-2/3 mt-10 p-5 rounded-lg shadow-lg h-fit">
            <table class="w-full table-auto text-left border-separate border-spacing-0">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">ID</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">Last Name</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">Phone</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">101</td>
                        <td class="px-6 py-4 text-sm">Ali</td>
                        <td class="px-6 py-4 text-sm">Hassani</td>
                        <td class="px-6 py-4 text-sm">+93798573634</td>
                        <td class="px-6 py-4 text-sm">Grade nine</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#" class="bg-green-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="bg-red-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>

                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">102</td>
                        <td class="px-6 py-4 text-sm">Sara</td>
                        <td class="px-6 py-4 text-sm">Noori</td>
                        <td class="px-6 py-4 text-sm">+93798647254</td>
                        <td class="px-6 py-4 text-sm">Grade ten</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#" class="bg-green-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="bg-red-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">103</td>
                        <td class="px-6 py-4 text-sm">John</td>
                        <td class="px-6 py-4 text-sm">Doe</td>
                        <td class="px-6 py-4 text-sm">+93798456234</td>
                        <td class="px-6 py-4 text-sm">Grade eleven</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#" class="bg-green-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="bg-red-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">104</td>
                        <td class="px-6 py-4 text-sm">Emily</td>
                        <td class="px-6 py-4 text-sm">Khan</td>
                        <td class="px-6 py-4 text-sm">+93798347261</td>
                        <td class="px-6 py-4 text-sm">Grade twelve</td>
                        <td class="px-6 py-4 text-sm">
                            <a href="#" class="bg-green-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a href="#" class="bg-red-500 p-2 rounded-md text-white"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <script>
        function OpenItem(itemId, iconId) {
            document.getElementById("teacher_item").style.display = 'none';
            document.getElementById("teacher_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
            document.getElementById("subject_item").style.display = 'none';
            document.getElementById("subject_icon").innerHTML = '<i class="fa-solid fa-angle-up ml-2"></i>';
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