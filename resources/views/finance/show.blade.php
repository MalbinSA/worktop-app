<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Finance') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-3">
        @foreach($expenses as $expense)
        <table>

        </table>


    </div>

</x-app-layout>
