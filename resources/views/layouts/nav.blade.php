<nav class="bg-blue-500 px-6 h-14 flex items-center justify-between">
    <div class="text-white">
      <a href="/" class="inline text-2xl ">Undangan Online</a>
      <a href="invitation/create" class="ml-2 hover:text-gray-300">Membuat Undangan</a>
      <a href="testimoni" class="ml-2 hover:text-gray-300">Testimoni</a>
      @auth
          <a href="invitation">My invitations</a>
      @endauth
    </div>
    <div class="relative group inline text-white">
      @if (Route::has('login'))
        @auth
        <a href="">Welcome back, {{ auth()->user()->username }}</a>
        <div class="absolute hidden group-hover:block bg-white left-0 right-0 rounded-md text-blue-500">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
          <a href="#">Dashboard</a>
        </div>
        @else
        <a href="{{ route('login') }}" class="ml-2">
          login
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
          </svg>
        </a>
        @endauth
      @endif
    </div>
  </nav>