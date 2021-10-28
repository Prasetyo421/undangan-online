<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $invitation->groom_name . ' & ' . $invitation->bride_name }}</title>
</head>
<body>
    <div class="container:2xl bg-gray-100">
        <header class="flex items-center justify-center h-14 bg-pink-400 ">
            <a href="#beranda" class="ml-12 text-white text-lg">Beranda</a>
            <a href="#bride" class="ml-12 text-white text-lg">Tentang mempelai</a>
            <a href="#wedding" class="ml-12 text-white text-lg">Acara</a>
            <a href="#guest-book" class="ml-12 text-white text-lg">Buku tamu</a>
        </header>
        <div id="beranda" class="h-screen text-center border-b-8 border-pink-300 pt-14">
            <h1 class="text-2xl">
                We’re Getting Married<br>
                {{ $invitation->day . ', ' . $invitation->wedding_date }}
            </h1>
            <h1 class="text-5xl mb-7">
                {{ $invitation->groom_name . ' & ' . $invitation->bride_name }}
            </h1>
            <div class="flex justify-center">
                <img src="{{ asset($invitation->groom_image) }}" alt="{{ $invitation->groom_name }}" class="rounded-full h-72 w-72 flex items-center justify-center border-8 border-pink-300">
                <img src="{{ asset($invitation->bride_image) }}" alt="{{ $invitation->bride_name }}" class="rounded-full h-72 w-72 flex items-center justify-center border-8 border-pink-300">
            </div>
        </div>
        <div id="bride" class="h-auto text-center border-b-8 border-pink-300 pb-40">
            <h1 class="text-4xl">Tentang mempelai</h1>
            <div class="flex justify-center pt-16">
                <div class="w-2/5">
                    <h1 class="text-3xl mb-3">{{ $invitation->groom_full_name }}</h1>
                    <p>{{ $invitation->groom_info }}</p>
                </div>
                <img src="/img/2496293.jpg" alt="cincin" class="rounded-full h-72 w-72 flex items-center justify-center">
                <div class="w-2/5">
                    <h1 class="text-3xl mb-3">{{ $invitation->bride_full_name }}</h1>
                    <p>{{ $invitation->bride_info }}</p>
                </div>
            </div>
        </div>
        <div id="wedding" class="h-screen text-center border-b-8 border-pink-300">
            <h1 class="text-4xl">acara</h1>
            <div class="flex justify-center h-4/5 pt-32">
                <div class="w-5/12">
                    <h1 class="text-3xl pb-7">akad nikah</h1>
                    <p>{{ $invitation->wedding_date . ' @ ' . $invitation->wedding_time_start }}</p>
                    <p>{{ $invitation->wedding_venue }}</p>
                    <p>{{ $invitation->wedding_venue_address }}</p>
                </div>
                <div class="w-5/12">
                    <h1 class="text-3xl pb-7">resepsi</h1>
                    <p>{{ $invitation->reseption_date . ' @ ' . $invitation->reseption_time_start }}</p>
                    <p>{{ $invitation->reseption_venue }}</p>
                    <p>{{ $invitation->reseption_venue_address }}</p>
                </div>
            </div>
        </div>
        <div id="guest-book" class="h-screen border-b-8 border-pink-300 pt-5">
            <h1 class="text-center text-4xl mb-10">Buku Tamu</h1>
            <div class="flex justify-center">
                @if (sizeOf($invitation->guest_books) > 0)
                    <div class=" h-96 w-5/12 overflow-scroll mr-9 p-5">
                        @foreach ($invitation->guest_books as $guest_book)
                        <div class="mb-4 p-4 pt-1 shadow-lg">
                            <p>{{ $guest_book->name }}</p>
                            <p class="mb-2">{{ $guest_book->created_at }}</p>
                            <p>{{ $guest_book->message }}</p>
                            <p>{{ $guest_book->confirmation ? 'Hadir' : 'Maaf' }}</p>
                        </div>
                        @endforeach
                    </div>
                @endif
                <div class="w-5/12">
                    <form action="/guest-book" method="POST" class="mx-auto">
                        @csrf
                        <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                        <div>
                            <label for="name" class="block">name</label>
                            <input type="text" name="name" id="name" class="@error('name') border-red-500 @enderror" value="{{ old('name') }}">
                        </div>
                        <div>
                            <label for="message" class="block">message</label>
                            <input type="text" name="message" id="message" class="@error('message') border-red-500 @enderror" value="{{ old('message') }}" required>
                        </div>
                        <div class="mb-7">
                            <input type="radio" name="confirmation" id="present" class="@error('confirmation') border-red-500 @enderror" value="1">
                            <label for="present">Ya, saya akan hadir</label>
                            <input type="radio" name="confirmation" id="not-present" class="@error('confirmation') border-red-500 @enderror" value="0">
                            <label for="not-present">Maaf saya tidak bisa hadir</label>
                            @error('confirmation')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="px-7 py-2 bg-pink-300 rounded-md text-white hover:bg-pink-500">Kirim</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>