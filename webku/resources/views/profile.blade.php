<x-app-layout>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

    @if(session()->has('success'))
      <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span class="text-start">{{ session('success') }}</span>
      </div>
    @endif

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Profile User WebKu</h2>
      @if ($user->image !=null)
        <div class="mt-8">
          <img class="h-32 mx-auto" src="{{ asset('storage/' . $user->image) }}" alt="">
        </div>
      @endif
      
      <form class="space-y-6" action="/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div class="flex items-center justify-between">
              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
            </div>
            <div class="mt-2">
              <input id="name" name="name" type="string" autocomplete="name" value="{{ $user->name }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6 px-2">
            </div>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" value="{{ $user->email }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6 px-2">
          </div>
        </div>
  
        <div class="form-control">
          <label for="image" class="label">
            <span class="label-text">Foto Profil</span>
          </label>
          <input id="image" name="image" type="file" value="{{ $user->image }}" class="file-input file-input-primary @error('image') is-invalid @enderror"/>
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
    
        <div>
          <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 mt-12 text-sm font-semibold leading-6">Update</button>
        </div>
      </form>
    </div>   
  </div>
  
</x-app-layout>