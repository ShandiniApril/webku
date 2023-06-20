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
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Profile Siswa WebKu</h2>
    </div>
  
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-xl">
      {{-- informasi profile --}}
      <div class="flex flex-col w-full border-opacity-50">
        <div class="divider"></div>
        <div class="grid card rounded-box place-items-center">
          <ul>
            <li>Nama: {{ auth()->user()->name }}</li>
            <li>Email: {{ auth()->user()->email }}</li>
          </ul>
        </div>
        <div class="divider"></div>
        <div class="grid card rounded-box place-items-center">
          <p>Photo Profile</p>
          <form class="space-y-6" action="#" method="POST">
            @csrf
            <div class="form-control">
              <label class="label">
                <span class="label-text">Masukkan Foto</span>
              </label>
              <input type="file" class="file-input file-input-primary"/>
            </div>
            <div>
              <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  </x-app-layout>