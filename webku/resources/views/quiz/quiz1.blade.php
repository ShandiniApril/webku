<x-app-layout>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
  -->
  <!--
  This example requires updating your template:
  
  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
  -->

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

    <div class="sm:mx-auto sm:w-full sm:max-w-4xl">
      <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Quiz 1 WebKu <br> Materi: Pengenalan Dasar CSS</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-4xl">
      <form class="space-y-6" action="#" method="POST">
        @csrf
        <div>
          <label for="no1" class="block text-sm font-medium leading-6 text-gray-900">1. Apa yang dimaksud dengan bla?</label>
          <div class="ml-4">
            <input type="radio" name="no1" class="radio radio-primary" value="a"/> apa <br>
            <input type="radio" name="no1" class="radio radio-primary" value="b"/> agtau <br>
            <input type="radio" name="no1" class="radio radio-primary" value="c"/> sapks <br>
            <input type="radio" name="no1" class="radio radio-primary" value="d"/> sadj <br>
            <input type="radio" name="no1" class="radio radio-primary" value="e"/> shdja <br>
          </div>

          @error('no1')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div>
            <label for="no2" class="block text-sm font-medium leading-6 text-gray-900">2. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="no2" class="radio radio-primary" value="a"/> apa <br>
              <input type="radio" name="no2" class="radio radio-primary" value="b"/> agtau <br>
              <input type="radio" name="no2" class="radio radio-primary" value="c"/> sapks <br>
              <input type="radio" name="no2" class="radio radio-primary" value="d"/> sadj <br>
              <input type="radio" name="no2" class="radio radio-primary" value="e"/> shdja <br>
            </div>
        </div>

        <div>
            <label for="no3" class="block text-sm font-medium leading-6 text-gray-900">3. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="no3" class="radio radio-primary" value="a"/> apa <br>
              <input type="radio" name="no3" class="radio radio-primary" value="b"/> agtau <br>
              <input type="radio" name="no3" class="radio radio-primary" value="c"/> sapks <br>
              <input type="radio" name="no3" class="radio radio-primary" value="d"/> sadj <br>
              <input type="radio" name="no3" class="radio radio-primary" value="e"/> shdja <br>
            </div>
        </div>

        <div>
            <label for="no4" class="block text-sm font-medium leading-6 text-gray-900">4. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="no4" class="radio radio-primary" value="a"/> apa <br>
              <input type="radio" name="no4" class="radio radio-primary" value="b"/> agtau <br>
              <input type="radio" name="no4" class="radio radio-primary" value="c"/> sapks <br>
              <input type="radio" name="no4" class="radio radio-primary" value="d"/> sadj <br>
              <input type="radio" name="no4" class="radio radio-primary" value="e"/> shdja <br>
            </div>
        </div>

        <div>
            <label for="no5" class="block text-sm font-medium leading-6 text-gray-900">5. Apa yang dimaksud dengan bla?</label>
            <div class="ml-6">
              <input type="radio" name="no5" class="radio radio-primary" value="a"/> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="no5" class="radio radio-primary" value="b"/> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="no5" class="radio radio-primary" value="c"/> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="no5" class="radio radio-primary" value="d"/> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="no5" class="radio radio-primary" value="e"/> <img src="/image/maudy.jpg" width="300"/> <br>
            </div>
        </div>
  
        <div>
          <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
        </div>
  
      </form>
    </div>
  </div>
  
  </x-app-layout>