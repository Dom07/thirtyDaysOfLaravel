<x-layout>
     <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-xl font-bold">{{ $job['title'] }} </h1>

    <p>This job pays: {{ $job['salary'] }}</p>
</x-layout>