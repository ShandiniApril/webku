<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Hasil Belajar Siswa WebKu</p>
        </div>

        @foreach ($tests as $test)
        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil test {{ $test->slug }} siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>No1</th>
                          <th>No2</th>
                          <th>No3</th>
                          <th>No4</th>
                          <th>No5</th>
                          <th>Score</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $test == $test->slug?>
                        <dd>{{ $test }}</dd>
                      @foreach (<?php $test ?> as $result)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $result->user->name }}</td>
                          <td>{{ $result->no1 }}</td>
                          <td>{{ $result->no2 }}</td>
                          <td>{{ $result->no3 }}</td>
                          <td>{{ $result->no4 }}</td>
                          <td>{{ $result->no5 }}</td>
                          <td>{{ $result->score }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <br>
        @endforeach

    </div>
</x-app-layout>