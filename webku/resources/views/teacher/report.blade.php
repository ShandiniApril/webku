<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Hasil Belajar Siswa WebKu</p>
        </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Score Quizes</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Quiz</th>
                        <th>No1</th>
                        <th>No2</th>
                        <th>No3</th>
                        <th>No4</th>
                        <th>No5</th>
                        <th>Score</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($resultQuizes as $quiz)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $quiz->user_id }}</td>
                        <td>{{ $quiz->slug }}</td>
                        <td>{{ $quiz->no1 }}</td>
                        <td>{{ $quiz->no2 }}</td>
                        <td>{{ $quiz->no3 }}</td>
                        <td>{{ $quiz->no4 }}</td>
                        <td>{{ $quiz->no5 }}</td>
                        <td>{{ $quiz->score }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>