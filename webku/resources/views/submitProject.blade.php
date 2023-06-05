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
    <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Submit Project WebKu</h2>
  </div>

  <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-xl">
    <form class="space-y-6" action="#" method="POST">
      @csrf
      <div>
        <label for="nameGroup" class="block text-sm font-medium leading-6 text-gray-900">Nama Kelompok/Nama Project</label>
        <div class="mt-2">
          <input id="nameGroup" name="nameGroup" type="nameGroup" autocomplete="nameGroup" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Anggota Kelompok (beri tanda * jika tidak ikut mengerjakan)</label>
        <div class="mt-2">
          <input id="name" name="name" type="name" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Penjelasan singkat project</label>
        </div>
        <div class="mt-2">
          <input id="description" name="description" type="text" autocomplete="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Penjelasan singkat project</label>
        </div>
        <div class="mt-2">
          <input id="description" name="description" type="text" autocomplete="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="form-control">
        <label class="label">
          <span class="label-text">File PPT Presentasi</span>
        </label>
        <input type="file" class="file-input file-input-primary"/>
      </div>

      <div class="form-control">
        <label class="label">
          <span class="label-text">File Project(zip/rar)</span>
        </label>
        <input type="file" class="file-input file-input-primary"/>
      </div>
      <br>

      <div>
        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
      </div>

    </form>
  </div>
</div>

</x-app-layout>