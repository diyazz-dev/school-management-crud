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
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500 text-sm">Total Students</p>
                    <p class="text-3xl font-bold text-slate-950">1,250</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500 text-sm">Total Teachers</p>
                    <p class="text-3xl font-bold text-slate-950">85</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500 text-sm">Courses</p>
                    <p class="text-3xl font-bold text-slate-950">42</p>
                </div>
                {{-- <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500 text-sm">Events</p>
                    <p class="text-3xl font-bold text-slate-950">3</p>
                </div> --}}
            </div>

            <!-- Content Area -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <!-- Recent Activities -->
                <div class="xl:col-span-2 bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <h2 class="text-lg font-semibold mb-4">Recent Announcements</h2>
                    <div class="space-y-3">
                        <div class="p-4 bg-slate-50 rounded-lg text-sm text-slate-700">📚 Library closed for renovation (April 5-10)</div>
                        <div class="p-4 bg-slate-50 rounded-lg text-sm text-slate-700">⚽ Football tryouts for Grade 10 on Friday</div>
                    </div>
                </div>

                <!-- Quick Access -->
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <h2 class="text-lg font-semibold mb-4">Quick Actions</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="bg-slate-100 text-slate-700 p-3 rounded-lg text-sm hover:bg-blue-50 hover:text-schoolblue">Add Student</button>
                        <button class="bg-slate-100 text-slate-700 p-3 rounded-lg text-sm hover:bg-blue-50 hover:text-schoolblue">Add Teacher</button>

                    </div>
                </div>
            </div>
        </main>
        @endsection
    </div>
</div>

</body>
</html>
