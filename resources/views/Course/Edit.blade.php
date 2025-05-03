<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')

        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post"
                action="{{ url('/edit/course/' . $course->id) }}">
                @csrf

                <!-- Course Name -->
                <div class="flex flex-col text-right">
                    <label for="course_name" class="mb-2 text-sm font-medium text-gray-700">نام صنف</label>
                    <input type="text" name="course_name" value="{{ $course->course_name }}" id="course_name"
                        placeholder="نام صنف را وارد کنید"
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
                    <input type="number" name="fees" value="{{ $course->fees }}" id="fees"
                        placeholder=" فیس را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Start Date -->
                <div class="flex flex-col text-right">
                    <label for="start_date" class="mb-2 text-sm font-medium text-gray-700">تاریخ شروع</label>
                    <input type="date" name="start_date" value="{{ $course->start_date }}" id="start_date"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- End Date -->
                <div class="flex flex-col text-right">
                    <label for="end_date" class="mb-2 text-sm font-medium text-gray-700">تاریخ ختم</label>
                    <input type="date" name="end_date" value="{{ $course->end_date }}" id="end_date"
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