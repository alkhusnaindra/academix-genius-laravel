@extends("layouts.main")
@section('title', 'Dashboard')


@section("content")
<div class="grid w-full">
  <div class="flex gap-4 mb-4 ">
    <div class="flex w-[70%] items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
        </svg>
      </p>
      <h1>Selamat Datang di Website Kami!</h1>
      <p>Ini adalah halaman utama.</p>
    </div>
    <div class="flex w-[30%] items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
      <p class="text-2xl text-gray-400 dark:text-gray-500">
        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
        </svg>
      </p>
    </div>
  </div>

  @endsection