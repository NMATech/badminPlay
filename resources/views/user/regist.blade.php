<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BadminPlay | Regist</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-[#da0037] flex justify-center items-center h-screen">
    <div class="bg-white rounded-lg flex flex-col justify-center items-center w-max p-5 shadow-xl shadow-black/50">
        <h1 class="text-3xl font-bold mb-5">Register</h1>
        <div class="flex justify-between w-11/12">
            <input type="text"
                class="w-5/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-3"
                placeholder="First Name">
            <input type="text"
                class="w-5/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-3"
                placeholder="Last Name">
        </div>
        <input type="email"
            class="w-11/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-5"
            placeholder="Email">
        <input type="password"
            class="w-11/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-5"
            placeholder="Password">
        <input type="password"
            class="w-11/12 rounded-lg outline outline-offset-2 outline-slate-500/50 focus:outline-[#da0037] px-1 py-1 mt-5"
            placeholder="Re-Password">
        <button
            class="w-11/12 bg-[#da0037] rounded-lg ease-in-out delay-100 hover:shadow-lg hover:shadow-slate-600 text-white mt-5 mb-2 p-2">Register</button>
        <p class="text-slate-500">you do have an account? <a href="/" class="text-black hover:font-bold">Login
                Here</a>
        </p>
    </div>
</body>

</html>
