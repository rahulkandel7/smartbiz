@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#284b81] font-bold">
                Update Team Members:- {{$team->name}}
            </h3>
            <hr class="border-[#284b81] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.teams.update',$team->id)}}" enctype="multipart/form-data">
                @method('put')
                @csrf
                {{-- For Name --}}
                <div class="mt-5">
                    <label for="name" class="block font-bold text-gray-600 dark:text-gray-200">Name</label>
                    <input type="text" name="name" id="name" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#284b81] bg-transparent mt-2" required value="{{$team->name}}">
                </div>

                {{-- For Post --}}
                <div class="mt-5">
                    <label for="post" class="block font-bold text-gray-600 dark:text-gray-200">Post</label>
                    <input type="text" name="post" id="post" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#284b81] bg-transparent mt-2" required value="{{$team->post}}">
                </div>
    
                {{-- For selecting Image --}}
                <div class="mt-5">
                    <label for="photopath" class="block font-bold text-gray-600 dark:text-gray-200">Select Image</label>
                    <input type="file" name="photopath" id="photopath" class="border-0 w-full focus:ring-transparent focus:border-primary bg-transparent mt-2 file:border-none file:text-white file:bg-[#284b81] file:rounded-md file:hover:bg-[#415dce] file:cursor-pointer">
                </div>

                {{-- For Facebook LINK --}}
                <div class="mt-5">
                    <label for="fblink" class="block font-bold text-gray-600 dark:text-gray-200">Facebook Link</label>
                    <input type="text" name="fblink" id="fblink" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#284b81] bg-transparent mt-2" value="{{$team->fblink}}">
                </div>

                {{-- For instalink --}}
                <div class="mt-5">
                    <label for="instalink" class="block font-bold text-gray-600 dark:text-gray-200">Instagram Link</label>
                    <input type="text" name="instalink" id="instalink" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#284b81] bg-transparent mt-2" value="{{$team->instalink}}">
                </div>
    
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#284b81] hover:bg-[#3c56c0] rounded-md text-white">
                        Update
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.teams.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
