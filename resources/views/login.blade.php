<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .login-box{
        border:solid 1px;
        width:500px;
        padding:35px;
        box-sizing:border-box;

    }
    
</style>
<body> 
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
         
        <div class="login-box">
            <form method="POST" action="">
                <img src="{{ ('images/profile.jpg') }}" alt="Deskripsi Gambar" class=" w-10 h-10">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                @if(Session::has('status'))
                <div class="alert alert-danger form-control text-center py-2" role="alert">
                    {{Session::get('massage')}}
                </div>
                @endif 
                <div class="mb-3">
                    <button class="btn btn-primary form-control" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>