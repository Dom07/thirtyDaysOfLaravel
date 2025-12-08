<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  </head>
</head>
<body class="bg-gray-900">
<header class="bg-gray-900 border-b border-gray-400">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
      </a>
    </div>
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
      <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
    </el-popover-group>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-x-3">
      <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
      <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
    </div>
  </nav>
</header>
<section>
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-grey-900">{{ $heading }}</h1>
      <x-button href="/jobs/create">
        Create Job
      </x-button>
    </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
</section>
</body>
</html>