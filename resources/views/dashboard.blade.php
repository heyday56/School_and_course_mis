<x-app-layout>
    <div class="container min-h-screen min-w-full max-w-full flex flex-row-reverse justify-start rounded-lg">
        <!-- Sidebar -->
        @include('layouts.Sidebar')


        <!-- Main Content Area -->
        <div class="w-full p-6" dir="rtl" style="font-family: Vazir, Tahoma, sans-serif;">
            <!-- عنوان داشبورد با -->
            <div class="bg-green-600 text-white text-center py-6 rounded-xl shadow-lg mb-10">
                <h1 class="text-4xl font-extrabold tracking-wide">داشبورد مدیریت</h1>
                <p class="text-lg mt-2 mb-6">خلاصه‌ی معلومات اداری و مالی</p>

                <!-- فرم -->
                <form class="inline-flex items-center justify-center gap-4" method="post"
                    action="{{ url('/dashboard/filter') }}">
                    @csrf
                    <input type="date" name="date"
                        class="rounded-lg px-4 py-2 text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-green-400"
                        placeholder="انتخاب تاریخ" required>
                    <button type="submit"
                        class="bg-white text-green-600 font-semibold px-6 py-2 rounded-lg hover:bg-green-100 transition-colors duration-300">
                        مشاهده
                    </button>
                </form>
            </div>



            <!-- بخش کارت‌ها -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 px-4">
                <!-- کارت نمونه -->
                <div
                    class="bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-2xl p-6 text-center border-t-4 border-blue-500">
                    <div class="text-5xl mb-3 text-blue-500">
                        💰
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">جمع کل معاشات</h2>
                    <p class="text-2xl font-bold text-blue-600">{{ number_format($total_salary) }}</p>
                </div>

                <div
                    class="bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-2xl p-6 text-center border-t-4 border-green-500">
                    <div class="text-5xl mb-3 text-green-500">
                        💵
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">جمع کل فیس‌ها</h2>
                    <p class="text-2xl font-bold text-green-600">{{ number_format($total_fee) }}</p>
                </div>

                <div
                    class="bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-2xl p-6 text-center border-t-4 border-purple-500">
                    <div class="text-5xl mb-3 text-purple-500">
                        🧑‍🎓
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">مجموع محصلین</h2>
                    <p class="text-2xl font-bold text-purple-600">{{ number_format($total_student) }} نفر</p>
                </div>

                <div
                    class="bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-2xl p-6 text-center border-t-4 border-red-500">
                    <div class="text-5xl mb-3 text-red-500">
                        👨‍🏫
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">مجموع کارمندان</h2>
                    <p class="text-2xl font-bold text-red-600">{{ number_format($total_teacher) }} نفر</p>
                </div>

                <div
                    class="bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300 rounded-2xl p-6 text-center border-t-4 border-yellow-500">
                    <div class="text-5xl mb-3 text-yellow-500">
                        📚
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-1">مجموع کورس‌ها</h2>
                    <p class="text-2xl font-bold text-yellow-600">{{ number_format($total_course) }} کورس</p>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>