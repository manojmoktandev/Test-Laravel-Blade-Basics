<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Layout') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Task: change the layout from layouts/app.blade.php --}}
                    {{-- to layouts/main.blade.php --}}
                    @include('layouts.main')
                    Please change layout.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
