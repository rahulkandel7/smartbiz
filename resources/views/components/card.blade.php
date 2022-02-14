<div class=" bg-white shadow-xl rounded-lg shadow-blue-50  hover:shadow-blue-100 hover:shadow-2xl card group">
    <i {{$attributes->merge(['class'=>'fa-3x text-[#284b81] px-5 pt-7 pb-5 group-hover:text-white'])}}>{{$icon}}</i>
    <h1 class="text-2xl px-5 group-hover:text-white">
        {{$title}}
    </h1>
    <p class="text-gray-600 px-5 mb-8 text-justify group-hover:text-white">
        {{$slot}}
    </p>
</div>