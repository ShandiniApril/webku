<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        @if(session()->has('success'))
            <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="text-start">{{ session('success') }}</span>
            </div>
        @endif
        <div>
            <p class="font-bold text-center text-2xl pb-8">Lihat Daftar Siswa WebKu</p>
        </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Siswa</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Score</th>
                        <th>Progres</th>
                        <th>Waktu Belajar</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img class="h-20 w-auto" src="{{ asset('storage/' . $student->image) }}" /></td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->score }}</td>
                        <td>{{ $student->progres }} %</td>
                        <td>{{ $student->duration }} menit</td>
                        <td><a href="/delete/{{ $student->id }}"><button class="btn btn-error">Delete</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        
    </div>
</x-app-layout>