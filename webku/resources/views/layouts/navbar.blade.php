<div class="navbar bg-primary">
  <div class="navbar-start">
    <div class="dropdown">
      @auth
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
      @if (auth()->user()->level=="guru")
      <li><a href="/student">Siswa</a></li>
      <li><a href="/addSubject">Materi</a></li>
      <li><a href="/showReaction">Reaksi & Komentar</a></li>
      <li><a href="/question">Soal</a></li>
      <li><a href="/report">Hasil Test</a></li>
      <li><a href="/reportProyek">Laporan Proyek</a></li>
      @endif
      @if (auth()->user()->level=="siswa")
      <li><a href="/subject">Belajar</a></li>
      <li><a href="/quizes">Kuis</a></li>
      <li><a href="/project">Proyek</a></li>
      <li><a href="/result">Hasil Belajar</a></li>
      <li><a href="/exam">Ujian</a></li>
      @endif
      <li><a href="/about">Tentang</a></li>
      </ul>
      @endauth
    </div>
    <a class="btn btn-ghost normal-case text-xl" href="/home">WebKu</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      @if (auth()->user()->level=="guru")
        <li><a href="/student">Siswa</a></li>
        <li><a href="/addSubject">Materi</a></li>
        <li><a href="/showReaction">Reaksi & Komentar</a></li>
        <li><a href="/question">Soal</a></li>
        <li><a href="/report">Hasil Test</a></li>
        <li><a href="/reportProyek">Laporan Proyek</a></li>
      @endif
      @if (auth()->user()->level=="siswa")
      <li><a href="/subject">Belajar</a></li>
      <li><a href="/quizes">Kuis</a></li>
      <li><a href="/project">Proyek</a></li>
      <li><a href="/result">Hasil Belajar</a></li>
      <li><a href="/exam">Ujian</a></li>
      @endif
      <li><a href="/about">Tentang</a></li>
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
          <li><a href="/profile/{{ auth()->user()->id }}">Profile</a></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit">Keluar</button>
            </form>
          </li>
        </ul>
      </div> 
    @else
      <a href="/login" class="btn">Masuk</a>
    @endauth
  </div>
</div>