@extends('user.template')

@section('content')
    <div class="bg-black flex justify-center">
        <div class="text-white h-max flex justify-center items-center w-[80%]">
            <div class="w-1/2 h-full flex justify-center items-center">
                <h1 class="lg:text-6xl md:text-4xl text-3xl">Games on!</h1>
            </div>
            <div class="h-full w-1/2 flex justify-center items-center">
                <img src="{{ asset('src/img/badminton.png') }}" alt="" class="xl:w-[20vw] md:w-20 lg:w-25 w-15">
            </div>
        </div>
    </div>
@endsection
