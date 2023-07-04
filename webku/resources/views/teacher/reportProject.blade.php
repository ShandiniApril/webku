<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
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
                    </thead>
                    <tbody>
                    <?php 
                        $i=1;
                    ?>
                    @foreach ($groups as $group)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->members }}</td>
                        <td>{{ $group->assignment }}</td>
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
                        <?php 
                            $i=1;
                        ?>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $i++ }}</td>
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
                        <?php 
                            $i=1;
                        ?>
                        @foreach ($reactions as $reaction)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $reaction->user_id }}</td>
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