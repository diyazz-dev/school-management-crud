@extends('layouts.app')


    <!-- Main Content -->

           @section('mainheading')
            <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
            @endsection
       @section('content')
        <!-- Dashboard Grid -->
        <main class="p-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-5 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
    <p class="text-gray-500 text-sm">Students</p>
    <h2 class="text-3xl font-bold text-gray-800 mt-2">500</h2>
</div>
               <div class="bg-white p-5 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
    <p class="text-gray-500 text-sm">Teachers</p>
    <h2 class="text-3xl font-bold text-gray-800 mt-2">25</h2>
</div>
               <div class="bg-white p-5 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
    <p class="text-gray-500 text-sm">Staffs</p>
    <h2 class="text-3xl font-bold text-gray-800 mt-2">12</h2>
</div>
                <div class="bg-white p-5 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
    <p class="text-gray-500 text-sm">Courses</p>
    <h2 class="text-3xl font-bold text-gray-800 mt-2">10</h2>
</div>
            </div>

            <!-- Content Area -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <!-- Recent Activities -->
                <div class="xl:col-span-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <h2 class="text-lg font-semibold mb-4">Recent Announcements</h2>
                    <div class="space-y-3">
                        <div class="p-4 bg-slate-50 rounded-lg text-sm text-slate-700">Onam celebration conducting on Sep12 </div>
                        <div class="p-4 bg-slate-50 rounded-lg text-sm text-slate-700">Model Exams for Grade 10 on Friday</div>
                    </div>
                </div>

                <!-- Quick Access -->
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <h2 class="text-lg font-semibold mb-4">Quick Actions</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition shadow-sm">Add Student</button>
                        <button class="bg-gray-100 text-slate-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">Add Teacher</button>
                         <button class="bg-gray-100 text-slate-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">Add Staff</button>
                          <button class="bg-gray-100 text-slate-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">Add Course</button>

                    </div>
                </div>
            </div>
        </main>
        @endsection
    </div>
</div>

</body>
</html>
