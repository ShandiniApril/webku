<x-app-layout>
  <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-12 p-4 sm:px-6 lg:px-4">

    <p class="font-bold text-center text-2xl pb-8">{{ $materi->title }}</p>

    <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-2">
      <p class="p-4">{{ $materi->highlight }}</p>
      <br>
      <!-- Element Video -->
      <div class="h-auto w-full md:max-w-xl px-4">
        <iframe width="100%" height="300" src="{{ $materi->video }}" title="WebKu | Pengenalan CSS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <br>
      <!-- Element pdf -->
      <div class="h-auto w-full md:max-w-xl">
        <iframe width="100%" height="300" src="{{ $materi->pdf }}" allow="autoplay"></iframe>
      </div>
      <br>
      <div class="flex space-x-4 mb-4">
        @if ( $materi->id == 1 )
          <a href="/materi"><button class="btn btn-primary">Kembali</button></a>
          <a href="/detailMateri/{{ $materi->id+1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>            
          </button></a>
        @elseif ( $materi->id == 6 )
          <a href="/detailMateri/{{ $materi->id-1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button></a>
          <a href="/materi"><button class="btn btn-primary">Kembali</button></a>\
        @else
          <a href="/detailMateri/{{ $materi->id-1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>             
          </button></a>
          <a href="/materi"><button class="btn btn-primary">Kembali</button></a>
          <a href="/detailMateri/{{ $materi->id+1 }}"><button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>              
          </button></a>
        @endif
        
      </div>
      
    </div>
    
  </div>
</x-app-layout>