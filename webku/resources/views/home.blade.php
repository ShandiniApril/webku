<x-app-layout>
  <div class="hero min-h-screen" style="background-image: url(/image/startup.jpg);">
    <div class="hero-content text-center">
      <div class="max-w-md">
        @if(session()->has('success'))
          <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="text-start">{{ session('success') }}</span>
          </div>
        @endif
        <h1 class="text-5xl font-bold">Selamat Datang di WebKu!</h1>
        <p class="py-8 font-medium text-base-300">WebKu merupakan website yang dibuat oleh pengembang untuk membantu siswa/siswi kelas 11 tingkat SMK/MA pada mata pelajaran pemrograman web, terutama materi CSS. <br> <br> Silakan baca petunjuk di halaman tentangKu!  </p>
        <p class="pb-8 text-lg font-bold">Jangan lupa klik tombol 'mulai belajar' di bawah untuk menghitung waktu belajar kamu!</p>
        {{-- <a href="{{ $pretest == null ? '/test/pretest' : ''}}">
          <button class="btn" {{ $pretest == null ? '' : 'disabled' }}>Ya</button>
        </a> --}}
        @if ($loged == null)
            <form action="/start" method="post">
              @csrf
              <button class="btn btn-primary" type="submit">Mulai Belajar</button>
            </form>
        @endif
        
        {{-- <a href="/start"><button class="btn btn-primary font-bold">Start</button></a> --}}
      </div>
    </div>
  </div>
</x-app-layout>
                