<x-layout>
     <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-xl font-bold text-white">{{ $job->title }} </h1>

    <p class="text-white">This job pays: {{ $job->salary }}</p>

    <p class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>