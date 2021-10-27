<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .button {
            @apply text-sm text-white py-1 px-6 rounded-md;
        }
    </style>

    <title>landing page</title>
</head>
<body>
    <div class="container mx-auto">
        <nav class="md:flex items-center justify-between mt-10">
            <div class="flex items-center">
                <img src="/img/logo.png" width="50" alt="logo">
                <input type="search" class="bg-grey ml-5 py-1">
            </div>
            <div class="sm:block hidden">
                <a href="#" class="ml-2 text-blue-900">Belajar</a>
                <div class="group relative inline">
                    <a href="#" class="ml-2 text-blue-900">Nongkrong</a>
                    <div class="absolute bg-gray-200 right-0 hidden rounded-lg p-4 group-hover:block group-hover:border-t-2 border-blue-200">
                        <a href="" class="block">Semua</a>
                        <a href="" class="block">Forum</a>
                    </div>
                </div>
                <a href="#" class="ml-2 text-blue-900">Login</a>
            </div>

            <div class="sm:hidden block" id="menunav">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>

            {{--Start Navigation for mobile --}}
            <div class="sm:hidden hidden" id="menulist">
                <a href="#" class="ml-2 text-blue-900">Belajar</a>
                <div class="group relative inline">
                    <a href="#" class="ml-2 text-blue-900">Nongkrong</a>
                    <div class="absolute bg-gray-200 right-0 hidden rounded-lg p-4 group-hover:block group-hover:border-t-2 border-blue-200">
                        <a href="" class="block">Semua</a>
                        <a href="" class="block">Forum</a>
                    </div>
                </div>
                <a href="#" class="ml-2 text-blue-900">Login</a>
            </div>

            <script>
                document.getElementById('menunav').addEventListener('click', function(){
                    document.getElementById('menulist').classList.toggle('hidden')
                })
            </script>
            {{-- End Navigation for mobile --}}
        </nav>

        <section class="md:flex mt-10">
            <div class="text-center md:w-4/6 p-2">
                <img src="img/computer.png" width="250" alt="computer" class="mx-auto">
                <h1 class=" text-4xl py-2">Belajar Programming,<br>
                Mulai dari Nol.</h1>
                <h2 class=" text-gray-400">Belajar membuat website dan aplikasi. Bingung mulai dari mana? Tenang, mari bergabung bersama 100 ribu+ teman lainnya. Mau bekerja sebagai programmer atau membuat karya, kamu juga bisa!</h2>
            </div>
            <div class="text-center p-5 shadow-md md:w-2/6" >
                <p class="text-sm">Daftar dengan</p>
                <div class="md:flex justify-around my-2">
                    <a href="#" class="button bg-red-400 hover:bg-red-500">Google</a>
                    <a href="#" class="button bg-gray-800 hover:bg-gray-900">Github</a>
                    <a href="#" class="button bg-blue-500 hover:bg-blue-600">Twitter</a>
                </div>
                <p class="text-sm">atau daftar dengan email</p>
                <form action="" class="my-2 text-left">
                    <div class=" bg-gray-200 p-2 px-4 mb-2 rounded-md">
                        <label for="username" class="block text-gray-500">Username</label>
                        <input type="text" name="username" id="username" class="border-none focus:outline-none bg-transparent w-full text-xl">
                    </div>
                    
                    <div class=" bg-gray-200 p-2 px-4 mb-2 rounded-md">
                        <label for="email" class="block text-gray-500">Email</label>
                        <input type="text" name="email" id="email" class="border-none focus:outline-none bg-transparent w-full text-xl">
                    </div>
                    
                    <div class=" bg-gray-200 p-2 px-4 mb-2 rounded-md">
                        <label for="passowrd" class="block text-gray-500">Passowrd</label>
                        <input type="text" name="passowrd" id="password" class="border-none focus:outline-none bg-transparent w-full text-xl">
                    </div>

                    <button class="rounded-md bg-skcolor hover:bg-skcolor-dark w-full text-white py-2 text-lg mt-2">
                        Daftar
                    </button>

                    <p class="text-center text-sm">
                        Dengan mendaftar, kamu setuju<br>
                        dengan <a href="#" class="underline">syarat dan ketentuan</a> kami
                    </p>
                </form>
            </div>
        </section>
        <div>
            <button class="btn-blue">test button</button>
        </div>
    </div>
</body>
</html>