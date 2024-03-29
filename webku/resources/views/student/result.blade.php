<x-app-layout>
  <div class="flex flex-col mx-auto border-opacity-50 w-full max-w-screen-lg p-4 sm:px-6 lg:px-4">
    <div class="grid flex-grow card bg-base-100 rounded-box place-items-center py-8">
      @if(session()->has('success'))
        <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span class="text-start">{{ session('success') }}</span>
        </div>
      @endif

      <div>
        <p class="font-bold text-center text-2xl">Peringkat 3 Besar Siswa WebKu</p>
      </div>  
      <div class="flex flex-col lg:flex-row gap-8 mt-12">
        @foreach($ranking as $rank)
          <div class="card w-56 bg-gray-300 shadow-xl">
            <div class="avatar">
              <div class="mx-auto my-auto mt-8 w-24 rounded-full">
                <img src="{{ asset('storage/' . $rank->image) }}" />
              </div>
            </div>
            <div class="card-body items-center text-center">
              <p class="card-tittle font-bold">Ranking {{ $loop->iteration }}</p>
              <p>{{ $rank->name }}</p>
              <div class="card-actions">
                <button class="btn btn-primary">{{ $rank->score }}</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="divider"></div>
    
    <div class="grid flex-grow place-items-center">
      <p class="font-bold text-primary text-lg my-4">My Result</p>

      <div class="stats stats-vertical lg:stats-horizontal shadow">
        <div class="stat">
          <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <div class="stat-title">Total Waktu Belajar</div>
          <div class="stat-value text-primary text-2xl">{{ auth()->user()->duration }} menit</div>
          <div class="stat-desc">Ayo terus semangat belajar ya!</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          </div>
          <div class="stat-title">Total Point</div>
          <div class="stat-value text-primary">{{ auth()->user()->score }}</div>
          <div class="stat-desc">Bagus, tingkatkan lagi ya!</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-secondary">
            <div class="avatar online">
              <div class="w-16 rounded-full">
                @if (auth()->user()->image)
                  <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="">
                @else
                  <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="">
                @endif
              </div>
            </div>
          </div>
          <div class="stat-value font-thin">Hello</div>
          <div class="stat-title font-bold text-primary">{{ auth()->user()->name }}</div>
          <div class="stat-desc">Kamu terbaik!</div>
        </div>
      </div>
      <br>

      <div class="flex flex-col mx-auto w-full lg:flex-row my-8">
        <div class="grid flex-grow card h-60 bg-base-300 rounded-box place-items-center py-6">
            <p class="font-bold text-primary text-lg">Progres WebKu</p>
            <div class="radial-progress text-primary" style="--value:{{ auth()->user()->progres }};">{{ auth()->user()->progres }}</div>
            <p class="text-sm">Pantang menyerah sampai 100%!</p>
        </div> 
        <div class="divider lg:divider-horizontal"></div> 
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center py-4">
          <p class="font-bold text-primary text-lg my-4">Daftar Hasil TestKu</p>
          <table class="table mb-8">
            <thead>
              <tr>
                  <th>No</th>
                  <th>Test</th>
                  <th>Score</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($results as $result)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $result->slug }}</td>
                  <td>{{ $result->score }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
{{-- 
      <div class="my-6 w-full max-w-screen-lg">
        <table class="mx-auto">
          <thead class="bg-base-300 border-2">
            <tr>
                <th class="p-3 tracking-wide">No</th>
                <th class="p-3 tracking-wide">Test</th>
                <th class="p-3 tracking-wide">Score</th>
                <th class="p-3 tracking-wide">Waktu Pengerjaan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
            <tr class="border-2">
                <td class="p-3 tracking-wide">{{ $loop->iteration }}</td>
                <td class="p-3 tracking-wide">{{ $result->slug }}</td>
                <td class="p-3 tracking-wide">{{ $result->score }}</td>
                <td class="p-3 tracking-wide">{{ $result->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div> --}}

  </div>
</div>
</x-app-layout>