@extends('layouts.app')
@if ($errors->any())
    <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 @section('mainheading')
            <h1 class="text-2xl font-bold text-slate-800">Add Student</h1>
            @endsection
@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 p-6 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg">Student Registration</p>
            <p>Please fill out all the fields.</p>
          </div>

          <div class="lg:col-span-2">
            <form method="POST" action="/students">
                @csrf

              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-5">
                  <label for="full_name">Full Name</label>
                  <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="John Doe" />
                </div>

                <div class="md:col-span-3">
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                @error('email')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
                </div>
                  <div class="md:col-span-2">
                  <label for="city">Registration Number</label>
                  <input type="text" name="reg_no" id="reg_no" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="New York" />
                </div>

                <div class="md:col-span-3">
                  <label for="address">Location</label>
                  <input type="text" name="location" id="location" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="123 Main St" />
                </div>

                <div class="md:col-span-2">
                  <label for="city">Phone Number</label>
                  <input type="text" name="phone" id="phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="987556221" />
               @error('phone')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
                </div>




                <div class="md:col-span-5 text-right">
                  <div class="inline-flex items-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
