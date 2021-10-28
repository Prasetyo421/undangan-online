<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/design2.css">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <title>Ucup & Marinka</title>
</head>
<body>
    {{-- container --}}
    <div class="relative w-screen pb-96 md:pb-32">
        {{-- bottom nav --}}
        <div class="fixed w-full bottom-0 z-40">
            <div onClick="togglePlay()" class="absolute right-5 bottom-24 rounded-lg bg-blue-400 border-2 border-blue-300 hover:cursor-pointer" >
                <img id="audioIcon" src="/icon/play.svg" class="w-12 h-12" alt="audio">
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
        <div class="h-screen w-screen mb-10 ">
            <div class="md:flex md:h-4/5 md:w-full block h-auto">
                {{-- cover image --}}
                <div class="w-full md:w-8/12 md:h-full">
                    <img src="/img/wedding-g1665d32ca_1920.jpg" alt="cover" class="h-full w-full">
                </div>
    
                {{-- info mempelai --}}
                <div class="h-2/5 bg-blue-400 pt-12 md:w-4/12 md:h-full pb-52">
                    <div class="text-white mx-auto text-center">
                        <p class="text-xl mb-2">undangan pernikahan</p>
                        <p class="text-4xl mb-4">Aisyah & Dias</p>
                        <p class="text-xl">27 November 2021</p>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1635423095 -mt-14">
                <svg class="h-40 w-full text-black" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill "></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>

        {{-- couple --}}
        <div id="couple" class="min-h-screen">
            <h1 class="text-4xl text-center mb-7 font-bold">mempelai</h1>
            <div class="md:flex">
                {{-- groom --}}
                <div class="text-center mx-auto mb-20">
                    <img src="/img/wedding-g1665d32ca_1920.jpg" alt="groom" class="rounded-full h-60 w-60 flex items-center justify-center border-4 border-blue-300 mx-auto mb-7">
                    <p class="text-3xl font-bold mb-2">Dias Taufik Rahman</p>
                    <p class="text-xl">Putra dari Bapak Ibu Dias & Ibu Bapak Dias</p>
                </div>
                
                {{-- bride --}}
                <div class="text-center mx-auto mb-20">
                    <img src="/img/wedding-g1665d32ca_1920.jpg" alt="groom" class="rounded-full h-60 w-60 flex items-center justify-center border-4 border-blue-300 mx-auto mb-7">
                    <p class="text-3xl font-bold mb-2">Azalia Fasya</p>
                    <p>dari Bapak Ibu Azalia & Ibu Bapak Azalia</p>
                </div>
            </div>
        </div>

        {{-- count down --}}
        <div class="h-screen ">
            <p class="text-5xl mb-40 text-center">menghitung hari</p>
            <div class="w-full md:flex md:justify-around">
                <div class="flex justify-around mb-10 md:w-1/2">
                    <div class="md:inline">
                        <p id="days" class="text-5xl font-bold mb-4"></p>
                        <p class="text-center text-3xl">hari</p>
                    </div>
                    <div class="md:inline">
                        <p id="hours" class="text-5xl font-bold mb-4"></p>
                        <p class="text-center text-3xl">jam</p>
                    </div>
                </div>
                <div class="flex justify-around mb-10 md:w-1/2">
                    <div>
                        <p id="minutes" class="text-5xl font-bold mb-4"></p>
                        <p class="text-center text-3xl">menit</p>
                    </div>
                    <div>
                        <p id="seconds" class="text-5xl font-bold mb-4"></p>
                        <p class="text-center text-3xl">detik</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="location" class="w-11/12 mx-auto shadow-2xl p-7 mb-14 rounded-md">
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
            <div id="google-map" class="h-56 md:h-screen">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3362.191862195739!2d106.82138923819227!3d-6.179250294716707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42ba64860c1%3A0x7849b1ee855c7c71!2sGedung%20Sapta%20Pesona!5e0!3m2!1sid!2sid!4v1635383903533!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        {{-- guest book --}}
        <div id="guest-book" class="h-screen  p-5">
            <p class="text-4xl font-bold text-center">Buku Tamu</p>
            <p class="mb-10 text-center">Yuk kirim ucapan, doa serta konfirmasi kehadiran</p>
            <div class="md:flex md:justify-center">
                <div class="w-full md:h-96 md:w-5/12 overflow-scroll mb-10">
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
                <div class="md:w-5/12 w-full text-center">
                    <input type="hidden" name="invitation_id" value="">
                    <div class="mb-7">
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
        myAudio.loop = true;

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

        togglePlay();
    </script>

</body>
</html>