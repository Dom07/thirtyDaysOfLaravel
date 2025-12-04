<x-layout>
  <x-slot:heading>
        Edit Job : {{ $job->title }}
  </x-slot:heading>
  <form method="POST" action="/jobs/{{ $job->id }}}">
    @csrf
    @method('PATCH')
    
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        
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
              <input 
                placeholder="Software Engineer" 
                id="title" 
                type="text" 
                name="title" 
                autocomplete="given-name" 
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
                value="{{ $job->title }}"
                required />
            </div>

            @error('title')
              <p class="text-red-500 text-sm mt-2">{{ $error }}</p>
            @enderror

          </div>

          <div class="sm:col-span-3">
            <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
            <div class="mt-2">
              <input 
                placeholder="$100,000" 
                id="salary" 
                type="text" 
                name="salary" 
                autocomplete="family-name" 
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
                required 
                value="{{ $job->salary }}"/>
            </div>

            @error('salary')
              <p class="text-red-500 text-sm mt-2">{{ $error }}</p>
            @enderror

          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-between gap-x-6">
      <div class="flex items-center">
        <button form="delete-form" class="text-red-500 text-sm font-bold cursor-pointer">Delete</button>
      </div>
      <div class="flex items-center gap-x-6">
        <a href="/jobs/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
      </div>
    </div>
  </form>

  <form id="delete-form" method="POST" action="/jobs/{{ $job->id }}" class="hidden">
    @csrf
    @method("DELETE")
  </form>
</x-layout>