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
                <div class="overflow-x-auto">
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
                            <th>No6</th>
                            <th>No7</th>
                            <th>No8</th>
                            <th>No9</th>
                            <th>No10</th>
                            <th>No11</th>
                            <th>No12</th>
                            <th>No13</th>
                            <th>No14</th>
                            <th>No15</th>
                            <th>No16</th>
                            <th>No17</th>
                            <th>No18</th>
                            <th>No19</th>
                            <th>No20</th>
                            <th>No21</th>
                            <th>No22</th>
                            <th>No23</th>
                            <th>No24</th>
                            <th>No25</th>
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
                            <td>{{ $result->no6 }}</td>
                            <td>{{ $result->no7 }}</td>
                            <td>{{ $result->no8 }}</td>
                            <td>{{ $result->no9 }}</td>
                            <td>{{ $result->no10 }}</td>
                            <td>{{ $result->no11 }}</td>
                            <td>{{ $result->no12 }}</td>
                            <td>{{ $result->no13 }}</td>
                            <td>{{ $result->no14 }}</td>
                            <td>{{ $result->no15 }}</td>
                            <td>{{ $result->no16 }}</td>
                            <td>{{ $result->no17 }}</td>
                            <td>{{ $result->no18 }}</td>
                            <td>{{ $result->no19 }}</td>
                            <td>{{ $result->no20 }}</td>
                            <td>{{ $result->no21 }}</td>
                            <td>{{ $result->no22 }}</td>
                            <td>{{ $result->no23 }}</td>
                            <td>{{ $result->no24 }}</td>
                            <td>{{ $result->no25 }}</td>
                            <td>{{ $result->score }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz1  as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result->user->name }}</td>
                                <td>{{ $result->no1 }}</td>
                                <td>{{ $result->no2 }}</td>
                                <td>{{ $result->no3 }}</td>
                                <td>{{ $result->score }}</td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>1</td>
                                <td>Daffa Maheswara Kusuma</td>
                                <td>a</td>
                                <td>b</td>
                                <td>c</td>
                                <td>d</td>
                                <td>e</td>
                                <td>100</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
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
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>No4</th>
                            <th>No5</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz2  as $result)
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
        </div>
        <br>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 3 Siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>No4</th>
                            <th>No5</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz3  as $result)
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
        </div>
        <br>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" />  
            <div class="collapse-title font-medium">
                Hasil Quiz 4 Siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>No4</th>
                            <th>No5</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz4  as $result)
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
        </div>
        <br>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 5 Siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>No4</th>
                            <th>No5</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz5  as $result)
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
        </div>
        <br>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Quiz 6 Siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <div class="overflow-x-auto">
                    <table class="table mx-auto">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No1</th>
                            <th>No2</th>
                            <th>No3</th>
                            <th>No4</th>
                            <th>No5</th>
                            <th>Score</th>
                        </thead>
                        <tbody>
                            @foreach ($quiz6  as $result)
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
        </div>
        <br>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Hasil Postest Siswa WebKu
            </div>
            <div class="collapse-content">
            <div>
                <div class="overflow-x-auto">
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
                            <th>No6</th>
                            <th>No7</th>
                            <th>No8</th>
                            <th>No9</th>
                            <th>No10</th>
                            <th>No11</th>
                            <th>No12</th>
                            <th>No13</th>
                            <th>No14</th>
                            <th>No15</th>
                            <th>No16</th>
                            <th>No17</th>
                            <th>No18</th>
                            <th>No19</th>
                            <th>No20</th>
                            <th>No21</th>
                            <th>No22</th>
                            <th>No23</th>
                            <th>No24</th>
                            <th>No25</th>
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
                            <td>{{ $result->no6 }}</td>
                            <td>{{ $result->no7 }}</td>
                            <td>{{ $result->no8 }}</td>
                            <td>{{ $result->no9 }}</td>
                            <td>{{ $result->no10 }}</td>
                            <td>{{ $result->no11 }}</td>
                            <td>{{ $result->no12 }}</td>
                            <td>{{ $result->no13 }}</td>
                            <td>{{ $result->no14 }}</td>
                            <td>{{ $result->no15 }}</td>
                            <td>{{ $result->no16 }}</td>
                            <td>{{ $result->no17 }}</td>
                            <td>{{ $result->no18 }}</td>
                            <td>{{ $result->no19 }}</td>
                            <td>{{ $result->no20 }}</td>
                            <td>{{ $result->no21 }}</td>
                            <td>{{ $result->no22 }}</td>
                            <td>{{ $result->no23 }}</td>
                            <td>{{ $result->no24 }}</td>
                            <td>{{ $result->no25 }}</td>
                            <td>{{ $result->score }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        <br>

    </div>
</x-app-layout>