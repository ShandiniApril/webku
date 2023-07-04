<x-app-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    
      <div class="sm:mx-auto sm:w-full sm:max-w-4xl">
        <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $test[0]->slug }}</h2>
      </div>
    
      <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-4xl">
        <form class="space-y-6" action="#" method="POST">
          @csrf
    
          @foreach ($test as $item)
            <div>
                
              <p class="font-bold text-primary"> Soal {{ $item->no }} </p>
              <img src="{{ asset('storage/question-images/' . $item->image) }}" alt="">
              <label for="{{ $item->no }}" class="block text-lg font-medium leading-6 text-gray-900"> {{ $item->question }} </label>
              @if($item->optionImage == 'yes')
                <div>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="a"/> <img src="{{ asset('storage/question-images/' . $item->optionA) }}" alt=""> <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="b"/> <img src="{{ asset('storage/question-images/' . $item->optionB) }}" alt=""> <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="c"/> <img src="{{ asset('storage/question-images/' . $item->optionC) }}" alt=""> <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="d"/> <img src="{{ asset('storage/question-images/' . $item->optionD) }}" alt=""> <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="e"/> <img src="{{ asset('storage/question-images/' . $item->optionE) }}" alt=""> <br>
                </div>
              @else
                <div>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="a"/> {{ $item->optionA }} <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="b"/> {{ $item->optionB }} <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="c"/> {{ $item->optionC }} <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="d"/> {{ $item->optionD }} <br>
                  <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="e"/> {{ $item->optionE }} <br>
                </div>
              @endif
            </div>
          @endforeach
    
          <div>
            <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
          </div>
    
        </form>
      </div>
    </div>
    
    </x-app-layout>