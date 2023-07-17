<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <p class="font-bold text-center text-2xl pb-8">Halaman Laporan Proyek Siswa</p>

            <div class="mt-6 grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
                <p class="font-bold pb-2">Tabel Kelompok Siswa</p>
                <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama Kelompok</th>
                        <th>Nama Siswa</th>
                        <th>Link Diskusi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach ($groups as $group)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->members }}</td>
                        <td>{{ $group->assignment }}</td>
                        <td>
                            <div class="flex">
                                <a href="/editProject/{{ $group->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#359C91" class="w-6 h-6">
                                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                    </svg>
                                </a>
                                <a href="/deleteProject/{{ $group->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#E33232" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>

            <div class="collapse collapse-plus bg-base-200 my-6">
                <input type="checkbox" /> 
                <div class="collapse-title font-bold">
                  Tambah Kelompok Siswa
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
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Kelompok</label>
                            <div>
                            <input id="name" name="name" type="string" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                            </div>
                        </div>
                        <div>
                            <label for="members" class="block text-sm font-medium leading-6 text-gray-900">Nama Siswa</label>
                            <div class="mt-2">
                            <input id="members" name="members" type="string" autocomplete="members" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                            </div>
                        </div>
                        <div>
                            <label for="assignment" class="block text-sm font-medium leading-6 text-gray-900">Link Diskusi</label>
                            <div class="mt-2">
                            <input id="assignment" name="assignment" type="string" autocomplete="assignment" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                            </div>
                        </div>
                    
                        <div>
                            <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-6 text-sm font-semibold leading-6 text-white">Submit</button>
                        </div>
                    
                        </form>
                    </div>
                </div>
            </div>

            <div class="divider my-8"></div>

            <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
                <p class="font-bold pb-2">Tabel Pengumpulan Proyek</p>
                <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama Kelompok</th>
                        <th>Nama Proyek</th>
                        <th>Siswa dan Pembagian Tugas</th>
                        <th>Deskripsi Proyek</th>
                        <th>Link PPT</th>
                        <th>Link Proyek</th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->group }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->members }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->ppt }}</td>
                            <td>{{ $project->project }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

            <div class="mt-6 grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
                <p class="font-bold pb-2">Tabel Reaksi Siswa dalam Pengerjaan Proyek</p>
                <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Reaksi Keseluruhan</th>
                        <th>Emphatize</th>
                        <th>Reaksi</th>
                        <th>Define</th>
                        <th>Reaksi</th>
                        <th>Ideate</th>
                        <th>Reaksi</th>
                        <th>Prototype</th>
                        <th>Reaksi</th>
                        <th>Test</th>
                        <th>Reaksi</th>
                    </thead>
                    <tbody>
                        @foreach ($reactions as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->reactAll }}</td>
                            <td>{{ $reaction->emphatize }}</td>
                            <td>{{ $reaction->react1 }}</td>
                            <td>{{ $reaction->define }}</td>
                            <td>{{ $reaction->react2 }}</td>
                            <td>{{ $reaction->ideate }}</td>
                            <td>{{ $reaction->react3 }}</td>
                            <td>{{ $reaction->prototype }}</td>
                            <td>{{ $reaction->react4 }}</td>
                            <td>{{ $reaction->test }}</td>
                            <td>{{ $reaction->react5 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>