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
        <div class="flex flex-col lg:flex-row mx-auto my-4 max-w-screen-lg p-4 sm:px-6 lg:px-4">
            <div class="grid flex-grow card h-44 bg-base-300 rounded-box place-items-center">
                <div class="card-body items-center text-center">
                    <p class="card-tittle font-bold">Pangeran Haekal</p>
                    <p>Ranking 12</p>
                    <div class="card-actions">
                      <button class="btn btn-primary">700</button>
                    </div>
                  </div>    
            </div> 
            <div class="divider lg:divider-horizontal"></div> 
            <div class="grid flex-grow card bg-base-300 rounded-box place-items-center">
                <div class="overflow-x-auto">
                    <table class="table w-auto border-2 flex md-inline-flex">
                        <!-- head -->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Materi</th>
                            <th>Skor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row 1 -->
                        <tr>
                            <th>1</th>
                            <td>Pengenalan Web HTML</td>
                            <td>80</td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <th>2</th>
                            <td>Jenis-Jenis Text Editor</td>
                            <td>100</td>
                        </tr>
                        <!-- row 3 -->
                        <tr>
                            <th>3</th>
                            <td>Struktur dan Syntax HTML</td>
                            <td>80</td>
                        </tr>
                        <!-- row 4 -->
                        <tr>
                            <th>4</th>
                            <td>Membuat List pada HTML</td>
                            <td>100</td>
                        </tr>
                        <!-- row 5 -->
                        <tr>
                            <th>5</th>
                            <td>Membuat Tabel pada HTML</td>
                            <td>80</td>
                        </tr>
                        <!-- row 6 -->
                        <tr>
                            <th>6</th>
                            <td>Menambahkan Media pada HTML</td>
                            <td>60</td>
                        </tr>
                        <!-- row 7 -->
                        <tr>
                            <th>7</th>
                            <td>Membuat Link pada HTML</td>
                            <td>80</td>
                        </tr>
                        <!-- row 8 -->
                        <tr>
                            <th>8</th>
                            <td>Menggunakan CSS pada HTML</td>
                            <td>80</td>
                        </tr>
                        <!-- row 9 -->
                        <tr>
                            <th>9</th>
                            <td>Mengenal Bootstrap</td>
                            <td>60</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-app-layout>