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
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- First Name -->
                <div class="flex flex-col">
                    <label for="name" class="mb-2 text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter first name"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Last Name -->
                <div class="flex flex-col">
                    <label for="last_name" class="mb-2 text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Enter last name"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Phone -->
                <div class="flex flex-col">
                    <label for="phone" class="mb-2 text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter phone number"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Grade -->
                <div class="flex flex-col">
                    <label for="grade" class="mb-2 text-sm font-medium text-gray-700">Grade</label>
                    <input type="text" name="grade" id="grade" placeholder="Enter grade"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Student Name -->
                <div class="flex flex-col md:col-span-2">
                    <label for="student_name" class="mb-2 text-sm font-medium text-gray-700">Student Name</label>
                    <input type="text" name="student_name" id="student_name" placeholder="Enter full student name"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Submit Button -->
                <div class="md:col-span-2 text-right">
                    <button type="submit"
                        class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Submit
                    </button>
                </div>
            </form>
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