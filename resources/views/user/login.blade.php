<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BadminPlay | Login</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-[#da0037] flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg flex flex-col justify-center items-center w-max p-5 shadow-xl shadow-black/50">
        <h1 class="text-3xl font-bold mb-5">Login</h1>
        <input type="email" class="w-11/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-3"
            placeholder="Email">
        <input type="password"
            class="w-11/12 rounded-lg outline outline-offset-2 outline-slate-500/50 border-slate-500 focus:outline-[#da0037] px-1 py-1 mt-5"
            placeholder="Password">
        <div class="mt-5">
            <input type="checkbox" name="rememberme" class="rounded-full checked:bg-red-500">
            <label for="rememberme">Remember me<a href="" class="text-[#da0037] hover:font-bold"> Forgot
                    password?</a></label>
        </div>
        <p>or use your social media account</p>
        <div class="grid grid-cols-3 gap-3">
            <a href="">
                <img src="{{ asset('src/icon/facebook.png') }}" alt="facebook" title="facebook"
                    class="w-9 transition ease-in-out delay-150 hover:scale-110">
            </a>
            <a href="">
                <img src="{{ asset('src/icon/twitter.png') }}" alt="twitter" title="twitter"
                    class="w-9 transition ease-in-out delay-150 hover:scale-110">
            </a>
            <a href="">
                <img src="{{ asset('src/icon/google-plus.png') }}" alt="google" title="google"
                    class="w-9 transition ease-in-out delay-150 hover:scale-110">
            </a>
        </div>
        <button class="w-11/12 bg-[#da0037] rounded-lg ease-in-out delay-100 hover:shadow-lg hover:shadow-slate-600 text-white mt-5 mb-2 p-2">Login</button>
        <p class="text-slate-500">you don't have an account? <a href="/regist"
                class="text-black hover:font-bold">Register Here</a>
        </p>
    </div>
</body>

</html>
