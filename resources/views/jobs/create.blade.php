<x-layout>
  <x-slot:heading>
        Create Job
  </x-slot:heading>
  <form method="POST" action="/jobs">
    @csrf
    
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <p class="mt-1 text-sm/6 text-gray-400">Please fill in the details below.</p>

        @if($errors->any())
          <div class="mt-5 p-5">
              @foreach($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
              @endforeach
          </div>
        @endif

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
            <div class="mt-2">
              <input placeholder="Software Engineer" id="title" type="text" name="title" autocomplete="given-name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required />
            </div>

            @error('title')
              <p class="text-red-500 text-sm mt-2">{{ $error }}</p>
            @enderror

          </div>

          <div class="sm:col-span-3">
            <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
            <div class="mt-2">
              <input placeholder="$100,000" id="salary" type="text" name="salary" autocomplete="family-name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required />
            </div>

            @error('salary')
              <p class="text-red-500 text-sm mt-2">{{ $error }}</p>
            @enderror

          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
    </div>
  </form>
</x-layout>