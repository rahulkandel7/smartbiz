@extends('layouts.admin.app')
@section('css')
<script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
@section('main')
@include('layouts.message')
    <div class="px-6 pt-6 flex-1">
        <div class="flex flex-wrap">
            <a href="{{route('admin.teams.index')}}" class="w-64 my-4">
            <div class=" mx-4 mt-4 p-2 shadow-md rounded-md bg-indigo-500 shadow-indigo-200 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Team Members</h2>
                <div class="flex justify-between">
                    <i class="fa fa-newspaper fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4">{{$teams}}</h1>
                </div>
            </div>
            </a>
            

            <a href="{{route('admin.notices.index')}}" class="w-64 my-4">
            <div class="  mx-4 mt-4 p-2 shadow-md shadow-sky-300 dark:shadow-gray-600 rounded-md bg-sky-500 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Notices</h2>
                <div class="flex justify-between">
                    <i class="fas fa-copy fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4"> {{$notices}} </h1>
                </div>
            </div>
            </a>

            <a href="{{route('admin.testomonial.index')}}" class="w-64 my-4">
                <div class="  mx-4 mt-4 p-2 shadow-md shadow-lime-300 dark:shadow-gray-600 rounded-md bg-lime-500 hover:shadow-sm hover:cursor-pointer">
                    <h2 class="text-xl font-bold text-white">No of Testonomial</h2>
                    <div class="flex justify-between">
                        <i class="fas fa-images fa-2x text-white opacity-70"></i>
                    <h1 class="text-4xl font-bold text-right text-white mr-4">{{$testos}}</h1>
                    </div>
                </div>
            </a>

            <a href="#" class="w-64 my-4">
            <div class="mx-4 mt-4 p-2 shadow-md rounded-md bg-indigo-500 hover:shadow-sm hover:cursor-pointer">
                <h2 class="text-xl font-bold text-white">No of Visits</h2>
                <div class="flex justify-between">
                    <i class="fa fa-globe fa-2x text-white opacity-70"></i>
                <h1 class="text-4xl font-bold text-right text-white mr-4">11555</h1>
                </div>
            </div>
            </a>
            

        </div>

        <div id="container" class="mt-8 bg-gray-500" style="max-width:100%; height:400px;"></div>
    </div>


    <script>
        var colorr = '#ffffff';
        if (document.documentElement.classList.contains('dark')) {
            colorr = '#1f2937';
        }
        document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart:  { 
                backgroundColor: '#6a6671',
                color: 'white',
                type: 'line',
            },
            title: {
                text: 'No of Visits'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Visits'
                }
            },
            series: [{
                name: 'No of Visitors',
                data: [1, 0, 4]
            }]
        });
    });
    </script>
@endsection