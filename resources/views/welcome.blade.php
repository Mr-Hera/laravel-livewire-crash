<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Livewire</title>
    @livewireStyles
</head>
<body>
    <h1>Livewire Crash Course</h1>
    {{-- <livewire:helloworld/> --}}
    @livewire('helloworld', ['text' => 'Changed quote...'])
    @livewire('store-student')

    @livewireScripts
</body>
</html>