<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <style>
            .card{
                background: linear-gradient(to right, #284b81 50%, white 50%);
                background-size: 200% 100%;
                background-position: right top;
                transition: all .5s ease-out;
            }

            .card:hover {
                background-position: left top;
            }

        </style>

        @yield('css')
    </head>
    <body class="font-sans antialiased" style="font-family: 'Ubuntu', sans-serif;">
        <div class="min-h-screen bg-gray-50" id="home">
            {{-- top info start --}}
                <div class="w-full bg-[#284b81]">
                    <div class="w-10/12 mx-auto">
                        <div class="flex justify-center md:justify-between items-center">
                            <div class="flex text-sky-100 text-sm items-center my-3">
                                <i class="fas fa-envelope px-2"></i>
                                <a href="mailto:" >example@gmail.com</a>
                                <i class="fas fa-mobile px-2"></i>
                                <a href="tel:+">+977-9815209300</a>
                            </div>
                            <div class="hidden md:flex items-center text-sky-100">
                                <a class="hover:text-white" href="#">
                                    <i class="fab fa-facebook px-2"></i>
                                </a>
                                <a class="hover:text-white" href="#">
                                    <i class="fab fa-instagram px-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- top info close --}}
            <x-navigation></x-navigation>

            @yield('content')

            {{-- Footer Start --}}
                <div class="w-full bg-gray-200 shadow-md">
                    <div class="w-10/12 mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-3 py-8">
                            <div class="text-gray-600">
                                <h1 class="text-xl text-[#284b81] my-5">SmartBiz</h1>
                                <p>
                                    A108 Adam Street 
                                </p>
                                <p>
                                    New York, NY 535022
                                    United States 
                                </p>
                                <p class="mt-5">
                                    <b>Phone:</b> +977-9815209300
                                </p>
                                <p class="mt-1">
                                    <b>Email:</b> info@example.com
                                </p>
                            </div>

                            <div class="text-gray-600">
                                <h1 class="text-xl text-[#284b81] my-5">Our Social Networks</h1>
                                <p>
                                    Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies
                                </p>
                                <div class="flex my-3">
                                    <div>
                                        <a href="#">
                                            <i class="fab fa-facebook p-2 rounded-md text-md mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-instagram p-2 rounded-md text-md mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-gray-600">
                                <h1 class="text-xl text-[#284b81] my-5">Follow us on Facebook</h1>
                                <p>
                                    Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies
                                </p>
                                <div class="flex my-3">
                                    <div>
                                        <a href="#">
                                            <i class="fab fa-facebook p-2 rounded-md text-md mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-instagram p-2 rounded-md text-md mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- Footer End --}}

            
        </div>
        @yield('js')

    </body>
</html>
