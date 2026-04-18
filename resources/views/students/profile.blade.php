@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100 p-4 md:p-6">
  <!-- Header -->
  <div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-gray-800">Student Profile</h1>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">Edit Profile</button>
  </div>

  <!-- Main Content Grid -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Profile Card -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 col-span-1">
      <div class="flex flex-col items-center">
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=100&auto=format&fit=crop" alt="Student" class="w-24 h-24 rounded-full mb-4 border-4 border-gray-100">
        <h2 class="text-xl font-semibold text-gray-900">John Doe</h2>
        <p class="text-sm text-gray-500">Student ID: #12345</p>
        <span class="mt-3 inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
      </div>
      <div class="mt-6 border-t pt-4 text-sm text-gray-600 space-y-2">
        <p><strong>Email:</strong> john.doe@school.edu</p>
        <p><strong>Class:</strong> Grade 10 - A</p>
        <p><strong>Joined:</strong> Sept 2023</p>
      </div>
    </div>

    <!-- Details/Performance -->
    <div class="md:col-span-2 space-y-6">
      <!-- Academic Summary -->
      <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Academic Summary</h3>
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-blue-50 p-4 rounded-lg">
            <p class="text-sm text-blue-700">GPA</p>
            <p class="text-2xl font-bold text-blue-900">3.8</p>
          </div>
          <div class="bg-green-50 p-4 rounded-lg">
            <p class="text-sm text-green-700">Attendance</p>
            <p class="text-2xl font-bold text-green-900">95%</p>
          </div>
        </div>
      </div>

      <!-- Recent Activity -->
      <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h3>
        <ul class="space-y-3 text-sm">
          <li class="flex justify-between border-b pb-2">
            <span>Completed Math Quiz</span>
            <span class="text-gray-500">2 hours ago</span>
          </li>
          <li class="flex justify-between border-b pb-2">
            <span>Submitted Science Project</span>
            <span class="text-gray-500">Yesterday</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
