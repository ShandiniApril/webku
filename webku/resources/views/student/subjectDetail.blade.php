<x-app-layout>
  <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-6 p-4 sm:px-6 lg:px-4">

    @if(session()->has('failed'))
      <div class="alert alert-error sm:mx-auto sm:w-full sm:max-w-sm mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        {{ session('failed') }}
        <span></span>
      </div>
    @endif

    <p class="font-bold text-center text-2xl pb-8">{{ $subject->title }}</p>

    <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-2">

      <p class="p-4">{{ $subject->highlight }}</p>
      <br>
      <!-- Element Video -->
      <div class="h-auto w-full md:max-w-xl px-4">
        <iframe width="100%" height="300" src="{{ $subject->video }}" title="WebKu | Pengenalan CSS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <br>
      <!-- Element pdf -->
      <div class="h-auto w-full md:max-w-3xl">
        <iframe width="100%" height="350" src="{{ $subject->pdf }}" allow="autoplay"></iframe>
      </div>
      
      <p class="mt-8 px-4 text-sm font-bold" >Temukan kode dalam materi dan kamu akan mendapatkan 5 poin progres WebKu</p><br>

      <div class="alert w-full md:max-w-3xl mb-4">
        <form action="" method="POST">
        @csrf
          <label for="code" class="text-sm font-bold leading-6 text-gray-900">Masukkan kode yang berhasil kamu temukan disini</label>
          <input type="string" name="code" placeholder="Kode" class="input input-bordered w-full max-w-xs" /> <br>
          <div>
            <button type="submit" class="btn btn-sm btn-primary" {{ $reaction == null ? '' : 'disabled' }}>Enter</button>
            {{-- <a href="{{ $reaction == null ? '/test/quiz' . $subject->id : ''}}">
              <button type="submit" class="btn btn-sm btn-primary" {{ $reaction == null ? '' : 'disabled' }}>Kerjakan</button>
            </a> --}}
          </div>
        </form>
      </div>
      
      <p class="mt-8 px-4 text-sm font-bold" >Jika sudah paham dengan materinya ayo kerjakan kuisnya!</p><br>
      <div class="alert w-full md:max-w-3xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Ingat! kuis hanya bisa dikerjakan satu kali.</span>
        <div>
          <a href="{{ $quizes == null ? '/test/quiz' . $subject->id : ''}}">
            <button class="btn btn-primary" {{ $quizes == null ? '' : 'disabled' }}>Kerjakan</button>
          </a>
        </div>
      </div>


      {{-- form --}}
      {{-- <div class="mx-auto sm:w-full sm:max-w-lg">
        <form class="space-y-6" action="#" method="POST">
          @csrf
          <input style="visibility: hidden" name="subject_id" value="{{ $subject->id }}">
          <div>
            <label for="code" class="text-sm font-bold leading-6 text-gray-900">Masukkan kode ditemukan dalam materi</label>
            <div>
              <input name="code" type="string" placeholder="Kode" class="input input-bordered input-secondary w-full max-w-xs" />
            </div>
          </div>
          <div>
            <label for="rating" class="text-sm font-bold leading-6 text-gray-900">Rating kamu untuk materi ini (1-5 bintang)</label>
            <div class="rating rating-lg gap-6">
              <input type="radio" name="rating" class="mask mask-star-2 bg-red-400" value="1" required checked/>
              <input type="radio" name="rating" class="mask mask-star-2 bg-orange-400" value="2" required/>
              <input type="radio" name="rating" class="mask mask-star-2 bg-yellow-400" value="3" required/>
              <input type="radio" name="rating" class="mask mask-star-2 bg-lime-400" value="4" required/>
              <input type="radio" name="rating" class="mask mask-star-2 bg-green-400" value="5" required/>
            </div>
          </div>
          <div>
            <label for="expression" class="text-sm font-bold text-gray-900 text-center">Ekspresiku ketika belajar</label>
            <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
            <div class="mx-4 space-x-14">
              <input type="radio" name="expression" class="radio radio-primary" value="Semangat" required/>
              <input type="radio" name="expression" class="radio radio-primary" value="Fokus" required/>
              <input type="radio" name="expression" class="radio radio-primary" value="Biasa saja" required/>
              <input type="radio" name="expression" class="radio radio-primary" value="Bingung" required/>
              <input type="radio" name="expression" class="radio radio-primary" value="Berpikir keras" required/>
              <input type="radio" name="expression" class="radio radio-primary" value="Nangis" required/>
            </div>
            <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
          </div>
          <div>
            <label for="comment" class="text-sm font-bold leading-6 text-gray-900">Tanggapan terhadap materi dan ilmu yang didapat</label>
            <div class="mt-2">
              <textarea id="comment" name="comment" type="text" autocomplete="comment" required class="textarea w-full rounded-md border-0 pt-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
            </div>
          </div>
          <input style="visibility: hidden" name="subject" value="{{ $subject->title }}"> 
          <div>
            <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md mb-4 text-sm font-semibold leading-6 text-white">Submit</button>
          </div>

          @if($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          @endif
        </form>
      </div> --}}
      
      {{-- button --}}
      <div class="flex space-x-4 my-6">
        @if ( $subject->id == 1 )
          <a href="/subject"><button class="btn btn-primary">Kembali</button></a>
          <a href="/subjectDetail/{{ $subject->id+1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>            
          </button></a>
        @elseif ( $subject->id == $subject->count() )
          <a href="/subjectDetail/{{ $subject->id-1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button></a>
          <a href="/subject"><button class="btn btn-primary">Kembali</button></a>
        @else
          <a href="/subjectDetail/{{ $subject->id-1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>             
          </button></a>
          <a href="/subject"><button class="btn btn-primary">Kembali</button></a>
          <a href="/subjectDetail/{{ $subject->id+1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>              
          </button></a>
        @endif
        
      </div>
    </div>
  </div>
</x-app-layout>