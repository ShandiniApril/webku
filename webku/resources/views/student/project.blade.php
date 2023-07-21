<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-6 p-4 max-w-screen-xl sm:px-6 lg:px-4">
        @if(session()->has('success'))
          <div class="alert alert-success sm:mx-auto sm:w-full sm:max-w-sm mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span class="text-start">{{ session('success') }}</span>
          </div>
        @endif
        <div>
            <p class="font-bold text-center text-2xl pb-8">Proyek WebKu</p>
          </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-2">
            <p class="font-bold p-4">Petunjuk Pengerjaan Proyek</p> 
            <table class="mx-2">
                <tr>
                    <td class="align-text-top pr-2">1.</td>
                    <td>Membaca panduan tahapan pengerjaan proyek menggunakan metode design thinking di bawah ini.</td>
                </tr>
                <tr class="text-start">
                    <td class="align-text-top">2.</td>
                    <td>Memastikan nama kalian terdapat pada list salah satu kelompok, jika belum atau tertulis dua kali maka beritahukan kepada guru.</td>
                </tr>
                <tr class="text-start">
                    <td class="align-text-top">3.</td>
                    <td>Melakukan diskusi kelompok pada tempat yang telah disediakan, jika terdapat kesulitan jangan sungkan bertanya kepada guru.</td>
                </tr>
                <tr>
                    <td class="align-text-top">4.</td>
                    <td>Mengerjakan proyek sesuai pembagian tugas yang telah disepakati dengan deadline yang ditentukan.</td>
                </tr>
                <tr>
                    <td class="align-text-top">5.</td>
                    <td>Mengisi reaksi dan tanggapan individu tentang pengerjaan proyek dan kamu akan mendapatkan poin.</td>
                </tr>
                <tr>
                    <td class="align-text-top">6.</td>
                    <td>Mengumpulkan laporan proyek pada tempat yang telah disediakan. Diisi oleh satu orang perwakilan kelompok!</td>
                </tr>
            </table>
            <p class="font-bold py-4">Selamat Mengerjakan!</p>
        </div>
        <div class="divider"></div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center p-4">
            <p class="font-bold py-4">Tahapan Design Thinking</p> 
            <ul class="steps steps-vertical lg:steps-horizontal">
              <li class="step step-primary font-bold">Empathize</li>
              <li class="step step-primary font-bold">Define</li>
              <li class="step step-primary font-bold">Ideate</li>
              <li class="step step-primary font-bold">Prototype</li>
              <li class="step step-primary font-bold">Test</li>
            </ul>
            <table class="mx-2 my-6">
              <tr>
                  <td class="align-text-top">1. Empathize (Empati)</td>
                  <td class="align-top px-4">:</td>
                  <td>
                    <ul>
                      <li>- Menentukan topik;</li>
                      <li>- Riset/wawancara pengguna;</li>
                      <li>- Mencari tahu kebutuhan, masalah, dan harapan pengguna terhadap website yang akan dibuat.</li>
                    </ul>
                  </td>
              </tr>
              <tr class="text-start">
                  <td class="align-text-top">2. Define (Definisi)</td>
                  <td class="align-top px-4">:</td>
                  <td>
                    <ul>
                      <li>- Analisis data untuk menentukan masalah utama dan menemukan peluang;</li>
                      <li>- Menetapkan tujuan website.</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td class="align-text-top">3. Ideate (Ideasi)</td>
                  <td class="align-top px-4">:</td>
                  <td>
                    <ul>
                      <li>- Brainstorming bersama tim untuk mencari ide sebanyak-banyaknya;</li>
                      <li>- Menentukan fitur/desain yang akan digunakan;</li>
                      <li>- Membuat pembagian tugas kelompok.</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td class="align-text-top">4. Prototype (Prototipe)</td>
                  <td class="align-top px-4">:</td>
                  <td>
                    <ul>
                      <li>- Mengerjakan website sesuai pembagian kerja.</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                <td class="align-text-top">5. Test (Uji Coba)</td>
                <td class="align-top px-4">:</td>
                <td>
                  <ul>
                    <li>- Uji semua fitur website;</li>
                    <li>- Respon pengguna;</li>
                    <li>- Identifikasi kelemahan atau kekurangan website dari sisi kode maupun tampilan.</li>
                  </ul>
                </td>
            </tr>
          </table>
        </div>

        <div class="divider"></div>
        <p class="font-bold p-4 text-center">Link Pengerjaan Kelompok</p>

        @foreach ($groups as $group)
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary font-bold">
              {{ $group->name }}
            </div>
            <div class="collapse-content bg-primary peer-checked:bg-base-300"> 
              <div class="my-4">
                <p class="my-4">Anggota: {{ $group->members }}</p>
                <a href="{{ $group->assignment }}"><button class="btn btn-primary">Diskusi</button></a>
                <a href="/projectReaction">
                  <button class="btn btn-outline btn-primary" {{ $react == null ? '' : 'disabled' }}>Reaksi</button>
                </a>
                <a href="/submitProject"><button class="btn btn-primary">Submit</button></a>
              </div>
            </div>
        </div>
        @endforeach
        
    </div>
</x-app-layout>