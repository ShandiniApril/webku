<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Hasil Belajar Siswa WebKu</p>
        </div>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Pretest Siswa WebKu
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
                      @foreach ($pretest as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 1 Siswa WebKu
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
                      @foreach ($quiz1 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 2 Siswa WebKu
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
                      @foreach ($quiz2 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 3 Siswa WebKu
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
                      @foreach ($quiz3 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 4 Siswa WebKu
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
                      @foreach ($quiz4 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 5 Siswa WebKu
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
                      @foreach ($quiz5 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 6 Siswa WebKu
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
                      @foreach ($quiz6 as $result)
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

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Postest Siswa WebKu
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
                      @foreach ($postest as $result)
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

        {{-- @foreach ($tests as $test)
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
                      @foreach ($results as $result)
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
        @endforeach --}}

    </div>
</x-app-layout>