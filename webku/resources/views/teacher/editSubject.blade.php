<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-4">Halaman Edit Materi</p>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-xl">
            <form class="space-y-4" action="/updateSubject/{{ $subject->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Kode Materi</label>
                <div class="mt-2">
                <input id="code" name="code" type="string" autocomplete="code" value="{{ $subject->code }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul Materi</label>
                <div class="mt-2">
                <input id="title" name="title" type="string" autocomplete="title" value="{{ $subject->title }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="highlight" class="block text-sm font-medium leading-6 text-gray-900">Highlight Materi</label>
                <div class="mt-2">
                <input id="highlight" name="highlight" type="string" autocomplete="highlight" value="{{ $subject->highlight }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="video" class="block text-sm font-medium leading-6 text-gray-900">Link Video (youtube->semat)</label>
                <div class="mt-2">
                <input id="video" name="video" type="string" autocomplete="video" value="{{ $subject->video }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="pdf" class="block text-sm font-medium leading-6 text-gray-900">Link PDF (gdrive->preview)</label>
                <div class="mt-2">
                <input id="pdf" name="pdf" type="string" autocomplete="pdf" value="{{ $subject->pdf }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
        
            <div>
                <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-8 text-sm font-semibold leading-6 text-white">Update</button>
            </div>
        
            </form>
        </div>
        
    </div>
</x-app-layout>