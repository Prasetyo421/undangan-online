<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">

  <title>Home</title>
</head>
<body class="w-full">
  <div class="container:xl mx-auto">

    @include('layouts.nav')
    
    {{-- beranda --}}
    <div class="beranda">
      <div class="hero-image h-screen relative">
        <div class="flex absolute top-20 left-20 w-1/2 h-72 bg-blue-200 rounded-md p-2 py-8">
          <h1 class="w-2/5 text-4xl text-blue-800">Buat Undangan Pernikahan Online Gratis Kamu Disini!</h1>
          <div class="w-3/5 block">
            <p class="text-md text-blue-800">Tersedia Berbagai Macam Desain Undangan Yang Menarik Dan Tampil Baik Di Semua Perangkat Digital.</p>
            <a href="invitation/create" class="block mx-auto mt-16 rounded-xl text-center py-1 bg-white text-blue-500 w-36">Buat Undangan</a>
          </div>
        </div>
      </div>
    </div>

    {{-- paket pembelian --}}
    <div class="flex min-h-screen justify-around mb-14">
      <div class="w-3/12 h-96 p-7 shadow-lg rounded-md border-t-2 hover:shadow-2xl hover:cursor-pointer">
        <h1 class="text-4xl">Bronze</h1>
        <p>paket bronze</p>

        <div class="mt-7 mb-5">
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <a href="#" class="inline-block px-5 py-2 rounded-md border-2 text-blue-300 bg-white border-blue-300 hover:bg-blue-300 hover:text-white">Pilih Paket</a>
      </div>

      <div class="w-3/12 h-1/2 p-7 shadow-lg rounded-md border-t-2 hover:shadow-2xl hover:cursor-pointer">
        <h1 class="text-4xl">Silvel</h1>
        <p>paket silvel</p>

        <div class="mt-7 mb-5">
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
        </div>

        <a href="#" class="inline-block px-5 py-2 rounded-md border-2 text-blue-300 bg-white border-blue-300 hover:bg-blue-300 hover:text-white">Pilih Paket</a>
      </div>

      <div class="w-3/12 p-7 shadow-lg rounded-md border-t-2 hover:shadow-2xl hover:cursor-pointer">
        <h1 class="text-4xl">Gold</h1>
        <p>paket gold</p>

        <div class="mt-7 mb-5">
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
          <p>Lorem ipsum dolor sit.</p>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>

        <a href="#" class="inline-block px-5 py-2 rounded-md border-2 hover:text-blue-300 hover:bg-white border-blue-300 bg-blue-300 text-white">Pilih Paket</a>
      </div>
      
    </div>

    <footer class="w-full h-28 bg-gray-600 flex items-center">
      <h1 class="mx-auto text-white">Copyright undangan-Online.id</h1>
    </footer>
  </div>
</body>
</html>