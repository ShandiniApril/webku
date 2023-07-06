<x-app-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    
      <div class="sm:mx-auto sm:w-full sm:max-w-4xl">
        <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ $test[0]->slug }}</h2>
      </div>
    
      <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-4xl">
        <form class="space-y-6" action="/test/submitTest" method="POST">
          @csrf
          <input style="visibility: hidden" name="slug" value="{{ $test[0]->slug }}">
          @foreach ($test as $item)
            <div>
              <p class="font-bold text-primary"> Soal {{ $item->no }} </p>
              <img src="{{ asset('storage/question-images/' . $item->image) }}" alt="">
              <label for="no{{ $item->no }}" class="block text-lg font-medium leading-6 text-gray-900"> {{ $item->question }} </label>
              @if($item->optionImage == 'yes')
                <div>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="a"/>a <img class="h-60" src="{{ asset('storage/question-images/' . $item->a) }}" alt=""> <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="b"/>b <img class="h-60" src="{{ asset('storage/question-images/' . $item->b) }}" alt=""> <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="c"/>c <img class="h-60" src="{{ asset('storage/question-images/' . $item->c) }}" alt=""> <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="d"/>d <img class="h-60" src="{{ asset('storage/question-images/' . $item->d) }}" alt=""> <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="e"/>e <img class="h-60" src="{{ asset('storage/question-images/' . $item->e) }}" alt=""> <br>
                </div>
              @else
                <div>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="a"/>a. {{ $item->a }} <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="b"/>b. {{ $item->b }} <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="c"/>c. {{ $item->c }} <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="d"/>d. {{ $item->d }} <br>
                  <input type="radio" name="no{{ $item->no }}" class="radio radio-primary align-middle m-1" required value="e"/>e. {{ $item->e }} <br>
                </div>
              @endif
            </div>
            <input style="visibility: hidden" name="code" value="{{ $item->code }}">
          @endforeach
          <div>
            <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
          </div>
    
        </form>
      </div>
    </div>
    
    </x-app-layout>