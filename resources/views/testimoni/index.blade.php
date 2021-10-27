<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Testimoni</title>

</head>
<body>
    @include('layouts.nav')
    <div class="grid grid-cols-3 gap-12 mt-12 mx-5">
        @if (sizeOf($testimonis) < 1)
            <h1 class="mx-auto">{{ auth()->user()->name }} belum membuat undangan</h1>     
        @endif
        @foreach ($testimonis as $testimoni)
            <div class="card w-72 h-96 bg-white rounded-md mr-5 shadow-md">
                <img src="{{ asset($testimoni->invitation->cover_image) }}" alt="{{ $testimoni->invitation->groom_name . ' & ' . $testimoni->invitation->bride_name }}" class="w-full h-40 ">
                <div class="p-2">
                    <a href="/invitation/{{ $testimoni->invitation->slug }}" class="hover:underline">{{ $testimoni->invitation->groom_name . ' & ' . $testimoni->invitation->bride_name }}</a>
                    <p>{{ $testimoni->feedback }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>