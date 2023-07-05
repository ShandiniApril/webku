<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Halaman Materi Guru</p>
        </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Materi</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Materi</th>
                        <th>Highlight</th>
                        <th>Link Video</th>
                        <th>Link PDF</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subject->title }}</td>
                        <td>{{ $subject->highlight }}</td>
                        <td>{{ $subject->video }}</td>
                        <td>{{ $subject->pdf }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-200 my-6">
            <input type="checkbox" /> 
            <div class="collapse-title font-bold">
              Tambah Materi
            </div>
            <div class="collapse-content"> 
                @if($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
            
                <div class="sm:mx-auto sm:w-full sm:max-w-xl">
                    <form class="space-y-4" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul Materi</label>
                        <div>
                        <input id="title" name="title" type="string" autocomplete="title" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="highlight" class="block text-sm font-medium leading-6 text-gray-900">highlight</label>
                        <div class="mt-2">
                        <input id="highlight" name="highlight" type="string" autocomplete="highlight" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="video" class="block text-sm font-medium leading-6 text-gray-900">Link Video (youtube->semat)</label>
                        <div class="mt-2">
                        <input id="video" name="video" type="string" autocomplete="video" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="pdf" class="block text-sm font-medium leading-6 text-gray-900">Link PDF (gdrive->preview)</label>
                        <div class="mt-2">
                        <input id="pdf" name="pdf" type="string" autocomplete="pdf" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                
                    <div>
                        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-6 text-sm font-semibold leading-6 text-white">Submit</button>
                    </div>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>