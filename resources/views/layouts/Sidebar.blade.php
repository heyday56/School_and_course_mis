<!-- Sidebar -->
<div class="sidebare bg-white pt-5 w-1/5 h-full sticky min-h-screen">
    <div class="w-full my-5 flex flex-col items-center">
        <span><img src="{{ asset('images/school.jpg') }}" alt="School Logo"
                class="w-24 h-24 rounded-full object-cover mb-4 shadow-lg" />
        </span>
        <span>
            <h2>Solh</h2>
        </span>

    </div>
    <div class="px-5">
        <div onclick="OpenItem('employee_item','employee_icon')"
            class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
            <div id="employee_icon">
                <i class="fa-solid fa-angle-up ml-2"></i>
            </div>
            <div>
                <span>کارمندان</span>
                <i class="fa-solid fa-user mr-1"></i>
            </div>
        </div>
        <ul id="employee_item" style="display:none;" class="ml-2">
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-list"></i>
                <a href="{{ url('/read/employees') }}" class="mr-1">لیست</a>
            </li>
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-plus"></i>
                <a href="{{ url('/add/employee') }}" class="mr-1">اضافه کردن</a>
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


    <!-- Salary -->
    <div class="px-5">
        <div onclick="OpenItem('salary_item','salary_icon')"
            class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
            <div id="salary_icon">
                <i class="fa-solid fa-angle-up ml-2"></i>
            </div>
            <div>
                <span>معاش</span>
                <i class="fa-solid fa-dollar-sign"></i>
            </div>
        </div>
        <ul id="salary_item" style="display:none;" class="ml-2">
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-list"></i>
                <a href="{{ url('/read/salaries') }}" class="mr-1">لیست</a>
            </li>
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-plus"></i>
                <a href="{{ url('/add/salary') }}" class="mr-1">اضافه کردن</a>
            </li>
        </ul>
    </div>

    <!-- Student Class -->
    <div class="px-5">
        <div onclick="OpenItem('student_class_item','student_class_icon')"
            class="my-1.5 p-1 px-2  rounded-md hover:bg-green-500 flex flex-row justify-between">
            <div id="student_class_icon">
                <i class="fa-solid fa-angle-up ml-2"></i>
            </div>
            <div>
                <span>درس</span>
                <i class="fa-solid fa-person-chalkboard"></i>
            </div>
        </div>
        <ul id="student_class_item" style="display:none;" class="ml-2">
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-list"></i>
                <a href="{{ url('/read/student_classes') }}" class="mr-1">لیست</a>
            </li>
            <li class="py-1 px-2  rounded-md hover:bg-green-500 flex flex-row-reverse items-end">
                <i class="fa-solid fa-plus"></i>
                <a href="{{ url('/add/student_class') }}" class="mr-1">اضافه کردن</a>
            </li>
        </ul>
    </div>

</div>