<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-12 p-4 max-w-screen-xl sm:px-2 lg:px-4">
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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->image }}</td>
                        <td>{{ $student->highlight }}</td>
                        <td>{{ $student->video }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>