<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        schoolblue: '#1e40af', // Blue 800
                        schoollight: '#f1f5f9', // Slate 100
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-schoollight font-sans">

<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="bg-white w-64 p-6 flex flex-col border-r border-slate-200">
        <div class="flex items-center gap-2 mb-10">
            {{-- <div class="bg-schoolblue p-2 rounded-lg text-white font-bold"></div> --}}
            <span class="text-xl font-bold text-schoolblue">Indian School Portal</span>
        </div>

        <nav class="space-y-4 flex-grow">
            <a href="/" class="flex items-center gap-3 p-3 rounded-lg bg-blue-50 text-blue-600 font-medium">
                <span>📊</span> Dashboard
            </a>
            <a href="/teachers" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100 transition">
                <span>👩‍🏫</span> Teachers
            </a>
            <a href="/students" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100 transition">
                <span>👨‍🎓</span> Students
            </a>
            <a href="/courses" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-100 transition">
                <span>📚</span> Courses
            </a>
            {{-- <a href="#" class="flex items-center gap-3 text-slate-600 hover:bg-slate-50 p-3 rounded-lg">
                <span>⚙️</span> Settings
            </a> --}}
        </nav>

        {{-- <div class="bg-slate-50 p-4 rounded-xl text-center">
            <p class="text-sm text-slate-600">Need help?</p>
            <button class="bg-schoolblue text-white text-sm w-full py-2 rounded-lg mt-2">Support Center</button>
        </div> --}}
    </aside>
     <div class="flex-1">
        <!-- Top Header -->
        <header class="bg-white shadow-sm border-b border-slate-200 py-4 px-8 flex justify-between items-center">

            @yield('mainheading')



    <div class="flex items-center gap-4">
        <input type="text" placeholder="Search..." class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">

        <div class="w-10 h-10 bg-blue-500 text-white flex items-center justify-center rounded-full">
            A
        </div>
    </div>


        </header>

    <!-- Main Content -->

    @yield('content')
     </div>
</div>

</body>
</html>
