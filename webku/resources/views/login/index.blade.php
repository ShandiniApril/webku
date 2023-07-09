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
              <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

                @if(session()->has('success'))
                  <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="text-start">{{ session('success') }}</span>
                  </div>
                @endif
            
                @if(session()->has('loginError'))
                  <div class="alert alert-error sm:mx-auto sm:w-full sm:max-w-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    {{ session('loginError') }}
                    <span></span>
                  </div>
                @endif
            
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                  <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Masuk Akun WebKu</h2>
                </div>
              
                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                  <form class="space-y-6" action="/login" method="POST">
                    @csrf
                    <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                      <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                      </div>
                    </div>
              
                    <div>
                      <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                      </div>
                      <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-primary sm:text-sm sm:leading-6 px-2">
                      </div>
                    </div>
              
                    <div>
                      <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Masuk</button>
                    </div>
            
                  </form>
                  
                  <p class="mt-10 text-center text-sm text-gray-500">
                    Belum punya akun?
                    <a href="/register" class="font-semibold leading-6 text-primary">Daftar</a>
                  </p>
            
                </div>
              </div>
            </main>
            <footer>
                @include('layouts.footer')
            </footer>
        </div>
    </body>
</html>
