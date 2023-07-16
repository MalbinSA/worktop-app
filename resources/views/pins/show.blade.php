<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your pins') }}
        </h2>
        <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight"
           href="/pins/create">{{__('Create pin')}}</a>
    </x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ml-4 mr-4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $pin->title }}</h2>
                    <div class="">
                        <p class="text-gray-600 break-all">{{ $pin->text}}</p>
                    </div>
            </div>
    </div>
</x-app-layout>
