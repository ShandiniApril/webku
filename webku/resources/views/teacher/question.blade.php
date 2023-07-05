<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Halaman Soal Guru</p>
        </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Soal Quiz</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Slug</th>
                        <th>Judul Materi</th>
                        <th>No Soal</th>
                        <th>Pertanyaan</th>
                        <th>Pilihan a</th>
                        <th>Pilihan b</th>
                        <th>Pilihan c</th>
                        <th>Pilihan d</th>
                        <th>Pilihan e</th>
                        <th>Jawaban</th>
                        <th>Point</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($quizes as $quiz)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $quiz->slug }}</td>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->no }}</td>
                        <td>{{ $quiz->question }}</td>
                        <td>{{ $quiz->a }}</td>
                        <td>{{ $quiz->b }}</td>
                        <td>{{ $quiz->c }}</td>
                        <td>{{ $quiz->d }}</td>
                        <td>{{ $quiz->e }}</td>
                        <td>{{ $quiz->answer }}</td>
                        <td>{{ $quiz->point }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-200 my-6" id="addQuizes">
            <input type="checkbox" /> 
            <div class="collapse-title font-bold">
              Tambah Quiz
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
                    <form class="space-y-4" action="/question/addQuizes" method="POST">
                    @csrf
                    <div>
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (kode materi, tanpa spasi)</label>
                        <div>
                        <input id="slug" name="slug" type="string" autocomplete="slug" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Judul Materi</label>
                        <div>
                        <input id="title" name="title" type="string" autocomplete="title" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="no" class="block text-sm font-medium leading-6 text-gray-900">Nomor Soal</label>
                        <div class="mt-2">
                        <input id="no" name="no" type="int" autocomplete="no" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="question" class="block text-sm font-medium leading-6 text-gray-900">Pertanyaan</label>
                        <div class="mt-2">
                        <input id="question" name="question" type="string" autocomplete="question" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="a" class="block text-sm font-medium leading-6 text-gray-900">Pilihan a</label>
                        <div class="mt-2">
                        <input id="a" name="a" type="string" autocomplete="a" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="b" class="block text-sm font-medium leading-6 text-gray-900">Pilihan b</label>
                        <div class="mt-2">
                        <input id="b" name="b" type="string" autocomplete="b" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="c" class="block text-sm font-medium leading-6 text-gray-900">Pilihan c</label>
                        <div class="mt-2">
                        <input id="c" name="c" type="string" autocomplete="c" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="d" class="block text-sm font-medium leading-6 text-gray-900">Pilihan d</label>
                        <div class="mt-2">
                        <input id="d" name="d" type="string" autocomplete="d" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="e" class="block text-sm font-medium leading-6 text-gray-900">Pilihan e</label>
                        <div class="mt-2">
                        <input id="e" name="e" type="string" autocomplete="e" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                          <label for="answer" class="block text-sm font-medium leading-6 text-gray-900">Kunci Jawaban</label>
                        </div>
                        <div class="mt-2">
                          <select name="answer" id="answer" class="select select-primary w-full">
                            <option disabled selected>Pilih Kunci Jawaban</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                          </select>
                        </div>
                    </div>
                    <div>
                        <label for="point" class="block text-sm font-medium leading-6 text-gray-900">Bobot Nilai</label>
                        <div class="mt-2">
                        <input id="point" name="point" type="float" autocomplete="point" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                
                    <div>
                        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-6 text-sm font-semibold leading-6 text-white">Submit</button>
                    </div>
                
                    </form>
                </div>
            </div>
        </div>

        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Soal Ujian</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Slug</th>
                        <th>No Soal</th>
                        <th>Gambar</th>
                        <th>Pertanyaan</th>
                        <th>Pilihan a</th>
                        <th>Pilihan b</th>
                        <th>Pilihan c</th>
                        <th>Pilihan d</th>
                        <th>Pilihan e</th>
                        <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($exam as $exam)
                    <tr>
                        <td>{{ $exam->id }}</td>
                        <td>{{ $exam->slug }}</td>
                        <td>{{ $exam->no }}</td>
                        <td>{{ $exam->image }}</td>
                        <td>{{ $exam->question }}</td>
                        <td>{{ $exam->optionA }}</td>
                        <td>{{ $exam->optionB }}</td>
                        <td>{{ $exam->optionC }}</td>
                        <td>{{ $exam->optionD }}</td>
                        <td>{{ $exam->optionE }}</td>
                        <td>{{ $exam->answer }}</td>
                        <td>{{ $exam->point }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-200 mt-6" id="examNoImage">
            <input type="checkbox" /> 
            <div class="collapse-title font-bold">
              Tambah Soal Ujian dengan Pilihan Text
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
                    <form class="space-y-4" action="/question/examNoImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (kode materi, tanpa spasi)</label>
                        <div>
                        <input id="slug" name="slug" type="string" autocomplete="slug" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="no" class="block text-sm font-medium leading-6 text-gray-900">Nomor Soal</label>
                        <div class="mt-2">
                        <input id="no" name="no" type="int" autocomplete="no" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="image" class="label">
                          <span class="label-text">Gambar Soal (jika ada)</span>
                        </label>
                        <input id="image" name="image" type="file" class="file-input file-input-primary @error('image') is-invalid @enderror"/>
                        @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                    <div>
                        <label for="question" class="block text-sm font-medium leading-6 text-gray-900">Pertanyaan</label>
                        <div class="mt-2">
                        <input id="question" name="question" type="string" autocomplete="question" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="optionA" class="block text-sm font-medium leading-6 text-gray-900">Pilihan a</label>
                        <div class="mt-2">
                        <input id="optionA" name="optionA" type="string" autocomplete="optionA" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="optionB" class="block text-sm font-medium leading-6 text-gray-900">Pilihan b</label>
                        <div class="mt-2">
                        <input id="optionB" name="optionB" type="string" autocomplete="optionB" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="optionC" class="block text-sm font-medium leading-6 text-gray-900">Pilihan c</label>
                        <div class="mt-2">
                        <input id="optionC" name="optionC" type="string" autocomplete="optionC" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="optionD" class="block text-sm font-medium leading-6 text-gray-900">Pilihan d</label>
                        <div class="mt-2">
                        <input id="optionD" name="optionD" type="string" autocomplete="optionD" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="optionE" class="block text-sm font-medium leading-6 text-gray-900">Pilihan e</label>
                        <div class="mt-2">
                        <input id="optionE" name="optionE" type="string" autocomplete="optionE" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                          <label for="answer" class="block text-sm font-medium leading-6 text-gray-900">Kunci Jawaban</label>
                        </div>
                        <div class="mt-2">
                          <select name="answer" id="answer" class="select select-primary w-full">
                            <option disabled selected>Pilih Kunci Jawaban</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                          </select>
                        </div>
                    </div>
                
                    <div>
                        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-6 text-sm font-semibold leading-6 text-white">Submit</button>
                    </div>
                
                    </form>
                </div>
            </div>
        </div>

        <div class="collapse collapse-plus bg-base-200 my-6" id="examImage">
            <input type="checkbox" /> 
            <div class="collapse-title font-bold">
              Tambah Soal Ujian dengan Pilihan Gambar
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
                    <form class="space-y-4" action="/question/examImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (kode materi, tanpa spasi)</label>
                        <div>
                        <input id="slug" name="slug" type="string" autocomplete="slug" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="no" class="block text-sm font-medium leading-6 text-gray-900">Nomor Soal</label>
                        <div class="mt-2">
                        <input id="no" name="no" type="int" autocomplete="no" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="image" class="label">
                          <span class="label-text">Gambar Soal (jika ada)</span>
                        </label>
                        <input id="image" name="image" type="file" class="file-input file-input-primary @error('image') is-invalid @enderror"/>
                        @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>
                    <div>
                        <label for="question" class="block text-sm font-medium leading-6 text-gray-900">Pertanyaan</label>
                        <div class="mt-2">
                        <input id="question" name="question" type="string" autocomplete="question" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="optionA" class="label">
                          <span class="label-text">Pilihan a</span>
                        </label>
                        <input id="optionA" name="optionA" type="file" required class="file-input file-input-primary @error('optionA') is-invalid @enderror"/>
                        @error('optionA')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="optionB" class="label">
                          <span class="label-text">Pilihan b</span>
                        </label>
                        <input id="optionB" name="optionB" type="file" required class="file-input file-input-primary @error('optionB') is-invalid @enderror"/>
                        @error('optionB')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="optionC" class="label">
                          <span class="label-text">Pilihan c</span>
                        </label>
                        <input id="optionC" name="optionC" type="file" required class="file-input file-input-primary @error('optionC') is-invalid @enderror"/>
                        @error('optionC')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="optionD" class="label">
                          <span class="label-text">Pilihan d</span>
                        </label>
                        <input id="optionD" name="optionD" type="file" required class="file-input file-input-primary @error('optionD') is-invalid @enderror"/>
                        @error('optionD')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="optionE" class="label">
                          <span class="label-text">Pilihan e</span>
                        </label>
                        <input id="optionE" name="optionE" type="file" required class="file-input file-input-primary @error('optionE') is-invalid @enderror"/>
                        @error('optionE')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                          <label for="answer" class="block text-sm font-medium leading-6 text-gray-900">Kunci Jawaban</label>
                        </div>
                        <div class="mt-2">
                          <select name="answer" id="answer" class="select select-primary w-full">
                            <option disabled selected>Pilih Kunci Jawaban</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                          </select>
                        </div>
                    </div>
                    <input style="visibility: hidden" name="optionImage" value="yes">
                    <div>
                        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-6 text-sm font-semibold leading-6 text-white">Submit</button>
                    </div>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>