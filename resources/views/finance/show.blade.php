<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Finance') }}
        </h2>
    </x-slot>
    <div>
        <h4 class="text-white-500">{{$currentYear}}</h4>
    </div>
    <div class="grid grid-cols-3 ml-3 mr-3 gap-3">
        @foreach ($CategoryTransactionsByMonth as $category => $value)
            <div class="grid mr-3">
                <div class="rounded-3 bg-white">
                    <h3>{{ $month }}</h3>
                    <table class="table-auto border border-separate">
                        <thead>
                        <tr>
{{--                            <th class="border border-slate-600">Дата</th>--}}
{{--                            <th class="border border-slate-600">Тип</th>--}}
                            <th class="border border-slate-600">Категория</th>
                            <th class="border border-slate-600">Сумма</th>
                            <!-- Другие заголовки столбцов -->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td class="border border-slate-700 m-3">{{ $transaction->date }}</td>
                                <td class="border border-slate-700 m-3">{{ $transaction->type == 'income' ? '+' : '-' }}</td>
                                <td class="border border-slate-700 m-3">{{ $transaction->category->name }}</td>
                                <td class="border border-slate-700 m-3">{{ $transaction->value }}</td>

                                <!-- Другие ячейки данных -->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
