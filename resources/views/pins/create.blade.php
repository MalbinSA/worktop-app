<x-app-layout>
    <div class="container mx-auto p-8">
        <form class="border-b border-gray-900/10 pb-12 self-center" action="{{route('pins.store')}}" method="post">
            @csrf
            <div class="ml-4 mr-4 ">
                <h2 class="text-base font-semibold leading-7 dark:text-gray-200 text-gray-800">Create new pin</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title"
                               class="block text-sm font-medium leading-6 dark:text-gray-200 text-gray-800">{{__('Title')}}</label>
                        <div class="columns-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                       class="block flex-1 rounded-md py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="title">
                            </div>
                            <label for="flag" class="dark:text-gray-200 text-gray-800">{{__('Flag')}}:</label>
                            <select name="flag_id" id="flag_id" class="rounded-md ml-5 text-sm ">
                                @foreach($flags as $flag)
                                    <option value="{{$flag->id}}">{{$flag->color}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="text"
                                   class="block text-sm font-medium leading-6 dark:text-gray-200 text-gray-800">{{__('Content')}}</label>
                            <div class="mt-2">
                            <textarea id="text" name="text" rows="3"
                                      class="block w-full rounded-md border-0 py-1.5 text-gray-900  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                    class="cursor-pointer justify-end rounded-md bg-blue-500 mt-3 py-3 px-4">{{__('Create')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
