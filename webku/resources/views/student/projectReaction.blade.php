<x-app-layout>
  <div class="flex min-h-full flex-col justify-center px-6 my-6 lg:px-8">
  
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Tanggapan Pengerjaan Project</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-xl">
      <form action="/projectReaction" method="POST">
        @csrf
  
        <p class="mt-6 font-bold text-primary">Pengerjaan tahap 1 (Emphatize)</p>
        <div>
            <label for="emphatize" class="text-sm font-bold text-gray-900 text-center">Ekspresiku</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="emphatize" class="radio radio-primary" value="Semangat"/>
              <input type="radio" name="emphatize" class="radio radio-primary" value="Fokus"/>
              <input type="radio" name="emphatize" class="radio radio-primary" value="Biasa saja"/>
              <input type="radio" name="emphatize" class="radio radio-primary" value="Bingung"/>
              <input type="radio" name="emphatize" class="radio radio-primary" value="Berpikir keras"/>
              <input type="radio" name="emphatize" class="radio radio-primary" value="Nangis"/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="react1" class="block text-sm font-bold leading-6 text-gray-900 mt-2">Ceritakan perasaanmu ketika di tahap tersebut</label>
          </div>
          <div class="mt-2">
            <textarea id="react1" name="react1" type="text" autocomplete="react1" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
          </div>
        </div>

        <p class="mt-6 font-bold text-primary">Pengerjaan tahap 2 (Define)</p>
        <div>
            <label for="define" class="text-sm font-bold text-gray-900 text-center">Ekspresiku</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="define" class="radio radio-primary" value="Semangat"/>
              <input type="radio" name="define" class="radio radio-primary" value="Fokus"/>
              <input type="radio" name="define" class="radio radio-primary" value="Biasa saja"/>
              <input type="radio" name="define" class="radio radio-primary" value="Bingung"/>
              <input type="radio" name="define" class="radio radio-primary" value="Berpikir keras"/>
              <input type="radio" name="define" class="radio radio-primary" value="Nangis"/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="react2" class="block text-sm font-bold leading-6 text-gray-900 mt-2">Ceritakan perasaanmu ketika di tahap tersebut</label>
          </div>
          <div class="mt-2">
            <textarea id="react2" name="react2" type="text" autocomplete="react2" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
          </div>
        </div>

        <p class="mt-6 font-bold text-primary">Pengerjaan tahap 3 (Ideate)</p>
        <div>
            <label for="ideate" class="text-sm font-bold text-gray-900 text-center">Ekspresiku</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="ideate" class="radio radio-primary" value="Semangat"/>
              <input type="radio" name="ideate" class="radio radio-primary" value="Fokus"/>
              <input type="radio" name="ideate" class="radio radio-primary" value="Biasa saja"/>
              <input type="radio" name="ideate" class="radio radio-primary" value="Bingung"/>
              <input type="radio" name="ideate" class="radio radio-primary" value="Berpikir keras"/>
              <input type="radio" name="ideate" class="radio radio-primary" value="Nangis"/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="react3" class="block text-sm font-bold leading-6 text-gray-900 mt-2">Ceritakan perasaanmu ketika di tahap tersebut</label>
          </div>
          <div class="mt-2">
            <textarea id="react3" name="react3" type="text" autocomplete="react3" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
          </div>
        </div>

        <p class="mt-6 font-bold text-primary">Pengerjaan tahap 4 (Prototype)</p>
        <div>
            <label for="prototype" class="text-sm font-bold text-gray-900 text-center">Ekspresiku</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="prototype" class="radio radio-primary" value="Semangat"/>
              <input type="radio" name="prototype" class="radio radio-primary" value="Fokus"/>
              <input type="radio" name="prototype" class="radio radio-primary" value="Biasa saja"/>
              <input type="radio" name="prototype" class="radio radio-primary" value="Bingung"/>
              <input type="radio" name="prototype" class="radio radio-primary" value="Berpikir keras"/>
              <input type="radio" name="prototype" class="radio radio-primary" value="Nangis"/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="react4" class="block text-sm font-bold leading-6 text-gray-900 mt-2">Ceritakan perasaanmu ketika di tahap tersebut</label>
          </div>
          <div class="mt-2">
            <textarea id="react4" name="react4" type="text" autocomplete="react4" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
          </div>
        </div>

        <p class="mt-6 font-bold text-primary">Pengerjaan tahap 5 (Test)</p>
        <div>
            <label for="test" class="text-sm font-bold text-gray-900 text-center">Ekspresiku</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="test" class="radio radio-primary" value="Semangat"/>
              <input type="radio" name="test" class="radio radio-primary" value="Fokus"/>
              <input type="radio" name="test" class="radio radio-primary" value="Biasa saja"/>
              <input type="radio" name="test" class="radio radio-primary" value="Bingung"/>
              <input type="radio" name="test" class="radio radio-primary" value="Berpikir keras"/>
              <input type="radio" name="test" class="radio radio-primary" value="Nangis"/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="react5" class="block text-sm font-bold leading-6 text-gray-900 mt-2">Ceritakan perasaanmu ketika di tahap tersebut</label>
          </div>
          <div class="mt-2">
            <textarea id="react5" name="react5" type="text" autocomplete="react5" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
          </div>
        </div>
  
        <div>
            <div class="flex items-center justify-between">
              <label for="reactAll" class="block text-sm font-bold leading-6 text-primary mt-6">Kesan pesan pengerjaan project secara keseluruhan</label>
            </div>
            <div class="mt-2">
              <textarea id="reactAll" name="reactAll" type="text" autocomplete="reactAll" required class="textarea block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
            </div>
        </div>

        <div>
          <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 mt-6 mb-12 text-sm font-semibold leading-6 text-white">Submit</button>
        </div>
  
      </form>
    </div>
  </div>
  
</x-app-layout>