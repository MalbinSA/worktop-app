<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your pins') }}
        </h2>
        <div class="flex py-2">
            <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight ml-4"
               href="{{route('pins.create')}}">{{__('Create pin')}}</a>
            <a class="font-semibold text-gray-800 dark:text-gray-200 leading-tight ml-4"
               href="{{ route('wishes.index') }}">{{ __('Wish list') }}</a>
        </div>
    </x-slot>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 py-4 ml-4 mr-4">
        @foreach ($pins as $pin)
            <div class="grid bg-white rounded-lg shadow-md p-4">
                <div class="flex">
                    <div class="w-3/4">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="{{route('pins.show', ['pin_id'=> $pin->id])}}">{{ $pin->title }}</a>
                        </h2>
                    </div>
                    <div class="w-1/4 flex justify-end">
                        <h3>{{$pin->flag->color}}</h3>
                    </div>
                </div>
                @if(mb_strlen($pin->text) >= 100)
                    <p class="text-gray-600 break-all">{{ substr($pin->text,0,100) . '...' }}
                        <a href={{ route('pins.show', ['pin_id' => $pin->id]) }} class="underline"> Read next-></a>
                    </p>
                @else
                    <p class="text-gray-600">{{ $pin->text}}</p>
                @endif
                <div class="grid justify-self-end">
                    <p class="text-sm text-gray-400">{{substr($pin->created_at,0,10)}}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
