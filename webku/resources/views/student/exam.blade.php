<x-app-layout>
    <div class="flex flex-col border-opacity-50 max-w-screen-xl mx-auto my-6 p-4 sm:px-6 lg:px-4">
        <div>
            <p class="font-bold text-center text-2xl pb-8">Ujian WebKu</p>
        </div>
        <div class="mt-2 flex flex-col lg:flex-row sm:mx-auto sm:w-full sm:max-w-4xl">
            <div class="grid flex-grow place-items-center">
                <div class="card w-96 bg-primary text-primary-content">
                    <div class="card-body">
                    <h2 class="card-title">Ujian Awal!</h2>
                    <p>Ujian ini hanya bisa dilaksanakan 1x. Apakah kamu siap?</p>
                    <div class="card-actions justify-end">
                        {{-- <a href="/test/pretest"><button class="btn">Ya</button></a> --}}
                        <a href="{{ $pretest == null ? '/test/pretest' : ''}}">
                            <button class="btn" {{ $pretest == null ? '' : 'disabled' }}>Ya</button>
                        </a>
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
                        {{-- <a href="/test/postest"><button class="btn btn-primary">Ya</button></a> --}}
                        <a href="{{ $postest == null ? '/test/postest' : ''}}">
                            <button class="btn btn-primary" {{ $postest == null ? '' : 'disabled' }}>Ya</button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>