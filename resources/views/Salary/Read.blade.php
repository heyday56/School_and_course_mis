<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        @include('layouts.Sidebar')
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit overflow-scroll">
            <table class="w-full table-auto text-right border-separate border-spacing-0 rtl">
                <thead class="bg-gray-100">
                    <tr>
                        <th>عملیات</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">وضعیت</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">تاریخ</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">معاش</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام کارمند</th>
                        <th class="px-6 py-3 text-sm font-semibold text-gray-700">کد</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach ($salaries as $salary)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm flex flex-col items-center">
                                <a href="{{ url('/edit/salary/' . $salary->id) }}"
                                    class="bg-green-500 p-2 rounded-md text-white">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button onclick="confirmDelete({{ $salary->id }})"
                                    class="bg-red-500 p-2 mt-1 rounded-md text-white">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                            @if ($salary->status == 'پرداخت شده')
                                <td class="px-6 py-4 text-sm text-green-400">{{$salary->status}}</td>
                            @elseif($salary->status == 'پرداخت نشده')
                                <td class="px-6 py-4 text-sm text-red-400">{{$salary->status}}</td>
                            @else
                                <td class="px-6 py-4 text-sm text-yellow-400">{{$salary->status}}</td>
                            @endif
                            <td class="px-6 py-4 text-sm">{{$salary->date}}</td>
                            <td class="px-6 py-4 text-sm">{{$salary->amount}}</td>
                            <td class="px-6 py-4 text-sm">{{$salary->employee->name}}</td>
                            <td class="px-6 py-4 text-sm">{{$salary->id}}</td>
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
                window.location.href = '/delete/salary/' + id;
            }
        }
    </script>
</x-app-layout>