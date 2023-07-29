<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your pins') }}
        </h2>
        <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight"
           href="/pins/create">{{__('Create pin')}}</a>
    </x-slot>
    <div class="flex items-center justify-center ">
        <div class="max-w-4xl py-4 gap-4 ml-4 mr-4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex">
                    <div class="w-3/4">
                        <h2 class="text-xl font-semibold mb-2">{{ $pin->title }}</h2>
                    </div>
                    <div class="w-1/4 flex justify-end">
                        <h3>{{$pin->flag->color}}</h3>
                    </div>
                </div>
                <p class="text-gray-600 break-all">{{ $pin->text}}</p>
                <div class="flex justify-end items-end">
                    <p class="text-sm text-gray-400">{{substr($pin->created_at, 0, 10)}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
