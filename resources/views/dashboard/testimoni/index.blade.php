<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>My invitations</title>

</head>
<body>
    @include('layouts.nav')
    <div class="grid grid-cols-3 gap-12 mt-12 mx-5">
        @foreach ($invitations as $invitation)
            <div class="card w-72 h-96 bg-white rounded-md mr-5 shadow-md">
                <img src="{{ asset($invitation->cover_image) }}" alt="{{ $invitation->groom_name . ' & ' . $invitation->bride_name }}" class="w-full h-40 ">
                <div class="p-2">
                    <a href="/dashboard/show/{{ $invitation->slug }}" class="hover:underline">{{ $invitation->groom_name . ' & ' . $invitation->bride_name }}</a>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus adipisci odit quae expedita quod velit id architecto maiores quibusdam error suscipit consequatur temporibus fugit, aut, .</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>