<div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
    <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <!-- First Name -->
            <div class="flex flex-col text-right">
                <label for="name" class="mb-2 text-sm font-medium text-gray-700">نام</label>
                <input type="text" name="name" id="name" placeholder="نام را وارد کنید" value="{{ $student->name }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Last Name -->
            <div class="flex flex-col text-right">
                <label for="last_name" class="mb-2 text-sm font-medium text-gray-700">نام خانوادگی</label>
                <input type="text" name="lastName" id="last_name" placeholder="نام خانوادگی را وارد کنید"
                    value="{{ $student->lastName }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Father Name -->
            <div class="flex flex-col text-right">
                <label for="fatherName" class="mb-2 text-sm font-medium text-gray-700">نام پدر</label>
                <input type="text" name="fatherName" id="fatherName" placeholder="نام پدر را وارد کنید"
                    value="{{ $student->fatherName }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Family Phone -->
            <div class="flex flex-col text-right">
                <label for="family_phone" class="mb-2 text-sm font-medium text-gray-700">شماره تلقن اقارب</label>
                <input type="text" name="family_phone" id="family_phone" placeholder="شماره تلفن را وارد کنید"
                    value="{{ $student->family_phone }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- ID Card -->
            <div class="flex flex-col text-right">
                <label for="idCard" class="mb-2 text-sm font-medium text-gray-700">کد ملی</label>
                <input type="text" name="idCard" id="idCard" placeholder="کد ملی را وارد کنید"
                    value="{{ $student->idCard }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Birth Day -->
            <div class="flex flex-col text-right">
                <label for="birthday" class="mb-2 text-sm font-medium text-gray-700">تاریخ تولد</label>
                <input type="date" name="birthday" id="birthday" placeholder=" تاریخ تولد را وارد کنید "
                    value="{{ $student->birthday }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Image -->
            <div class="flex flex-col md:col-span-2 text-right">
                <label for="image" class="mb-2 text-sm font-medium text-gray-700">آدرس تصویر</label>
                <input type="text" name="image" id="image" placeholder="آدرس تصویر را وارد کنید"
                    value="{{ $student->image }}"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

        </form>

        <table class="w-full table-auto text-right border-separate border-spacing-0 rtl mt-5">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-sm font-semibold text-gray-700">آی دی</th>
                    <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام شاگرد</th>
                    <th class="px-6 py-3 text-sm font-semibold text-gray-700">نام صنف</th>
                    <th class="px-6 py-3 text-sm font-semibold text-gray-700">تاریخ</th>
                    <th class="px-6 py-3 text-sm font-semibold text-gray-700">نمره</th>

                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($student_classes as $student_class)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">{{$student_class->id}}</td>
                        <td class="px-6 py-4 text-sm">{{$student_class->student_id}}</td>
                        <td class="px-6 py-4 text-sm">{{$student_class->course_id}}</td>
                        <td class="px-6 py-4 text-sm">{{$student_class->date_join}}</td>
                        <td class="px-6 py-4 text-sm">{{$student_class->score}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>