<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your pins') }}
        </h2>
        <div class="flex py-2">
            <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight ml-4"
               href="{{ route('pins.create') }}">{{ __('Create pin') }}</a>
            <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight ml-4"
               href="{{route('wishes.index')}}">{{ __('Wish list') }}</a>
        </div>
    </x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-4 ml-4 mr-4">
        @foreach ($wishes as $wish)
            <div class="grid bg-white rounded-lg shadow-md p-4">
                <div class="flex">
                    <div class="w-3/4">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="">{{ $wish->title }}</a>
                        </h2>
                    </div>
                    <div class="w-1/4">
                        {{$wish->price}}
                    </div>
                </div>
                <div>
                    <img link="{{$wish->link}}" alt="{{$wish->link}}">
                </div>
                <a href="{{$wish->link}}">{{$wish->link}}</a>
                <div>
                    <p class="text-gray-600">{{ $wish->description }}</p>
                </div>
                <div class="grid justify-self-end">
                    <p class="text-sm text-gray-400">{{ substr($wish->created_at,0,10) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
