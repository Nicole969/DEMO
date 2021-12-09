<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Multiservicios Garay')  }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">
    @livewire('componente-uno')

<!-- This example requires Tailwind CSS v2.0+ -->

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="héroe" src="{{asset('assets/img/2.jpg')}}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Multiservicios Garay  </font>
        </font>
        <br class="hidden lg:inline-block">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">es una empresa que brinda servicios </font>
        </font>
      </h1>
      <p class="mb-8 leading-relaxed">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">En la instalación y acabados de ventanas en sistema Nova y Pívot, puertas de aluminio, mamparas, ventanas proyectantes, entre tantas más,  </font>
          <font style="vertical-align: inherit;">aparte de ello también trabajamos en la elaboración de muebles como reposteros, escritorios, closets y muebles empotrados, ofreciendo sobre todo nuestro servicio para la realización de este tipo de trabajos.</font>
        </font>
      </p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-blue-700 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Contactanos</font>
          </font>
        </button>
        <button class="ml-4 inline-flex text-gray-700 bg-blue-100 border-0 py-2 px-6 focus:outline-none hover:bg-blue-200 rounded text-lg">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Ubicanos</font>
          </font>
        </button>
      </div>
    </div>
  </div>
</section>
    
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-blue-700 font-semibold tracking-wide uppercase">Multiservicios Garay</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          Cumple con estos valores
        </p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-700 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">	Empatía: </p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Tenemos la fiel creencia de que poniéndonos en el lugar de otros entenderíamos mucho mejor lo que están buscando.  
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-700 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Compromiso:</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
               No desistir frente a los obstáculos y continuar es la forma más fiel de un buen compromiso. 
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-700 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Calidad: </p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Ciertamente en el mercado de hoy todos aseguran tener el mejor producto, pero nosotros esperamos que nuestro trabajo hable por sí solo.
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-700 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">	Enfoque: </p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Enfocarse en los productos y servicios asegura que se busca establecer calidad y experiencia.
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
  


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Quieres consultar?</span>
      <span class="block text-blue-700">Sin compromiso nosotros te atendemos.</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-300">
          Contactanos
        </a>
      </div>
      <div class="ml-3 inline-flex rounded-md shadow">
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-70">
          Reserva una cita
        </a>
      </div>
    </div>
  </div>
</div>


@livewire('footer')

</div>
</body>
</html>
