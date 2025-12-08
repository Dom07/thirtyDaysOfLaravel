<x-layout>
  <x-slot:heading>
        Register 
  </x-slot:heading>
  <form method="POST" action="/register">
    @csrf
    
    <div class="space-y-12">
      <div class>
        <p class="mt-1 text-sm/6 text-gray-400">Please fill in the details below.</p>

        @if($errors->any())
          <div class="mt-3 p-5">
              @foreach($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
              @endforeach
          </div>
        @endif

        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-3">
            <div class="max-w-md">
                <x-form-label for="name">Name</x-form-label>
                <x-form-input id="name" name="name" placeholder="John Doe" required></x-form-input>
                <x-form-error name="name" />
            </div>

            <div class="max-w-md">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input id="email" name="email" placeholder="johnDoe@gmail.com" required type="email"></x-form-input>
                <x-form-error name="email" />
            </div>
        
            <div class="max-w-md">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input id="password" name="password" type="password" required></x-form-input>
                <x-form-error name="password" />
            </div>

            <div class="max-w-md">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input id="password_confirmation" name="password_confirmation" type="password" required></x-form-input>
                <x-form-error name="password_confirmation" />
            </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-start gap-x-6">
      <a type="button" class="text-sm/6 font-semibold text-white cursor-pointer" href="/">Cancel</a>
      <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>