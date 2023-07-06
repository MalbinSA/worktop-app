<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your pins') }}
        </h2>
        <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight"
           href="/pins/create">{{__('Create pin')}}</a>
    </x-slot>
    <div class="bg-white rounded-lg shadow-md p-4 mx-auto">
        <div class="flex items-center mb-4">
            <h2 class="text-xl font-semibold mr-2">{{ $pin->title }}</h2>
            <div class="bg-red-500 rounded-b h-15 w-14">
                {{$flag->color}}
            </div>
        </div>
        <p class="text-gray-600">{{$pin->text}}</p>
            <p class="text-gray-300 text-sm">{{$pin->created_at}}</p>
    </div>
</x-app-layout>
