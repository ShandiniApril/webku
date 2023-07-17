<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
      @if(session()->has('success'))
          <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-6">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>{{ session('success') }}</span>
          </div>
      @endif  
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
                          <select name="answer" id="answer" class="select select-primary w-full" required>
                            <option disabled selected>Pilih Kunci Jawaban</option>
                            <option value="a">a</option>
                            <option value="b">b</option>
                            <option value="c">c</option>
                            <option value="d">d</option>
                            <option value="e">e</option>
                          </select>
                          @error('answer')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
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
                          <select name="answer" id="answer" class="select select-primary w-full" required>
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
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($quizes as $quiz)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $quiz->slug }}</td>
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
                        <td>
                          <div class="flex">
                            <a href="/editQuestion/{{ $quiz->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#359C91" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </a>
                            <a href="/deleteQuestion/{{ $quiz->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#E33232" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>
                            </a>
                          </div>
                      </td>
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
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pretest as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->slug }}</td>
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
                        <td>
                          <div class="flex">
                            <a href="/editQuestion/{{ $item->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#359C91" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </a>
                            <a href="/deleteQuestion/{{ $item->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#E33232" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>
                            </a>
                          </div>
                      </td>
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
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($postest as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->slug }}</td>
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
                        <td>
                          <div class="flex">
                            <a href="/editQuestion/{{ $item->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#359C91" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                </svg>
                            </a>
                            <a href="/deleteQuestion/{{ $item->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#E33232" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                </svg>
                            </a>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>