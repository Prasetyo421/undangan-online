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
    {{-- container --}}
    <div class="relative">
        {{-- bottom nav --}}
        <div class="fixed w-full bottom-0">
            <div onClick="togglePlay()" class="absolute right-5 bottom-24 rounded-lg bg-blue-400 border-2 border-blue-300 hover:cursor-pointer" >
                <img id="audioIcon" src="/icon/play.svg" class="w-12 h-12" alt="">
                <audio id="audio" src="/audio/wedding audio1.mp3" preload="auto"></audio>
            </div>
    
            <div class="flex justify-around items-center w-full h-20 bg-white border-t-2 text-gray-500">
                <div>
                    <a href="#couple">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#location">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#guest-book">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        {{-- end bottom nav --}}

        {{-- beranda --}}
        <div class="flex h-screen w-full mb-10">
            {{-- cover image --}}
            <div class="w-8/12 ">
                <img src="/img/wedding-g1665d32ca_1920.jpg" alt="cover" class="h-full">
            </div>

            {{-- info mempelai --}}
            <div class="w-4/12 bg-blue-400 flex items-center">
                <div class="text-white mx-auto text-center">
                    <p class="text-xl mb-2">undangan pernikahan</p>
                    <p class="text-4xl mb-4">Aisyah & Dias</p>
                    <p >27 November 2021</p>
                </div>
            </div>
        </div>

        {{-- couple --}}
        <div id="couple" class="h-screen">
            <h1 class="text-4xl text-center mb-7 font-bold">mempelai</h1>
            <div class="flex">
                {{-- groom --}}
                <div class="w-1/2 text-center">
                    <img src="/img/wedding-g1665d32ca_1920.jpg" alt="groom" class="rounded-full h-44 w-44 flex items-center justify-center border-4 border-blue-300 mx-auto mb-7">
                    <p class="text-3xl font-bold mb-2">Dias Taufik Rahman</p>
                    <p>Putra dari Bapak Ibu Dias & Ibu Bapak Dias</p>
                </div>
                
                {{-- bride --}}
                <div class="w-1/2 text-center">
                    <img src="/img/wedding-g1665d32ca_1920.jpg" alt="bride" class="rounded-full h-44 w-44 flex items-center justify-center border-4 border-blue-300 mx-auto mb-7">
                    <p class="text-3xl font-bold mb-2">Azalia Fasya</p>
                    <p>dari Bapak Ibu Azalia & Ibu Bapak Azalia</p>
                </div>
            </div>
        </div>

        {{-- count down --}}
        <div class="h-screen text-center">
            <p class="text-4xl mb-12">menghitung hari</p>
            <div class="flex justify-around">
                <div>
                    <p id="days" class="text-4xl font-bold"></p>
                    <p>hari</p>
                </div>
                <div>
                    <p id="hours" class="text-4xl font-bold"></p>
                    <p>jam</p>
                </div>
                <div>
                    <p id="minutes" class="text-4xl font-bold"></p>
                    <p>menit</p>
                </div>
                <div>
                    <p id="seconds" class="text-4xl font-bold"></p>
                    <p>detik</p>
                </div>
            </div>
        </div>

        <div id="location" class=" w-11/12 mx-auto shadow-2xl p-7 mb-14 rounded-md">
            {{-- wedding --}}
            <div class="text-center mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-3xl font-bold mb-5">wedding</p>
                <p class="font-bold text-lg">27 November 2021</p>
                <p class="mb-3">18:12 - 18:12 WIB</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p class="font-bold text-lg">Edelweiss Wedding Hall</p>
                <p>Sport Club Goldland Karawaci, Gedung Edelweiss no. 1 dan 2, West Panunggangan, Cibodas, Jl. Palem Raja Raya, Bencongan Indah, Kec. Klp. Dua, Tangerang City, Banten 15810</p>
            </div>
            
            {{-- reseption --}}
            <div class="text-center mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-3xl font-bold mb-5">reseption</p>
                <p class="font-bold text-lg">27 November 2021</p>
                <p class="mb-3">18:12 - 18:12 WIB</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p class="font-bold text-lg">Edelweiss Wedding Hall</p>
                <p>Sport Club Goldland Karawaci, Gedung Edelweiss no. 1 dan 2, West Panunggangan, Cibodas, Jl. Palem Raja Raya, Bencongan Indah, Kec. Klp. Dua, Tangerang City, Banten 15810</p>
            </div>

            {{-- map --}}
            <div id="google-map" class="h-screen">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3362.191862195739!2d106.82138923819227!3d-6.179250294716707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42ba64860c1%3A0x7849b1ee855c7c71!2sGedung%20Sapta%20Pesona!5e0!3m2!1sid!2sid!4v1635383903533!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        {{-- guest book --}}
        <div id="guest-book" class="h-screen">
            <p class="text-4xl font-bold text-center">Buku Tamu</p>
            <p class="mb-10 text-center">Yuk kirim ucapan, doa serta konfirmasi kehadiran</p>
            <div class="flex justify-center">
                    <div class=" h-96 w-5/12 overflow-scroll mr-9 p-5">
                        <div class="mb-4 p-4 pt-1 shadow-lg">
                            <p class="font-bold text-blue-400">keysha</p>
                            <p class="mb-2">7 bulan yang lalu</p>
                            <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                            <p>Hadir</p>
                        </div>
                        <div class="mb-4 p-4 pt-1 shadow-lg">
                            <p class="font-bold text-blue-400">keysha</p>
                            <p class="mb-2">7 bulan yang lalu</p>
                            <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                            <p>Hadir</p>
                        </div>
                        <div class="mb-4 p-4 pt-1 shadow-lg">
                            <p class="font-bold text-blue-400">keysha</p>
                            <p class="mb-2">7 bulan yang lalu</p>
                            <p>Selamat yaaa semoga dilancarkan sampai hari H nyaa. aamiiin</p>
                            <p>Hadir</p>
                        </div>
                    </div>
                <div class="w-5/12">
                    <input type="hidden" name="invitation_id" value="">
                    <div>
                        <label for="name" class="block">name</label>
                        <input type="text" name="name" id="name" class="@error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    </div>
                    <div>
                        <label for="message" class="block">message</label>
                        <textarea name="message" id="message" cols="30" rows="5"></textarea>
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
                    <button type="submit" class="px-7 py-2 bg-blue-300 rounded-md text-white hover:bg-blue-500">Kirim</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>

        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
        //   document.getElementById("count-down").innerHTML = days + "d " + hours + "h "
        //   + minutes + "m " + seconds + "s ";
          
          document.getElementById("days").innerHTML = days;
          document.getElementById("hours").innerHTML = hours;
          document.getElementById("minutes").innerHTML = minutes;
          document.getElementById("seconds").innerHTML = seconds;
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);

        var myAudio = document.getElementById("audio");
        var audioIcon = document.getElementById("audioIcon");

        myAudio.play();
        function togglePlay() {
            return myAudio.paused ? audioPlay() : audioPause();
        };

        function audioPlay(){
            myAudio.play();
            audioIcon.src = "/icon/play.svg";
        }

        function audioPause(){
            myAudio.pause();
            audioIcon.src = "/icon/pause.svg";
        }
    </script>

</body>
</html>