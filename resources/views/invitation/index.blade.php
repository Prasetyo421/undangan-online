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
        @if (sizeOf($invitations) < 1)
            <h1 class="mx-auto">{{ auth()->user()->name }} belum membuat undangan</h1>     
        @endif
        @foreach ($invitations as $invitation)
            <div class="card w-72 h-96 bg-white rounded-md mr-5 shadow-md">
                <img src="{{ asset($invitation->cover_image) }}" alt="{{ $invitation->groom_name . ' & ' . $invitation->bride_name }}" class="w-full h-40 ">
                <div class="p-2">
                    <a href="/invitation/{{ $invitation->slug }}" class="hover:underline">{{ $invitation->groom_name . ' & ' . $invitation->bride_name }}</a>
                    {{-- <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus adipisci odit quae expedita quod velit id architecto maiores quibusdam error suscipit consequatur temporibus fugit, aut, .</p> --}}
                    @if ($invitation->is_active)
                        <form action="">
                            @csrf
                            <textarea name="feedback" id="feedback" cols="30" rows="10" >{{ $invitation->feedback }}</textarea>
                            <button>kirim</button>
                        </form>
                    @else
                        <p>Mau aktifkan undangan?<a href="#" class="mx-2 my-1 rounded-md">Bayar!</a></p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>