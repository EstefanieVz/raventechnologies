<x-app-layout class="bg-zinc-700">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight bg-">
            {{ __('Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-stone-800 dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("¡Estas Logueado!") }}
                </div>
            </div>
        </div>
    </div>

    </div>
</x-app-layout>
