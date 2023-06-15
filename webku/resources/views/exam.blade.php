<x-app-layout>
    <div class="flex flex-col lg:flex-row sm:mx-auto sm:w-full sm:max-w-4xl mt-20">
        <div class="grid flex-grow place-items-center">
            <div class="card w-96 bg-primary text-primary-content">
                <div class="card-body">
                <h2 class="card-title">Ujian Awal!</h2>
                <p>Ujian ini hanya bisa dilaksanakan 1x. Apakah kamu siap?</p>
                <div class="card-actions justify-end">
                    <a href="/pretest"><button class="btn">Ya</button></a>
                </div>
                </div>
            </div>
        </div> 
        <div class="grid flex-grow place-items-center">
            <div class="card w-96 bg-neutral text-neutral-content">
                <div class="card-body">
                <h2 class="card-title">Ujian Akhir!</h2>
                <p>Ujian ini hanya bisa dilaksanakan 1x. Apakah kamu siap?</p>
                <div class="card-actions justify-end">
                    <a href="/postest"><button class="btn btn-primary">Ya</button></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>