<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div>
    <p class="text-3xl font-bold underline"> Testing css preprocessor</p>
</div>
<div>
    <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <span class="absolute inset-0"></span>
                Ближайший план действий:
            </h3>
            <ul>
                <li class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">
                   1. Правильно оформить страницу просмотра всех заметок в формате "заголовок" + "первые пару строк"
                </li>
                <li class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">
                    2. Создать страницу создание новых заметок
                </li>
                <li class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">
                    3. Создать страницу просмотра и редактирования отдельной заметки
                </li>
                <li class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">
                    4. Написать бар навигации по разделам "главная" "заметки" "финансы" "ежедневник"
                </li>
            </ul>
        </div>
    </article>
</div>
</body>
</html>
