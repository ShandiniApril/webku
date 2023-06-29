<x-app-layout>
    <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-12 p-4 sm:px-6 lg:px-4">
      <div>
        <p class="font-bold text-center text-2xl pb-8">Materi CSS WebKu</p>
      </div>
      
      @php
        $i=1;
      @endphp
      
      @foreach ($materis as $materi)
      
      <div class="collapse collapse-arrow bg-base-200">
          <input type="checkbox" /> 
          
          <div class="collapse-title font-medium">
            @php 
              echo "$i";
              $i++;
            @endphp
            . {{ $materi->title }}
          </div>
          <div class="collapse-content">
          <div class="mx-6">
              <p>Highlight: {{ $materi->highlight }}</p>
              <br>
              <a href="/detailMateri/{{ $materi->id }}"><button class="btn btn-primary">Lihat Detail Materi</button></a>
          </div>
          </div>
      </div>
      <br>
    @endforeach
      
    </div>
</x-app-layout>