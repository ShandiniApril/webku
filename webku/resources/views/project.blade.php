<x-app-layout>
    <div class="flex flex-col border-opacity-50 mx-auto my-12 p-4 max-w-screen-xl sm:px-6 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Project WebKu</p>
          </div>
        <div class="grid flex-grow card bg-base-300 rounded-box place-items-center sm:py-6 lg:py-2">
            <p class="font-bold p-4">Petunjuk Pengerjaan Project</p> 
            <table class="mx-2">
                <tr>
                    <td class="align-text-top">1.</td>
                    <td>Melihat pembagian kelompok yang telah ditetapkan, file bisa diunduh <a href="" class="hover">di sini.</a></td>
                </tr>
                <tr class="text-start">
                    <td class="align-text-top">2.</td>
                    <td>Melakukan diskusi kelompok pada tempat yang telah disediakan.</td>
                </tr>
                <tr>
                    <td class="align-text-top">3.</td>
                    <td>Mengerjakan tugas project sesuai pembagian kelompok.</td>
                </tr>
                <tr>
                    <td class="align-text-top">4.</td>
                    <td>Mengumpulkan file project pada tempat yang telah disediakan.</td>
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

        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
              Kelompok 1
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
                <a href="https://padlet.com/shandiniapriliany12/kelompok-1-8d4s3bxoov7t27oy"><button class="btn btn-outline">Start Discussion</button></a>
                <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
                Kelompok 2
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
              <a href="https://padlet.com/shandiniapriliany12/kelompok-1-8d4s3bxoov7t27oy"><button class="btn btn-outline">Start Discussion</button></a>
                <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
              Kelompok 3
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
              <a href="/submitProject"><button class="btn btn-outline">Start Discussion</button></a>
                <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
              Kelompok 4
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
              <a href="/submitProject"><button class="btn btn-outline">Start Discussion</button></a>
                <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
              Kelompok 5
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
              <a href="/submitProject"><button class="btn btn-outline">Start Discussion</button></a>
                <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        <div class="collapse bg-base-200 mt-4">
            <input type="checkbox" class="peer" /> 
            <div class="collapse-title bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content">
              Kelompok 6
            </div>
            <div class="collapse-content bg-primary text-primary-content [input:checked~&]:bg-secondary [input:checked~&]:text-secondary-content"> 
              <a href="/submitProject"><button class="btn btn-outline">Start Discussion</button></a>
              <a href="/submitProject"><button class="btn btn-neutral">Submit Project</button></a>
            </div>
        </div>
        
    </div>
</x-app-layout>