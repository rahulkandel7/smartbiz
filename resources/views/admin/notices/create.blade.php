@extends('layouts.admin.app')

@section('main')
@include('layouts.message')
    <div class="flex-1">
        <div class="px-5 py-5">
            <h3 class="text-primary text-3xl text-[#284b81] font-bold">
                Add new Notice
            </h3>
            <hr class="border-[#284b81] dark:border-gray-500">
    
            @if($errors->any())
                <p class="my-3 text-red-400 font-bold">
                    {{$errors->first()}}
                </p>
              @endif
    
            <form method="post" action="{{route('admin.notices.store')}}" enctype="multipart/form-data">
                @csrf
                {{-- For Name --}}
                <div class="mt-5">
                    <label for="notice" class="block font-bold text-gray-600 dark:text-gray-200">Notices</label>
                    <input type="text" name="notice" id="notice" class="border-[#5976e970] border-2 rounded-md w-full focus:ring-transparent focus:border-[#284b81] bg-transparent mt-2" required value="{{old('notice')}}">
                </div>

                
    
                
                {{--  Add and Discard Button --}}
                
                <div class="mt-4">
                    <button type="submit" class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-[#284b81] hover:bg-[#3c56c0] rounded-md text-white">
                        Add
                    </button>
                    
                    <button class="px-6 py-1 border-0 shadow-sm hover:shadow-md bg-red-500 hover:bg-red-600 rounded-md text-white mx-5">
                        <a href="{{ route('admin.notices.index') }}" >Cancel</a>
                    </button>
                </div>
            </form>
    
            
        </div>
    </div>
@endsection
