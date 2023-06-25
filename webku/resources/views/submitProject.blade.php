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

  @if($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  @endif
  @if(session()->has('success'))
    <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span class="text-start">{{ session('success') }}</span>
    </div>
  @endif

  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Submit Project WebKu</h2>
  </div>

  <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-xl">
    <form class="space-y-6" action="/submitProject" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="group" class="block text-sm font-medium leading-6 text-gray-900">Nama Kelompok</label>
        <div class="mt-2">
          <input id="group" name="group" type="string" autocomplete="group" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Nama Website</label>
        <div class="mt-2">
          <input id="title" name="title" type="string" autocomplete="title" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="members" class="block text-sm font-medium leading-6 text-gray-900">Anggota Kelompok & Pembagian Kerja (beri tanda * jika tidak ikut mengerjakan)</label>
        <div class="mt-2">
          <textarea id="members" name="members" type="text" autocomplete="members" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Penjelasan singkat project</label>
        </div>
        <div class="mt-2">
          <textarea id="description" name="description" type="text" autocomplete="description" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>

      <div class="form-control">
        <label for="ppt" class="label">
          <span class="label-text">File PPT Presentasi</span>
        </label>
        <input id="ppt" name="ppt" type="file" class="file-input file-input-primary @error('ppt') is-invalid @enderror"/>
        <span class="text-danger">
          @error('ppt')
            {{ $message }}
          @enderror
        </span>
      </div>

      <div class="form-control">
        <label for="project" class="label">
          <span class="label-text">File Project(zip/rar)</span>
        </label>
        <input id="project" name="project" type="file" class="file-input file-input-primary @error('project') is-invalid @enderror"/>
        <span class="text-danger">
          @error('project')
            {{ $message }}
          @enderror
        </span>
      </div>
      <br>

      <div>
        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
      </div>

    </form>
  </div>
</div>

</x-app-layout>