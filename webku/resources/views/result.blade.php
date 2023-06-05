<x-app-layout>
  <div class="flex flex-col mx-auto border-opacity-50 max-w-screen-lg p-4 sm:px-6 lg:px-4">
    <div class="grid flex-grow card bg-base-100 rounded-box place-items-center py-8">
      <div>
        <p class="font-bold text-center text-2xl">Peringkat 3 Besar Siswa WebKu</p>
      </div>  
      <div class="flex flex-col lg:flex-row gap-8 m-8">
          <div class="card w-56 bg-gray-300 shadow-xl">
              <figure class="px-10 pt-10">
                <img src="/image/maudy.jpg" alt="Shoes" class="rounded-full" />
              </figure>
              <div class="card-body items-center text-center">
                <p class="card-tittle font-bold">Ranking 1</p>
                <p>Mark Lee</p>
                <div class="card-actions">
                  <button class="btn btn-primary">900</button>
                </div>
              </div>
            </div>
            <div class="card w-56 bg-gray-200 shadow-xl">
              <figure class="px-10 pt-10">
                <img src="/image/maudy.jpg" alt="Shoes" class="rounded-full" />
              </figure>
              <div class="card-body items-center text-center">
                <p class="card-tittle font-bold">Ranking 2</p>
                <p>Zulkidin</p>
                <div class="card-actions">
                  <button class="btn btn-primary">884</button>
                </div>
              </div>
            </div>
            <div class="card w-56 bg-gray-100 shadow-xl">
              <figure class="px-10 pt-10">
                <img src="/image/maudy.jpg" alt="Shoes" class="rounded-full" />
              </figure>
              <div class="card-body items-center text-center">
                <p class="card-tittle font-bold">Ranking 3</p>
                <p>Nana Kesayangan</p>
                <div class="card-actions">
                  <button class="btn btn-primary">876</button>
                </div>
              </div>
            </div>
      </div>
    </div>
    <div class="divider"></div>
    
    <div class="grid flex-grow card rounded-box place-items-center">
      <p class="font-bold mt-4">My Result</p>

      <div class="stats shadow">
        <div class="stat">
          <div class="stat-figure text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          </div>
          <div class="stat-title">Total Point</div>
          <div class="stat-value text-primary">870</div>
          <div class="stat-desc">Ayo terus semangat belajar!</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <div class="stat-title">Ranking Kamu</div>
          <div class="stat-value text-secondary">18</div>
          <div class="stat-desc">You doing great!</div>
        </div>
        
        <div class="stat">
          <div class="stat-figure text-secondary">
            <div class="avatar online">
              <div class="w-16 rounded-full">
                <img src="/image/maudy.jpg" />
              </div>
            </div>
          </div>
          <div class="stat-value font-thin">Hello</div>
          <div class="stat-title font-bold text-primary">Haikal Permana</div>
          <div class="stat-desc">You are the best!</div>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row mx-auto my-4 max-w-screen-lg p-4 sm:px-6 lg:px-4"> 
          <div class="grid flex-grow card bg-base-300 rounded-box place-items-center">
              <div class="overflow-x-auto">
                  <table class="table w-auto border-2 flex md-inline-flex">
                      <!-- head -->
                      <thead>
                      <tr>
                          <th></th>
                          <th>Materi</th>
                          <th>Quiz</th>
                          <th>Exam</th>
                      </tr>
                      </thead>
                      <tbody>
                      <!-- row 1 -->
                      <tr>
                          <th>1</th>
                          <td>Pengenalan CSS</td>
                          <td>80</td>
                          <td></td>
                      </tr>
                      <!-- row 2 -->
                      <tr>
                          <th>2</th>
                          <td>Penulisan CSS</td>
                          <td>100</td>
                          <td></td>
                      </tr>
                      <!-- row 3 -->
                      <tr>
                          <th>3</th>
                          <td>Jenis-Jenis Selektor</td>
                          <td>80</td>
                          <td></td>
                      </tr>
                      <!-- row 4 -->
                      <tr>
                          <th>4</th>
                          <td>Font & Text Formatting</td>
                          <td>100</td>
                          <td></td>
                      </tr>
                      <!-- row 5 -->
                      <tr>
                          <th>5</th>
                          <td>Color & Background</td>
                          <td>80</td>
                          <td></td>
                      </tr>
                      <!-- row 6 -->
                      <tr>
                          <th>6</th>
                          <td>Box Model</td>
                          <td>60</td>
                          <td></td>
                      </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</x-app-layout>