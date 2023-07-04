<x-app-layout>

<div class="flex min-h-full flex-col justify-center px-6 my-6 lg:px-8">

  <div class="sm:mx-auto sm:w-full sm:max-w-4xl">
    <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"> Quiz Webku <br> {{ $quiz[0]->title }}</h2>
  </div>

  <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-4xl">
    <form class="space-y-6" action="#" method="POST">
      @csrf

      @foreach ($quiz as $item)
        <div>
            
          <p class="font-bold text-primary"> Soal {{ $item->no }} </p>
          <label for="{{ $item->no }}" class="block text-lg font-medium leading-6 text-gray-900"> {{ $item->question }} </label>
          <div>
            <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="a"/> {{ $item->a }} <br>
            <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="b"/> {{ $item->b }} <br>
            <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="c"/> {{ $item->c }} <br>
            <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="d"/> {{ $item->d }} <br>
            <input type="radio" name="{{ $item->no }}" class="radio radio-primary align-middle m-1" value="e"/> {{ $item->e }} <br>
          </div>
        </div>
      @endforeach

      <div>
        <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 mb-8 text-sm font-semibold leading-6 text-white">Submit</button>
      </div>

    </form>
  </div>
</div>

</x-app-layout>