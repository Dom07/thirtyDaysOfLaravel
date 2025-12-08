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
            <x-form-label for="title">Title</x-form-label>
            <x-form-input id="title" name="title" placeholder="Software Engineer" required></x-form-input>
            <x-form-error name="title" />
          </div>

          <div class="sm:col-span-3">
            <x-form-label for="salary">Salary</x-form-label>
            <x-form-input id="salary" name="salary" placeholder="$50,000" required></x-form-input>
            <x-form-error name="salary" />
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a type="button" class="text-sm/6 font-semibold text-white cursor-pointer" href="/jobs">Cancel</a>
      <x-form-button>Save</x-form-button>
    </div>
  </form>
</x-layout>