<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')

        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit overflow-scroll">
            <table class="w-full table-auto text-right border-separate border-spacing-0 rtl">
                <thead class="bg-gray-100">
                    <tr>
                        <th>عملیات</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تصویر</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تاریخ تولد</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">کارت شناسایی
                        </th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تلفن اقارب</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام پدر</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام خانوادگی
                        </th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">کد</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($students as $student)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm flex flex-col items-center">
                                <a href="{{ url('/edit/student/' . $student->id) }}"
                                    class="bg-green-500 p-2 rounded-md text-white">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>

                                <button onclick="confirmDelete({{ $student->id }})"
                                    class="bg-red-500 p-2 mt-1 rounded-md text-white">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                <button onclick="confirmDelete({{ $student->id }})"
                                    class="bg-green-500 p-2 mt-1 rounded-md text-white">
                                    <i class="fa-solid fa-print"></i>
                                </button>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <img src="{{ asset($student->image) }}" class="w-20 h-20">
                            </td>
                            <td class="px-6 py-4 text-sm">{{$student->birthday}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->idCard}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->family_phone}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->fatherName}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->lastName}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->name}}</td>
                            <td class="px-6 py-4 text-sm">{{$student->id}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

        function confirmDelete(id) {
            if (confirm('آیا می خواهید حذف کنید؟')) {
                // Redirect to the delete route if the user confirms
                window.location.href = '/delete/student/' + id;
            }
        }

        function confirmDelete(studentId) {
            // Open the print view in a new window
            var printWindow = window.open('{{ route('student.print', ['id' => '__studentId__']) }}'.replace('__studentId__', studentId));

            // After the new page loads, call the print function
            printWindow.onload = function () {
                printWindow.print();
            };
        }
    </script>
</x-app-layout>