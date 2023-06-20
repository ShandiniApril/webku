{{-- <nav class="bg-[#57A8CC] shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 justify-between">
        <div class="flex">
          <div class="-ml-2 mr-2 flex items-center md:hidden">
            <button type="button" id="menu-button" class="inline-flex items-center justify-center rounded-md p-2 text-white-400 hover:bg-[#57A8CC] hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-shrink-0 items-center">
            <img class="block h-8 w-auto lg:block stroke-white" src="{{url('/img/logo.png')}}" alt="Logo">
          </div>
          <div class="hidden md:ml-6 md:flex md:space-x-8">
            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
            <a href="#" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-white">Cerpen</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">Diskusi</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">Tugas</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">About</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">Diskusi</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">Tugas</a>
            <a href="#" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-white hover:border-[#4DD0BB] hover:text-gray-700">About</a>
          </div>
        </div>
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <button type="button" class="relative inline-flex items-center rounded-md border border-transparent bg-[#4DD0BB] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-[#4DD0BB] focus:ring-offset-2">           
              <span>Login</span>
            </button>
          </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden md:hidden" id="mobile-menu">
      <div class="space-y-1 pt-2 pb-3">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <a href="#" class="block border-l-4 border-[#4DD0BB] bg-white py-2 pl-3 pr-4 text-base font-medium text-black-700 sm:pl-5 sm:pr-6">Cerpen</a>
        <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:border-[#4DD0BB] hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Diskusi</a>
        <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:border-[#4DD0BB]hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">Tugas</a>
        <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:border-[#4DD0BB] hover:bg-gray-50 hover:text-gray-700 sm:pl-5 sm:pr-6">About</a>
      </div>
    </div>
  </nav>
  
  <script>
    // Toggle the "menu open" class on click
    document.getElementById('menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
      } else {
        mobileMenu.classList.add('hidden');
      }
    });
  </script>
   --}}

<div class="navbar bg-primary">
  <div class="navbar-start">
    <div class="dropdown">
      @auth
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
      <li><a href="/materis">Materi</a></li>
      <li><a href="/quizs">Quiz</a></li>
      <li><a href="/result">Result</a></li>
      <li><a href="/project">Project</a></li>
      <li><a href="/exam">Exam</a></li>
      <li><a href="/about">About</a></li>
      </ul>
      @endauth
    </div>
    <a class="btn btn-ghost normal-case text-xl" href="/home">WebKu</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="/materis">Materi</a></li>
      <li><a href="/quizs">Quiz</a></li>
      <li><a href="/result">Result</a></li>
      <li><a href="/project">Project</a></li>
      <li><a href="/exam">Exam</a></li>
      <li><a href="/about">About</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    @auth
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            @if (auth()->user()->image)
              <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="">
            @else
              <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
            @endif
          </div>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
          <li class="font-bold text-center">{{ auth()->user()->name }}</li> <br>
          <li><a href="/profile">Profile</a></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit">logout</button>
            </form>
          </li>
        </ul>
      </div> 
    @else
      <a href="/login" class="btn">Login</a>
    @endauth
  </div>
</div>