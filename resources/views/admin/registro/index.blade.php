@extends('adminlte::page')
@extends('layouts.model')

@section('title', 'Empleados')
@section('content_header')
<div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none"> 
  <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
      Registrando un Nuevo Usuario
  </div>
  <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-700">
      Accesos al Sistema 🚦👀🔐
  </div>
  </div>

@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
            action="{{ route('register') }}">
        @csrf

        <div class="flex flex-wrap">
        <div class="w-full lg:w-5/12 px-3">
        <div class="relative w-full mb-3">
        <label for="name" class="block uppercase text-blue-700 text-xs font-bold mb-2">
            {{ __('Name') }}:
        </label>
        <input id="name" type="text" class="form border-0 px-3 py-3 placeholder-black-700 text-black-700 
        bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150
        @error('name')  border-red-500 @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
        </div></div>

       
        <div class="w-full lg:w-7/12 px-3">
        <div class="relative w-full mb-3">
        <label for="email" class="block uppercase text-blue-700 text-xs font-bold mb-2">
            {{ __('E-Mail Address') }}:
        </label>
        <input id="email" type="email"
                class="form border-0 px-3 py-3 placeholder-black-700 text-black-700 
        bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 
        @error('email') border-red-500 @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
        </div></div>

      
        <div class="w-full lg:w-6/12 px-3">
        <div class="relative w-full mb-3">
            <label for="password" class="block uppercase text-blue-700 text-xs font-bold mb-2">
                {{ __('Password') }}:
                </label>

            <input id="password" type="password"
                class="form border-0 px-3 py-3 placeholder-black-700 text-black-700 
        bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 
        @error('password') border-red-500 @enderror" name="password"
                required autocomplete="new-password">

        @error('password')
        <p class="text-red-500 text-xs italic mt-4">
            {{ $message }}
        </p>
        @enderror
        </div></div>

    
        <div class="w-full lg:w-6/12 px-3">
        <div class="relative w-full mb-3">
        <label for="password-confirm" class="block uppercase text-blue-700 text-xs font-bold mb-2">
            {{ __('Confirm Password') }}:
        </label>
        <input id="password-confirm" type="password" class="form border-0 px-3 py-3 placeholder-black-700 text-black-700 
        bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                name="password_confirmation" required autocomplete="new-password">
        </div></div>

        
        <div class="w-full lg:w-12/12 px-3">
        <div class="relative w-full mb-3">
            <button type="submit"
            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
            {{ __('Register') }}
            </button>

        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8"></p>
        </div></div>
        </form>


        </div>
    </div>

@endsection
