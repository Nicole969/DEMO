@extends('layouts.epp')

@section('content')
    <!--Empieza-->
    <div class="flex items-center justify-center w-full h-screen bg-gray-100 max-w-screen">
    <div class="w-full max-w-3xl overflow-hidden rounded-lg shadow-lg sm:flex">
    <div class="w-full text-white bg-gray-400 bg-center bg-cover sm:w-10/5"
                style="background-image: url({{asset('assets/img/5.jpg')}})">
    </div>
    <div class="w-full bg-yellow-50 sm:w-10/5">
    <div class="p-8">
    <h1 class="text-3xl font-black">Inicio de sesion</h1>
    <p class="mt-2 mb-5 text-base leading-tight text-gray-600">Es un gran dia para seguir creciendo 😃</p>
                
    <!--formulario-->
                <form  method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                    <label for="email" class="text-xs text-gray-500">
                        {{ __('E-Mail') }}:
                    </label>

                    <input id="email" type="email"
                    class="block w-full pb-1 m-auto mb-6 text-gray-700 bg-transparent border-b border-gray-500"    
                    class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                    </div>

                    <div class="flex flex-wrap">
                    <label for="password" class="text-xs text-gray-500">
                        {{ __('Contraseña') }}:
                    </label>

                    <input id="password" type="password"
                    class="block w-full pb-1 m-auto mb-6 bg-transparent border-b border-gray-500 text-grey-700"
                    class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                    required>

                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                    </div>

                        <!--recordar-->
                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm w-full text-center text-gray-700 my-6 sm:text-sm sm:my-8" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Recordar') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto
                        w-full text-center  my-6 sm:text-sm sm:my-8"
                            href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                        @endif
                    </div>


                    <!--boton-->

                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full pt-3 pb-3 text-white bg-blue-700 rounded-lg shadow-lg cursor-pointer hover:bg-blue-300 ">
                            {{ __('Acceder') }}
                        </button>

                        <!--pie de login-->

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center my-6 sm:text-sm sm:my-8">
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ url('/') }}">
                               {{ __("Multiservicios Garay") }}
                            </a>
                        
                            <!--<a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>-->
                        </p>
                        @endif
                    </div>
                </form>
                            
    </div>
    </div>
    </div>
    </div>

@endsection

