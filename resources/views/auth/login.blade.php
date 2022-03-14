<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartBiz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Alpine JS -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



        @yield('css')
    </head>
    <body class="antialiased">
        @include('layouts.message')
        
        <div class="w-full h-full bg-slate-200">
            <div class="md:grid grid-cols-2">
                <div class="hidden md:block">
                    <img src="{{asset('images/login.jpg')}}" class="h-screen rounded-md shadow-lg">

                </div>
                <div>
                    
                    <div class="flex justify-center">
                        <div class="mt-[25%]">
                            <h3 class="text-3xl text-gray-800 font-semibold text-center">
                                Login
                            </h3>
                            <p class="text-gray-500 text-center my-2">
                                SmartBiz Advisiory
                            </p>

                            <form class="my-4 w-96" action="{{route('login')}}" method="post">
                                @csrf 
                                <div class="my-4 py-2">
                                    <input type="text" name="email" class="rounded-lg h-12 shadow-lg border border-transparent focus:ring-[#284b81] w-full  focus:border-[#284b81]" placeholder="Enter Email Address">
                                </div>

                                <div class="py-2">
                                    <input type="password" name="password" class="rounded-lg h-12 shadow-lg border border-transparent focus:ring-[#284b81] w-full  focus:border-[#284b81]" placeholder="Enter Password">
                                </div>

                                <div class="flex justify-center py-4">
                                    <input type="submit" value="Login" class="px-20 py-2 bg-[#03ad0b] text-white rounded-lg shadow-md hover:bg-[#028008] cursor-pointer ">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
