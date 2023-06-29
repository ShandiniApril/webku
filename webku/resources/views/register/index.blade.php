<x-app-layout>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Formulir Registrasi</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/register" method="POST" enctype="multipart/form-data">
        @csrf
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

        <div class="form-control">
          <label for="image" class="label">
            <span class="label-text">Foto Profil</span>
          </label>
          <input id="image" name="image" type="file" required class="file-input file-input-primary @error('image') is-invalid @enderror"/>
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
  
        <div>
          <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6">Daftar</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Sudah punya akun?
        <a href="/login" class="font-semibold leading-6 text-primary">Masuk</a>
      </p>
    </div>
  </div>
  
</x-app-layout>