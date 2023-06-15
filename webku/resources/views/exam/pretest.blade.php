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
      <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Ujian Awal WebKu</h2>
    </div>
  
    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-4xl">
      <form class="space-y-6" action="#" method="POST">
        @csrf
        <div>
          <label for="no1" class="block text-sm font-medium leading-6 text-gray-900">1. Apa yang dimaksud dengan bla?</label>
          <div class="ml-4">
            <input type="radio" name="radio-2" class="radio radio-primary" /> apa <br>
            <input type="radio" name="radio-2" class="radio radio-primary" /> agtau <br>
            <input type="radio" name="radio-2" class="radio radio-primary" /> sapks <br>
            <input type="radio" name="radio-2" class="radio radio-primary" /> sadj <br>
            <input type="radio" name="radio-2" class="radio radio-primary" /> shdja <br>
          </div>
        </div>

        <div>
            <label for="no2" class="block text-sm font-medium leading-6 text-gray-900">2. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="radio-2" class="radio radio-primary" /> apa <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> agtau <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sapks <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sadj <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> shdja <br>
            </div>
        </div>

        <div>
            <label for="no3" class="block text-sm font-medium leading-6 text-gray-900">3. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="radio-2" class="radio radio-primary" /> apa <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> agtau <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sapks <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sadj <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> shdja <br>
            </div>
        </div>

        <div>
            <label for="no4" class="block text-sm font-medium leading-6 text-gray-900">4. Apa yang dimaksud dengan bla?</label>
            <div class="ml-4">
              <input type="radio" name="radio-2" class="radio radio-primary" /> apa <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> agtau <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sapks <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> sadj <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> shdja <br>
            </div>
        </div>

        <div>
            <label for="no5" class="block text-sm font-medium leading-6 text-gray-900">5. Apa yang dimaksud dengan bla?</label>
            <div class="ml-6">
              <input type="radio" name="radio-2" class="radio radio-primary" /> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> <img src="/image/maudy.jpg" width="300"/> <br>
              <input type="radio" name="radio-2" class="radio radio-primary" /> <img src="/image/maudy.jpg" width="300"/> <br>
            </div>
        </div>
  
        <div>
          <button type="submit" class="btn btn-primary flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white">Submit</button>
        </div>
  
      </form>
    </div>
  </div>
  
</x-app-layout>