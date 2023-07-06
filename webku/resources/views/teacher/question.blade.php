<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-4">Halaman Soal Guru</p>
        </div>
        <div class="collapse collapse-plus bg-base-200 mt-6" id="examNoImage">
            <input type="checkbox" /> 
            <div class="collapse-title font-bold">
              Tambah Soal dengan Pilihan Text
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
                    <form class="space-y-4" action="/question/noImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (tipe soal, tanpa spasi)</label>
                        <div>
                        <input id="slug" name="slug" type="string" autocomplete="slug" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="code" class="block text-sm font-medium leading-6 text-gray-900">code (kode soal, tanpa spasi)</label>
                        <div>
                        <input id="code" name="code" type="string" autocomplete="code" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
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
                        <label for="point" class="block text-sm font-medium leading-6 text-gray-900">Point</label>
                        <div class="mt-2">
                        <input id="point" name="point" type="string" autocomplete="point" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
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
              Tambah Soal dengan Pilihan Gambar
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
                    <form class="space-y-4" action="/question/withImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (kode materi, tanpa spasi)</label>
                        <div>
                        <input id="slug" name="slug" type="string" autocomplete="slug" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                        </div>
                    </div>
                    <div>
                        <label for="code" class="block text-sm font-medium leading-6 text-gray-900">code (kode soal, tanpa spasi)</label>
                        <div>
                        <input id="code" name="code" type="string" autocomplete="code" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
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
                        <label for="a" class="label">
                          <span class="label-text">Pilihan a</span>
                        </label>
                        <input id="a" name="a" type="file" required class="file-input file-input-primary @error('a') is-invalid @enderror"/>
                        @error('a')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="b" class="label">
                          <span class="label-text">Pilihan b</span>
                        </label>
                        <input id="b" name="b" type="file" required class="file-input file-input-primary @error('b') is-invalid @enderror"/>
                        @error('b')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="c" class="label">
                          <span class="label-text">Pilihan c</span>
                        </label>
                        <input id="c" name="c" type="file" required class="file-input file-input-primary @error('c') is-invalid @enderror"/>
                        @error('c')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="d" class="label">
                          <span class="label-text">Pilihan d</span>
                        </label>
                        <input id="d" name="d" type="file" required class="file-input file-input-primary @error('d') is-invalid @enderror"/>
                        @error('d')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="e" class="label">
                          <span class="label-text">Pilihan e</span>
                        </label>
                        <input id="e" name="e" type="file" required class="file-input file-input-primary @error('e') is-invalid @enderror"/>
                        @error('e')
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
                    <div>
                        <label for="point" class="block text-sm font-medium leading-6 text-gray-900">Point</label>
                        <div class="mt-2">
                        <input id="point" name="point" type="string" autocomplete="point" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
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

        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Soal Quiz</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Slug</th>
                        <th>Code</th>
                        <th>No Soal</th>
                        <th>Gambar</th>
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
                        <td>{{ $quiz->code }}</td>
                        <td>{{ $quiz->no }}</td>
                        <td>{{ $quiz->image }}</td>
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
        <br>

        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Soal Pretest</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Slug</th>
                        <th>Code</th>
                        <th>No Soal</th>
                        <th>Gambar</th>
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
                    @foreach ($pretest as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->no }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->question }}</td>
                        <td>{{ $item->a }}</td>
                        <td>{{ $item->b }}</td>
                        <td>{{ $item->c }}</td>
                        <td>{{ $item->d }}</td>
                        <td>{{ $item->e }}</td>
                        <td>{{ $item->answer }}</td>
                        <td>{{ $item->point }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        <br>

        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-6">
            <p class="font-bold pb-2">Tabel Soal Postest</p>
            <div class="overflow-x-auto lg:max-w-screen-lg py-2">
                <table class="table">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Slug</th>
                        <th>Code</th>
                        <th>No Soal</th>
                        <th>Gambar</th>
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
                    @foreach ($postest as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->no }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->question }}</td>
                        <td>{{ $item->a }}</td>
                        <td>{{ $item->b }}</td>
                        <td>{{ $item->c }}</td>
                        <td>{{ $item->d }}</td>
                        <td>{{ $item->e }}</td>
                        <td>{{ $item->answer }}</td>
                        <td>{{ $item->point }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>