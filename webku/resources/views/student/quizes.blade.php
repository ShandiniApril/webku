<x-app-layout>
  <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-6 p-4 sm:px-6 lg:px-4">
    <div>
      <p class="font-bold text-center text-2xl pb-8">Quiz WebKu</p>
    </div>
    
    @if(session()->has('success'))
      <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span class="text-start">{{ session('success') }}</span>
      </div>
    @endif

    @foreach ($quizes as $quiz)
    
    <div class="collapse collapse-arrow bg-base-200">
        <input type="checkbox" /> 
        
        <div class="collapse-title font-medium">
          {{ $quiz->title }}
        </div>
        <div class="collapse-content">
        <div class="mx-6">
            <p>Quiz hanya bisa dilakukan 1x. Apakah kamu yakin akan mengerjakan kuis?</p>
            <br>
            <a href="/quiz/{{ $quiz->slug }}"><button class="btn btn-primary">Kerjakan</button></a>
        </div>
        </div>
    </div>
    <br>
  @endforeach
    
  </div>
</x-app-layout>