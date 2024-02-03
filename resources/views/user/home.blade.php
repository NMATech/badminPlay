@extends('user.template')

@section('content')
    <div class="bg-black flex justify-center">
        <div class="text-white h-max flex justify-center items-center w-[80%]">
            <div class="w-1/2 h-full flex justify-center items-center">
                <h1 class="lg:text-6xl md:text-4xl text-3xl">Games on!</h1>
            </div>
            <div class="h-full w-1/2 flex justify-center items-center">
                <img src="{{ asset('src/img/badminton.png') }}" alt="" class="xl:w-[20vw] md:w-36 lg:w-44 sm:w-15">
            </div>
        </div>
    </div>

    <main>
        <h1 class="text-slate-600 text-5xl text-center font-bold m-3">News</h1>
        <div class="flex w-[80%] mx-auto justify-evenly p-5">
            <a href="">
                <div class="bg-no-repeat w-[300px] h-[200px] bg-cover flex justify-center items-end shadow-lg shadow-slate-500"
                    style="background-image: url('src/img/badminton.jpg'); border-image: fill 0 linear-gradient(#0001, #000)">
                    <p class="text-white text-2xl text-center">Resident Cup Indonesia Siap digelar di Indonesia</p>
                </div>
            </a>

            <a href="">
                <div class="bg-no-repeat w-[300px] h-[200px] bg-cover bg-center flex justify-center items-end shadow-lg shadow-slate-500"
                    style="background-image: url('src/img/badmin2.jpg'); border-image: fill 0 linear-gradient(#0001, #000)">
                    <p class="text-white text-2xl text-center">Kenalan dengan MVP Tourney of University Camp</p>
                </div>
            </a>
        </div>

        <h1 class="text-slate-600 text-5xl text-center font-bold m-3">Event</h1>
        <div class="w-[60%] mx-auto mb-6">
            <a href="">
                <div
                    class="flex flex-row w-full mx-auto text-center justify-center outline outline-black shadow-xl shadow-black hover:outline-[#da0037]">
                    <div class="basis-1/4 flex justify-center">
                        <img src="{{ asset('src/icon/logoContoh.jpg') }}" alt="" class="max-w-40 lg:w-30">
                    </div>
                    <div class="flex flex-col justify-center items-center basis-1/2 p-3">
                        <h1 class="font-bold text-3xl md:text-2xl">Resident Cup</h1>
                        <p class="text-xl md:text-lg">12 Februari 2024</p>
                        <p class="text-xl md:text-lg">This turnament is open for everyone</p>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    class="flex flex-row w-full mx-auto mt-5 text-center justify-center outline outline-black shadow-xl shadow-black hover:outline-[#da0037]">
                    <div class="basis-1/4 flex justify-center">
                        <img src="{{ asset('src/icon/logoContoh.jpg') }}" alt="" class="max-w-40 md:w-32">
                    </div>
                    <div class="flex flex-col justify-center items-center basis-1/2 p-3">
                        <h1 class="font-bold text-3xl md:text-2xl">Uviersity Camp</h1>
                        <p class="text-xl md:text-lg">1 Maret 2024</p>
                        <p class="text-xl md:text-lg">This turnament is open for every university in indonesia</p>
                    </div>
                </div>
            </a>
        </div>
        <h3 class="text-3xl font-bold text-center text-slate-600 mb-3">Follow us on</h3>
        <div class="grid grid-cols-3 gap-10 w-max mx-auto mb-5">
            <a href="">
                <img src="{{ asset('src/icon/facebook.png') }}" alt="facebook" title="facebook"
                    class="w-14 transition ease-in-out delay-150 hover:scale-110">
            </a>
            <a href="">
                <img src="{{ asset('src/icon/twitter.png') }}" alt="twitter" title="twitter"
                    class="w-14 transition ease-in-out delay-150 hover:scale-110">
            </a>
            <a href="">
                <img src="{{ asset('src/icon/google-plus.png') }}" alt="google" title="google"
                    class="w-14 transition ease-in-out delay-150 hover:scale-110">
            </a>
        </div>
    </main>
@endsection
