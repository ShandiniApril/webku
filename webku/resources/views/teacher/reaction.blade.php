<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Halaman Reaksi Belajar Siswa</p>
        </div>

        <div class="collapse collapse-arrow bg-primary">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
                Reaksi Siswa WebKu terhadap Materi 1 Pengenalan Dasar CSS
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react1  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 2 Sintaks & Selektor CSS
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react2  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 3 Cara Penulisan CSS
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react3  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 4 Font & Text Formatting
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react4  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 5 Color & Background
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react5  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 6 Box Model
            </div>
            <div class="collapse-content">
            <div>
                <table class="table mx-auto">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Materi</th>
                        <th>Reaksi</th>
                        <th>Komentar</th>
                    </thead>
                    <tbody>
                        @foreach ($react6  as $reaction)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reaction->user->name }}</td>
                            <td>{{ $reaction->subject->title }}</td>
                            <td>{{ $reaction->expression }}</td>
                            <td>{{ $reaction->comment }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <br>
    </div>
</x-app-layout>