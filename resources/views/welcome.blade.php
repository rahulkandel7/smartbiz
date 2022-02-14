@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        .about{
            background-image: url('images/about.jpg');
            background-size: cover;
        }
        .testo{
            background-image: url('images/t.jpeg');
            background-size: cover;
        }

        .images img{
            transition: all .2s ease-in-out;
        }

        .images:hover img{
            transform: scale(1.02);
        }
    </style>
@endsection

@section('content')
    <div class="bg-[url('/images/b.jpg')] w-full h-[85vh] bg-fixed bg-no-repeat bg-cover">
        <div class="w-10/12 mx-auto pt-[35%] md:pt-[18%]">
            <p class="font-bold text-5xl text-white">
                Welcome To <span class="text-[#7198d3]">SmartBiz</span>
            </p>
            <p class="font-light text-md my-4  text-gray-200">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ducimus odio tempore alias culpa magnam expedita as
            </p>
            <div class="mt-10">
                <a class="px-4 py-2 bg-[#284b81] hover:bg-[#1c3964] text-white rounded-md text-xl" href="">
                    Get Started
                </a>
            </div>
        </div>
    </div>

    {{-- First services start --}}
        <div class="w-10/12 mx-auto py-20 ">
            <div class="grid md:grid-cols-4 gap-x-4 gap-y-4 wow fadeInUp" data-wow-duration="2s" >
                <x-card>
                    <x-slot name="icon"> 
                        <i class="fa fa-tennis-ball"></i>
                    </x-slot>
                    <x-slot name="title">Title Will be here</x-slot>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere pariatur dolorum perspiciatis dolore illum architecto vitae mollitia veniam repellendus, iste a voluptates magni, voluptatibus ea deleniti. Maiores vitae sapiente unde.
                </x-card>
                <x-card>
                    <x-slot name="icon"> 
                        <i class="fa fa-tennis-ball"></i>
                    </x-slot>
                    <x-slot name="title">Title Will be here</x-slot>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere pariatur dolorum perspiciatis dolore illum architecto vitae mollitia veniam repellendus, iste a voluptates magni, voluptatibus ea deleniti. Maiores vitae sapiente unde.
                </x-card>
                <x-card>
                    <x-slot name="icon"> 
                        <i class="fa fa-tennis-ball"></i>
                    </x-slot>
                    <x-slot name="title">Title Will be here</x-slot>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere pariatur dolorum perspiciatis dolore illum architecto vitae mollitia veniam repellendus, iste a voluptates magni, voluptatibus ea deleniti. Maiores vitae sapiente unde.
                </x-card>
                <x-card>
                    <x-slot name="icon"> 
                        <i class="fa fa-tennis-ball"></i>
                    </x-slot>
                    <x-slot name="title">Title Will be here</x-slot>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere pariatur dolorum perspiciatis dolore illum architecto vitae mollitia veniam repellendus, iste a voluptates magni, voluptatibus ea deleniti. Maiores vitae sapiente unde.
                </x-card>
            </div>
        </div>
    {{-- First Services end --}}

    {{-- About US Start --}}
        <div class="bg-[#6697e038] w-full" id="about">
            <div class="w-10/12 mx-auto pb-8">
                <div class="flex justify-center pt-20 wow fadeInDown"  data-wow-duration="2s">
                    <div>
                        <center>
                            <a class="text-[#284b81] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                                About
                            </a>
                        </center>
                        <h1 class="text-4xl font-bold text-gray-800 py-4">Find Out More <span class="text-[#284b81]">About Us</span> </h1>
                        <p class="max-w-md text-center text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 my-5 gap-x-8">
                    <div class="about w-full h-96 mb-4 md:mb-0 md:h-auto shadow-lg rounded-md wow slideInLeft"  data-wow-duration="2s"></div>
                    <div class="wow fadeInUp"  data-wow-duration="2s">
                        <h1 class="text-2xl font-bold text-gray-700">
                            Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.
                        </h1>
                        <p class="text-lg text-gray-600 italic py-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio dignissimos quis cumque aliquid saepe delectus, facere hic commodi.
                        </p>

                        <div class="flex items-center my-3">
                            <div class="h-14 w-14 rounded-full shadow shadow-sky-50 bg-white flex justify-center">
                                <i class="fa fa-users mt-[30%] px-8 text-xl text-[#284b81]"></i>
                            </div>
                            <div class="px-5">
                                <h2 class="text-lg  text-gray-700 font-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, esse! 
                                </h2>
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam non deleniti iusto modi quia laborum dicta quaerat, illo voluptatem, incidunt nobis omnis corrupti sequi, rerum nemo magni sed quos repellat.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center my-3">
                            <div class="h-14 w-14 rounded-full shadow shadow-sky-50 bg-white flex justify-center">
                                <i class="fa fa-users mt-[30%] px-8 text-xl text-[#284b81]"></i>
                            </div>
                            <div class="px-5">
                                <h2 class="text-lg  text-gray-700 font-bold">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, esse! 
                                </h2>
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam non deleniti iusto modi quia laborum dicta quaerat, illo voluptatem, incidunt nobis omnis corrupti sequi, rerum nemo magni sed quos repellat.
                                </p>
                            </div>
                        </div>
                        <p class="pl-5 text-justify pb-8">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, neque reiciendis eligendi repellat ut quibusdam, vitae, vero repudiandae voluptatum necessitatibus doloremque cumque ducimus quidem ipsam voluptatem explicabo perspiciatis fuga inventore?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    {{-- About Us End --}}

    {{-- Services Start --}}
        <div class=" w-full" id="services">
            <div class="w-10/12 mx-auto pb-8">
                <div class="flex justify-center pt-20 wow fadeInUp"  data-wow-duration="2s">
                    <div>
                        <center>
                            <a class="text-[#284b81] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                                Services
                            </a>
                        </center>
                        <h1 class="text-4xl font-bold text-gray-800 py-4 text-center">Check our <span class="text-[#284b81]">Services</span> </h1>
                        <p class="max-w-md text-center text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 my-5 gap-x-8 gap-y-4"  >
                    {{-- First --}}
                        <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow-md group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                            <div class="flex justify-center mt-[18%]">
                                <div>
                                    <div class="flex justify-center">
                                        <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                    </div>
                                    <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                    <p class="text-gray-600 px-5 text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                    </p>
                                </div>
                            </div>
                        </div>
                    {{-- first close --}}

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-[18%]">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-[18%]">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-[18%]">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-[18%]">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-[18%]">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fa fa-users border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Lorem Ipsum</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae et sapiente distinctio placeat quaerat repellendus voluptatem inventore dolorum. In laudantium quod nihil, quam autem nobis. Voluptate similique itaque quis!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    {{-- Services Close --}}

    {{-- Testonomial Start --}}
        <div class="w-full testo py-20">
            <!-- Slider main container -->
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="px-20 md:px-32">
                                <div class="flex justify-center">
                                    <img src="{{asset('images/b.jpeg')}}" class="rounded-full w-28 h-28 border-4 border-gray-200">
            
                                </div>
                                <h4 class="text-xl mt-6 font-bold text-center text-white">
                                    Lorem Ipsum
                                </h4>
                                <p class="text-gray-200 text-center">
                                    Post
                                </p>
                                <p class="text-center text-gray-400 italic">
                                    &quot; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, pariatur maxime. Blanditiis facere expedita, vitae officia consectetur, aspernatur eum error placeat corrupti facilis odit perspiciatis atque commodi architecto eveniet et. &quot;
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="px-20 md:px-32">
                                <div class="flex justify-center">
                                    <img src="{{asset('images/b.jpeg')}}" class="rounded-full w-28 h-28 border-4 border-gray-200">
            
                                </div>
                                <h4 class="text-xl mt-6 font-bold text-center text-white">
                                    Lorem Ipsum 12e
                                </h4>
                                <p class="text-gray-200 text-center">
                                    Post
                                </p>
                                <p class="text-center text-gray-400 italic">
                                    &quot; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, pariatur maxime. Blanditiis facere expedita, vitae officia consectetur, aspernatur eum error placeat corrupti facilis odit perspiciatis atque commodi architecto eveniet et. &quot;
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center">
                            <div class="px-20 md:px-32">
                                <div class="flex justify-center">
                                    <img src="{{asset('images/b.jpeg')}}" class="rounded-full w-28 h-28 border-4 border-gray-200">
            
                                </div>
                                <h4 class="text-xl mt-6 font-bold text-center text-white">
                                    Lorem Ipsum asdaf
                                </h4>
                                <p class="text-gray-200 text-center">
                                    Post
                                </p>
                                <p class="text-center text-gray-400 italic">
                                    &quot; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, pariatur maxime. Blanditiis facere expedita, vitae officia consectetur, aspernatur eum error placeat corrupti facilis odit perspiciatis atque commodi architecto eveniet et. &quot;
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            
        </div>
    {{-- Testonomial End --}}

    {{-- Teams Start --}}
        <div class="bg-[#6697e038] w-full" id="teams">
            <div class="w-10/12 mx-auto pb-8">
                <div class="flex justify-center pt-20 wow fadeInUp" data-wow-duration="2s">
                    <div>
                        <center>
                            <a class="text-[#284b81] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                                Team
                            </a>
                        </center>
                        <h1 class="text-4xl font-bold text-gray-800 py-4">Our Hardworking<span class="text-[#284b81]"> Teams</span> </h1>
                        <p class="max-w-md text-center text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 my-5 gap-x-8 gap-y-5">
                    <div class="w-full border images border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group overflow-hidden">

                        <div class="group">
                            <div class="relative">
                                <img src="{{asset('images/p.webp')}}" class="w-full">
                                <div class="absolute bottom-[1px] w-full hidden group-hover:block">
                                    <div class="flex  justify-center w-full wow fadeInUp">
                                        <div>
                                            <a href="#">
                                                <i class="fab fa-facebook p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-xl font-bold mt-3 group-hover:text-[#284b81] px-5">Lorem Ipsum</h2>
                            <p class="text-gray-600 px-5 ">
                                CEO
                            </p>
                        </div>


                    </div>

                    <div class="w-full border images border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group overflow-hidden">

                        <div class="group">
                            <div class="relative">
                                <img src="{{asset('images/p.webp')}}" class="w-full">
                                <div class="absolute bottom-[1px] w-full hidden group-hover:block">
                                    <div class="flex  justify-center w-full wow fadeInUp">
                                        <div>
                                            <a href="#">
                                                <i class="fab fa-facebook p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-xl font-bold mt-3 group-hover:text-[#284b81] px-5">Lorem Ipsum</h2>
                            <p class="text-gray-600 px-5 ">
                                CEO
                            </p>
                        </div>


                    </div>

                    <div class="w-full border images border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group overflow-hidden">

                        <div class="group">
                            <div class="relative">
                                <img src="{{asset('images/p.webp')}}" class="w-full">
                                <div class="absolute bottom-[1px] w-full hidden group-hover:block">
                                    <div class="flex  justify-center w-full wow fadeInUp">
                                        <div>
                                            <a href="#">
                                                <i class="fab fa-facebook p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram p-3 rounded-md text-xl mx-1 bg-[#284c81] hover:bg-[#284c81d7] text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-xl font-bold mt-3 group-hover:text-[#284b81] px-5">Lorem Ipsum</h2>
                            <p class="text-gray-600 px-5 ">
                                CEO
                            </p>
                        </div>


                    </div>

                    
                </div>
            </div>
        </div>
    {{-- Teams End --}}

    {{-- Contact Start --}}
        <div class=" w-full" id="contact">
            <div class="w-10/12 mx-auto pb-8">
                <div class="flex justify-center pt-20 wow fadeInUp"  data-wow-duration="2s">
                    <div>
                        <center>
                            <a class="text-[#284b81] px-6 py-1 bg-sky-100 rounded-full text-xl font-bold">
                                Contact
                            </a>
                        </center>
                        <h1 class="text-4xl font-bold py-4 text-center text-[#284b81]">Contact Us </h1>
                        <p class="max-w-md text-center text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi vero aut, repellat mollitia maiores, iste maxime eum t
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 my-5 gap-x-8 gap-y-4"  >
                    {{-- First --}}
                        <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow-md group wow bounceIn shadow-sky-50 hover:shadow-sky-100 col-span-2" data-wow-duration="2s">
                            <div class="flex justify-center mt-5">
                                <div>
                                    <div class="flex justify-center">
                                        <i class="fas fa-map-marker-alt shadow-lg group-hover:border-sky-400 p-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                    </div>
                                    <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Our Address</h2>
                                    <p class="text-center">
                                        A108 Adam Street, New York, NY 535022
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    {{-- first close --}}

                    

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-5">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fas fa-envelope border group-hover:border-sky-400 p-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Email Us</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    info@example.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border border-sky-100 h-auto pb-5 bg-white rounded-md hover:shadow-lg shadow group wow bounceIn shadow-sky-50 hover:shadow-sky-100" data-wow-duration="2s">
                        <div class="flex justify-center mt-5">
                            <div>
                                <div class="flex justify-center">
                                    <i class="fas fa-phone-alt border group-hover:border-sky-400 px-4 py-5 rounded bg-sky-100 border-sky-200 text-[#284b81] text-2xl "></i>
                                </div>
                                <h2 class="text-2xl font-bold my-3 group-hover:text-[#284b81] text-center">Call Us</h2>
                                <p class="text-gray-600 px-5 text-justify">
                                    +977-9815209300
                                </p>
                            </div>
                        </div>
                    </div>

                    

                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                    <div class="shadow-md rounded-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8756829936005!2d84.41784611495!3d27.690236932850702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb35beab27a5%3A0x92de245797a63af!2sBITS%20-Bitmap%20IT%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1644760268804!5m2!1sen!2snp" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="mt-5">
                        <form>
                            <input type="text" name="name" class="rounded shadow-md border-[#284c817e] border focus:ring-transparent focus:border-[#284b81] active:border-[#284b81] w-full my-2" placeholder="Your Name">
                            <input type="email" name="email" class="rounded shadow-md border-[#284c817e] border focus:ring-transparent focus:border-[#284b81] active:border-[#284b81] w-full my-2" placeholder="Your Email Address">
                            <input type="text" name="subject" class="rounded shadow-md border-[#284c817e] border focus:ring-transparent focus:border-[#284b81] active:border-[#284b81] w-full my-2" placeholder="Subject">
                            <textarea  name="email" class="rounded shadow-md border-[#284c817e] border focus:ring-transparent focus:border-[#284b81] active:border-[#284b81] w-full my-2" Placeholder="Message"></textarea>
                            <div class="flex justify-center">
                                <input type="submit" value="Submit" class="rounded-md shadow-md bg-[#284b81] text-white hover:bg-[#2c5da7] px-4 py-1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- Contact Close --}}

@endsection

@section('js')
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay:true,
        //   pagination: {
        //     el: ".swiper-pagination",
        //   },
        });
    </script>

    <script src="{{asset('js/wow/wow.min.js')}}"></script>
    <script>
        new WOW().init();
        </script>
<!-- Smooth Scroll -->
        <script>
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                    && 
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                        } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                        };
                    });
                    }
                }
                });
        </script>

@endsection