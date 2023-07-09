<x-app-layout>
    <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-6 p-4 sm:px-6 lg:px-4">
      @if(session()->has('success'))
        <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span class="text-start">{{ session('success') }}</span>
        </div>
      @endif
      
      <div>
        <p class="font-bold text-center text-2xl pb-8">Materi CSS WebKu</p>
      </div>
      
      @foreach ($subjects as $subject)
        <div class="collapse collapse-arrow bg-base-200">
            <input type="checkbox" /> 
            
            <div class="collapse-title font-medium">
              {{ $subject->id }}. {{ $subject->title }}
            </div>
            <div class="collapse-content">
            <div class="mx-6">
                <p>Highlight: {{ $subject->highlight }}</p>
                <br>
                <a href="/subjectDetail/{{ $subject->id }}"><button class="btn btn-primary">Lihat Detail Materi</button></a>
            </div>
            </div>
        </div>
        <br>
      @endforeach
      
    </div>
</x-app-layout>