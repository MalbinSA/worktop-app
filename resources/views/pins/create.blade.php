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
<div class="">
    <form class="border rounded-lg" action="{{route('pins.store')}}" method="post">
        @csrf
        <div class="flex-col mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div>
                <label for="flag"> Flag</label><br>
                <select name="flag_id" id="flag_id" class="border rounded-md">
                    @foreach($flags as $flag)
                        <option {{old('flag_id') == $flag->id ? 'selected' : ''}}
                                value="{{$flag->id}}">{{$flag->color}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="title">Title</label><br>
                <input value="{{old('title')}}" type="text" name="title" id="title" class="rounded-md">
            </div>
            <div class="mb-5">
                <label for="text"> Content </label><br>
                <input value="{{old('text')}}" type="text" name="text" id="text" class="rounded-md">
            </div>
            <button type="submit" class="rounded dark:ring-1">Create</button>
        </div>
    </form>
</div>
</body>
</html>
