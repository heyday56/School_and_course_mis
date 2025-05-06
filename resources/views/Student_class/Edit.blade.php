<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')

        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post"
                action="{{ url('/edit/student_class/' . $student_class->id) }}">
                @csrf

                <!-- Course id -->
                <div class="flex flex-col text-right">
                    <label for="course_id" class="mb-2 text-sm font-medium text-gray-700">صنف</label>
                    <select name="course_id" id="course_id"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @foreach ($courses as $course)
                            @if ($course->id == $student_class->course_id)
                                <option value="{{ $course->id }}" selected>{{ $course->course_name }}</option>
                            @else
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endif

                        @endforeach
                    </select>
                </div>

                <!-- Student -->
                <div class="flex flex-col text-right">
                    <label for="student_id" class="mb-2 text-sm font-medium text-gray-700">شاگرد</label>
                    <select name="student_id" id="student_id"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @foreach ($students as $student)
                            @if ($student->id == $student_class->student_id)
                                <option value="{{ $student->id }}" selected>{{ $student->name }}</option>
                            @else
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <!-- Date Joined -->
                <div class="flex flex-col text-right">
                    <label for="date_join" class="mb-2 text-sm font-medium text-gray-700">تاریخ</label>
                    <input type="date" name="date_join" id="date_join" value="{{ $student_class->date_join }}"
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