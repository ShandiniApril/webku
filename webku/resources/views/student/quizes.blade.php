<x-app-layout>
  <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-12 p-4 sm:px-6 lg:px-4">
    @if(session()->has('success'))
      <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span class="text-start">{{ session('success') }}</span>
      </div>
    @endif
    
    <div>
      <p class="font-bold text-center text-2xl pb-8">Quiz WebKu</p>
    </div>
    <!-- quiz 1 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        1. Pengenalan CSS
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/test/quiz1"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
    <!-- quiz 2 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        2. Sintaks dan Selektor CSS
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/quiz"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
    <!-- quiz 3 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        3. Cara Penulisan CSS
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/quiz"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
    <!-- quiz 4 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        4. Font dan Text Formatting
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/quiz"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
    <!-- quiz 5 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        5. Warna dan Background
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/quiz"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
    <!-- quiz 6 -->
    <div class="collapse collapse-arrow bg-base-200">
      <input type="checkbox" /> 
      <div class="collapse-title font-medium">
        6. Box Model
      </div>
      <div class="collapse-content"> 
        <div class="mx-6">
          <a href="/quiz"><button class="btn btn-primary">Start</button></a>
          <a href="/quiz"><button class="btn btn-neutral">Finish</button></a>
        </div>
      </div>
    </div>
    <br>
  </div>
</x-app-layout>