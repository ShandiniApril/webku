<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-4">Halaman Edit Kelompok Siswa</p>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-xl">
            <form class="space-y-4" action="/updateProject/{{ $project->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Kelompok</label>
                <div>
                <input id="name" name="name" type="string" autocomplete="name" value="{{ $project->name }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="members" class="block text-sm font-medium leading-6 text-gray-900">Nama Siswa</label>
                <div class="mt-2">
                <input id="members" name="members" type="string" autocomplete="members" value="{{ $project->members }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="assignment" class="block text-sm font-medium leading-6 text-gray-900">Link Diskusi</label>
                <div class="mt-2">
                <input id="assignment" name="assignment" type="string" autocomplete="assignment" value="{{ $project->assignment }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
        
            <div>
                <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-8 text-sm font-semibold leading-6 text-white">Update</button>
            </div>
        
            </form>
        </div>
        
    </div>
</x-app-layout>