<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WebKu') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col h-screen">
            <head>
                
            </head>
            <!-- Page Content -->
            <main class="flex-grow">
              <div class="hero min-h-screen" style="background-image: url(/image/startup.jpg);">
                <div class="hero-content text-center">
                  <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Selamat Datang di WebKu!</h1>
                    <p class="py-6 font-bold">WebKu merupakan website yang dibuat oleh pengembang untuk membantu siswa/siswi kelas 11 tingkat SMK/MA pada mata pelajaran pemrograman web, terutama materi CSS. <br> <br> Yuk jelajahi WebKu cara klik tombol masuk di bawah ini!</p>
                    <a href="/login"><button class="btn btn-primary font-bold">Masuk</button></a>
                  </div>
                </div>
              </div>
            </main>
            <footer>
                @include('layouts.footer')
            </footer>
        </div>
    </body>
</html>


                