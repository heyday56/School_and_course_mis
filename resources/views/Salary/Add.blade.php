<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')
        <div class="bg-white w-2/3 mx-auto mt-10 p-10 rounded-xl shadow-xl h-fit" dir="rtl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post" action="{{ url('/add/salary/') }}">
                @csrf

                <!-- Salary amount -->
                <div class="flex flex-col text-right">
                    <label for="amount" class="mb-2 text-sm font-medium text-gray-700">مقدار</label>
                    <input type="number" min="0" name="amount" id="amount" placeholder="مقدار را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- employee -->
                <div class="flex flex-col text-right">
                    <label for="employee_id" class="mb-2 text-sm font-medium text-gray-700">استاد</label>
                    <select name="employee_id" id="employee_id"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Date -->
                <div class="flex flex-col text-right">
                    <label for="date" class="mb-2 text-sm font-medium text-gray-700">تاریخ</label>
                    <input type="date" name="date" id="date" placeholder="تاریخ در را وارد کنید"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Status -->
                <div class="flex flex-col text-right">
                    <label for="status" class="mb-2 text-sm font-medium text-gray-700">وضعیت</label>
                    <select name="status" id="status"
                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="پرداخت شده">پرداخت شده</option>
                        <option value="پرداخت نشده">پرداخت نشده</option>
                        <option value="در حال بررسی">در حال بررسی</option>
                    </select>
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

</x-app-layout>