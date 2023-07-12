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
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                  <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Formulir Registrasi WebKu</h2>
                </div>
              
                  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="/register" method="POST" enctype="multipart/form-data">
                      @csrf

                      <div>
                        <div class="flex items-center justify-between">
                          <label for="level" class="block text-sm font-medium leading-6 text-gray-900">Level</label>
                        </div>
                        <div class="mt-2">
                          <select name="level" id="level" class="select select-primary w-full">
                            <option disabled selected>Saya membuat akun sebagai</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                          </select>
                        </div>
                      </div>

                    <div>
                        <div class="flex items-center justify-between">
                          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama (Tulis nama lengkap)</label>
                        </div>
                        <div class="mt-2">
                          <input id="name" name="name" type="string" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
            
                    <div>
                      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                      <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6 px-2">
                      </div>
                    </div>
              
                    <div>
                      <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                      </div>
                      <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6 px-2">
                      </div>
                    </div>
            
                    {{-- <div class="form-control">
                      <label for="image" class="label">
                        <span class="label-text">Foto Profil</span>
                      </label>
                      <input id="image" name="image" type="file" class="file-input file-input-primary @error('image') is-invalid @enderror"/>
                      @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div> --}}
              
                    <div>
                      <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 mt-12 text-sm font-semibold leading-6">Daftar</button>
                    </div>
                  </form>
              
                  <p class="mt-10 text-center text-sm text-gray-500">
                    Sudah punya akun?
                    <a href="/login" class="font-semibold leading-6 text-primary">Masuk</a>
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
