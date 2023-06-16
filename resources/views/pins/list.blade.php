<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<nav>
    <div>
        <a href="{{'pins/create'}}">Create new pin</a>
    </div>
</nav>
<div>
    <ul role="list" class="divide-y divide-gray-100">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                </div>
            </div>
            <div class="hidden sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                     src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
                </div>
            </div>
            <div class="hidden sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                    <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p>
            </div>
        </li>
    </ul>
</div>
</body>
</html>
