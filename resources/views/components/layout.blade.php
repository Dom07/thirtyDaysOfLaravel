<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
</head>
<body>
<header class="bg-gray-900">
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
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <x-nav-link class="text-sm/6 font-semibold text-white cursor-pointer" type="button">Log in <span aria-hidden="true">&rarr;</span></x-nav-link>
    </div>
  </nav>
</header>
<section>
  <div class="container mx-auto p-4 mt-5">
    <h1 class="text-4xl font-bold text-blue-600 mb-3">{{ $heading }}</h1>
    <hr>
    <div class="mt-5">
      {{ $slot }}
    </div>
  </div>
</section>
</body>
</html>