<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="max-w-md space-y-1 list-disc list-inside">
                        <li>
                            <a href="{{ route('clicker') }}">EP1 - Clicker</a>
                        </li>
                        <li>
                            <a href="{{ route('clickNewUser') }}">EP2 - Click New User</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
