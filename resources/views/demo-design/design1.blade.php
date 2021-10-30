<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <title>Ucup & Marinka</title>
</head>
<body>
    <div class="w-full bg-gray-100">
        <header class="fixed bottom-0 w-screen flex items-center justify-around h-14 bg-pink-400 text-white md:justify-evenly md:top-0">
            <div>
                <a href="#beranda" class="text-lg hidden md:inline">Beranda</a>
                <a href="#beranda" class="text-lg md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                </a>
            </div>
            <div>
                <a href="#bride" class="text-lg hidden md:inline">Tentang mempelai</a>
                <a href="#bride" class="text-lg md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
            <div>
                <a href="#wedding" class="text-lg hidden md:inline">Acara</a>
                <a href="#wedding" class="text-lg md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>
            <div>
                <a href="#guest-book" class="text-lg hidden md:inline">Buku tamu</a>
                <a href="#guest-book" class="text-lg md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </a>
            </div>
        </header>

        {{-- beranda --}}
        <div id="beranda" class="min-h-screen text-center border-b-8 border-pink-300 md:pt-14">
            <div class="h-screen w-full justify-center flex items-center md:h-auto mt-14">
                <div class="-mt-16 md:mt-0">
                    <h1 class="text-2xl">
                        We’re Getting Married<br>
                        sunday, 30 October 2021
                    </h1>
                    <h1 class="text-5xl mb-7">
                        Ucup & Marinka
                    </h1>
                </div>
            </div>
            <div class="md:flex h-screen flex-row justify-center md:mt-10 md:h-auto md:items-center">
                <img src="/img/wedding-g1665d32ca_1920.jpg" alt="groom" class="rounded-full h-72 w-72 flex items-center justify-center border-8 border-pink-300 mx-auto">
                <div class="h-24">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-28 w-28 mx-auto -mt-5" viewBox="0 0 20 20" fill="#F60000">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                      </svg>
                </div>
                <img src="/img/wedding-g1665d32ca_1920.jpg" alt="bride" class="rounded-full h-72 w-72 flex items-center justify-center border-8 border-pink-300 mx-auto">
            </div>
        </div>

        {{-- tentang mempelai --}}
        <div id="bride" class="h-screen text-center border-b-8 border-pink-300 md:pb-40">
            <h1 class="text-4xl mt-2">Tentang mempelai</h1>
            <div class="h-4/5 flex flex-col justify-center items-center md:flex-row">
                <div class="md:w-2/5">
                    <h1 class="text-3xl mb-3">Ucup Surucup</h1>
                    <p>Puta dari bapak surucup dan ibu surucup</p>
                </div>
                <img src="/img/2496293.jpg" alt="cincin" class="rounded-full h-56 w-56 flex items-center justify-center my-14 mx-auto">
                <div class="md:w-2/5">
                    <h1 class="text-3xl mb-3">Marinka putri</h1>
                    <p>Putri dari bapak mario dan ibu mario</p>
                </div>
            </div>
        </div>

        {{-- acara --}}
        <div id="wedding" class="h-screen text-center border-b-8 border-pink-300">
            <h1 class="text-4xl">acara</h1>
            <div class="flex flex-col items-center justify-evenly h-4/5 md:pt-32 md:flex-row">
                <div class="md:w-5/12">
                    <h1 class="text-3xl mb-3">akad nikah</h1>
                    <p>30 October 2021 @ 14:54</p>
                    <p>Gedung Kebhinekaan</p>
                    <p>Jalan Pramuka nomer 56</p>
                </div>
                <div class="md:w-5/12">
                    <h1 class="text-3xl mb-3">resepsi</h1>
                    <p>30 October 2021 @ 16:54</p>
                    <p>Gedung Kebhinekaan</p>
                    <p>Jalan Pramuka nomer 56</p>
                </div>
            </div>
        </div>

        {{-- guest book --}}
        <div id="guest-book" class="min-h-screen border-b-8 border-pink-300 pt-5 pb-32">
            <h1 class="text-center text-4xl mb-10">Buku Tamu</h1>

            <div class="flex flex-col justify-center md:flex-row">
                {{-- message --}}
                <div class="md:h-96 md:w-5/12 max-h-screen overflow-scroll p-5">
                    <div class="w-full mb-4 p-4 pt-1 shadow-lg">
                        <p>keysha</p>
                        <p class="mb-2">7 bulan yang lalu</p>
                        <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                        <p>Hadir</p>
                    </div>
                    <div class="mb-4 p-4 pt-1 shadow-lg">
                        <p>keysha</p>
                        <p class="mb-2">7 bulan yang lalu</p>
                        <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                        <p>Hadir</p>
                    </div>
                    <div class="mb-4 p-4 pt-1 shadow-lg">
                        <p>keysha</p>
                        <p class="mb-2">7 bulan yang lalu</p>
                        <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                        <p>Hadir</p>
                    </div>
                </div>
                {{-- end message --}}

                {{-- form --}}
                <div class="md:w-5/12 flex flex-col items-center">
                    <input type="hidden" name="invitation_id" value="">
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
                    <button type="button" class="px-7 py-2 bg-pink-300 rounded-md text-white hover:bg-pink-500">Kirim</button>
                </div>
                {{-- end form --}}
            </div>
        </div>
    </div>
</body>
</html>