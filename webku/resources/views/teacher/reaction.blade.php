<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Halaman Reaksi Belajar Siswa</p>
        </div>

        <div class="mt-6 grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Reaksi Siswa dalam Pengerjaan Proyek</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Materi</th>
                    <th>Reaksi</th>
                    <th>Komentar</th>
                </thead>
                <tbody>
                    @foreach ($reactions as $reaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reaction->user->name }}</td>
                        <td>{{ $reaction->subject }}</td>
                        <td>{{ $reaction->expression }}</td>
                        <td>{{ $reaction->comment }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>