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
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react1  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 2 Sintaks & Selektor CSS
            </div>
            <div class="collapse-content">
            <div>
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react2  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 3 Cara Penulisan CSS
            </div>
            <div class="collapse-content">
            <div>
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react3  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 4 Font & Text Formatting
            </div>
            <div class="collapse-content">
            <div>
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react4  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 5 Color & Background
            </div>
            <div class="collapse-content">
            <div>
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react5  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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
                Reaksi Siswa WebKu terhadap Materi 6 Box Model
            </div>
            <div class="collapse-content">
            <div>
                <div class="m-4">
                    <table class="w-full rounded-lg">
                        <thead class="bg-base-300 border-2">
                            <th class="p-3 tracking-wide">No</th>
                            <th class="p-3 tracking-wide">Nama</th>
                            <th class="p-3 tracking-wide">Materi</th>
                            <th class="p-3 tracking-wide">Reaksi</th>
                            <th class="p-3 tracking-wide">Komentar</th>
                        </thead>
                        <tbody class="bg-base-100 border-2">
                            @foreach ($react6  as $reaction)
                            <tr class="border-2">
                                <td class="p-2">{{ $loop->iteration }}</td>
                                <td class="p-2">{{ $reaction->user->name }}</td>
                                <td class="p-2">{{ $reaction->subject->title }}</td>
                                <td class="p-2">{{ $reaction->expression }}</td>
                                <td class="p-2">{{ $reaction->comment }}</td>
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