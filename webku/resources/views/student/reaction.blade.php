<x-app-layout>
    <div class="flex min-h-full flex-col justify-center px-6 my-6 lg:px-8">
    
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Tanggapan Materi Webku</h2>

        <div class="mx-auto sm:w-full sm:max-w-lg my-8">
            <form class="space-y-6" action="#" method="POST">
                @csrf
                <div>
                    <label for="rating" class="text-sm font-bold leading-6 text-gray-900">Rating kamu untuk materi ini (1-5 bintang)</label>
                    <div class="rating rating-lg gap-6">
                    <input type="radio" name="rating" class="mask mask-star-2 bg-red-400" value="1" required checked/>
                    <input type="radio" name="rating" class="mask mask-star-2 bg-orange-400" value="2" required/>
                    <input type="radio" name="rating" class="mask mask-star-2 bg-yellow-400" value="3" required/>
                    <input type="radio" name="rating" class="mask mask-star-2 bg-lime-400" value="4" required/>
                    <input type="radio" name="rating" class="mask mask-star-2 bg-green-400" value="5" required/>
                    </div>
                </div>
                <div>
                    <label for="expression" class="text-sm font-bold text-gray-900 text-center">Ekspresiku ketika belajar</label>
                    <p style="font-size:50px">&#129321; &#129299; &#128513; &#129300; &#129327; &#128557;</p>
                    <div class="mx-4 space-x-14">
                    <input type="radio" name="expression" class="radio radio-primary" value="Semangat" required/>
                    <input type="radio" name="expression" class="radio radio-primary" value="Fokus" required/>
                    <input type="radio" name="expression" class="radio radio-primary" value="Biasa saja" required/>
                    <input type="radio" name="expression" class="radio radio-primary" value="Bingung" required/>
                    <input type="radio" name="expression" class="radio radio-primary" value="Berpikir keras" required/>
                    <input type="radio" name="expression" class="radio radio-primary" value="Nangis" required/>
                    </div>
                    <p>Semangat - Fokus - Biasa Saja - Bingung - Berpikir Keras - Nangis</p>
                </div>
                <div>
                    <label for="comment" class="text-sm font-bold leading-6 text-gray-900">Tanggapan terhadap materi dan ilmu yang didapat</label>
                    <div class="mt-2">
                    <textarea id="comment" name="comment" type="text" autocomplete="comment" required class="textarea w-full h-32 rounded-md border-0 pt-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 sm:text-sm sm:leading-6 px-2"></textarea>
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md mb-8 text-sm font-semibold leading-6 text-white">Submit</button>
                </div>
        
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </form>
        </div>
    </div>
    
  </x-app-layout>