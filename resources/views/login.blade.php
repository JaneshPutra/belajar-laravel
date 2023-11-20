<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Login</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
        <script src="https://cdn.tailwindcss.com"></script>     
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body> 
    <div class="flex items-center justify-center my-16">
        <form method="POST" class=" w-[400px] px-5 py-8">
            @csrf
            <div class="b w-full mx-auto text-center py-3">
                <h3 class="font-bold text-xl text-black ">Masuk</h3>
                <h4 class="text-[#64748B] text-sm mt-3">Silahkan masuk ke akun anda</h4>
            </div>
            <div class=" mt-4">
                <h5 class="text-xs">nama pengguna</h5>
                <input type="email" name="email" class=" w-full rounded-lg py-2 text-sm px-2 mt-2 border-2 border-[#E2E8F0]" placeholder="Nama Pengguna" required>
            </div>
            <div class=" mt-4">
                <h5 class="text-xs">kata sandi</h5>
                <input  placeholder="password" class="w-full rounded-lg py-2 text-sm px-2 mt-2 border-2 border-[#E2E8F0]" type="password" name="password" required>
            </div>
            @if(Session::has('status'))
                <div class="alert alert-danger form-control text-center py-2" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif 
            <div class=" mt-4">
                <button class=" bg-[#0F172A] text-white w-full py-2 rounded-lg" type="submit">masuk</button>
            </div>
        </form>
    </div>
    


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</body>
</html>