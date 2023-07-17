<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-2 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-4">Halaman Edit Soal WebKu</p>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-xl">
            <form class="space-y-4" action="/updateQuestion/{{ $question->id }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug (tipe soal, tanpa spasi)</label>
                <div>
                <input id="slug" name="slug" type="string" autocomplete="slug" value="{{ $question->slug }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="no" class="block text-sm font-medium leading-6 text-gray-900">Nomor Soal</label>
                <div class="mt-2">
                <input id="no" name="no" type="int" autocomplete="no" value="{{ $question->no }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="question" class="block text-sm font-medium leading-6 text-gray-900">Pertanyaan</label>
                <div class="mt-2">
                <input id="question" name="question" type="string" autocomplete="question" value="{{ $question->question }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>

            @if ($question->optionImage == null)
            <div>
                <label for="a" class="block text-sm font-medium leading-6 text-gray-900">Pilihan a</label>
                <div class="mt-2">
                <input id="a" name="a" type="string" autocomplete="a" value="{{ $question->a }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="b" class="block text-sm font-medium leading-6 text-gray-900">Pilihan b</label>
                <div class="mt-2">
                <input id="b" name="b" type="string" autocomplete="b" value="{{ $question->b }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="c" class="block text-sm font-medium leading-6 text-gray-900">Pilihan c</label>
                <div class="mt-2">
                <input id="c" name="c" type="string" autocomplete="c" value="{{ $question->c }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="d" class="block text-sm font-medium leading-6 text-gray-900">Pilihan d</label>
                <div class="mt-2">
                <input id="d" name="d" type="string" autocomplete="d" value="{{ $question->d }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
            <div>
                <label for="e" class="block text-sm font-medium leading-6 text-gray-900">Pilihan e</label>
                <div class="mt-2">
                <input id="e" name="e" type="string" autocomplete="e" value="{{ $question->e }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>

            {{-- @else
            <div class="form-control">
                <label for="a" class="label">
                <span class="label-text">Pilihan a ({{ $question->a }})</span>
                </label>
                <input id="a" name="a" type="file" value="{{ $question->a }}" class="file-input file-input-primary @error('a') is-invalid @enderror"/>
                @error('a')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="b" class="label">
                <span class="label-text">Pilihan b ({{ $question->b }})</span>
                </label>
                <input id="b" name="b" type="file" value="{{ $question->b }}" class="file-input file-input-primary @error('b') is-invalid @enderror"/>
                @error('b')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="c" class="label">
                <span class="label-text">Pilihan c ({{ $question->c }})</span>
                </label>
                <input id="c" name="c" type="file" value="{{ $question->c }}" class="file-input file-input-primary @error('c') is-invalid @enderror"/>
                @error('c')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="d" class="label">
                <span class="label-text">Pilihan d ({{ $question->d }})</span>
                </label>
                <input id="d" name="d" type="file" value="{{ $question->d }}" class="file-input file-input-primary @error('d') is-invalid @enderror"/>
                @error('d')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control">
                <label for="e" class="label">
                <span class="label-text">Pilihan e ({{ $question->e }})</span>
                </label>
                <input id="e" name="e" type="file" value="{{ $question->e }}" class="file-input file-input-primary @error('e') is-invalid @enderror"/>
                @error('e')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div> --}}
                
            @endif
            
            <div>
                <div class="flex items-center justify-between">
                  <label for="answer" class="block text-sm font-medium leading-6 text-gray-900">Kunci Jawaban</label>
                </div>
                <div class="mt-2">
                  <select name="answer" id="answer" class="select select-primary w-full">
                    <option value="{{ $question->answer }}" selected>{{ $question->answer }}</option>
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
                <input id="point" name="point" type="string" autocomplete="point" value="{{ $question->point }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-primary focus:ring-primary sm:text-sm sm:leading-6 px-2">
                </div>
            </div>
        
            <div>
                <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md p-2 my-8 text-sm font-semibold leading-6 text-white">Update</button>
            </div>
        
            </form>
        </div>
        
    </div>
</x-app-layout>