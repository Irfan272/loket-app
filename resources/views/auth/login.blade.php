<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>

<body>
   
    <div class="container mt-5" >
        <div class="row justify-content-center">
            <div class="col-md-6">
               
                <div class="bg">
                    <img src="{{asset('assets/img/BG_LOGIN.jpg')}}" class="rounded float-end position-absolute bottom-0 end-0" alt="tree"
                        style="width: 100%; height: 700px;position:absolute">
                </div>
                <div class="logo-loket">
                    <div class="logo-img">
                        <img src="{{asset('assets/img/LOGO_LOKET_KITA.png')}}" class="rounded position-relative px-4 w-50" alt="logo" >
                    </div>
                </div>
                <div class="card card-radius mt-lg-5 position-relative py-2 px-4 w-75 p-3 m-5">
                    <div class="card-content ">
                        <div class="card-header">
                            Login
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                             <div class="card-body">
                        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" :value="old('email')" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                            </div>
                            <div class="form-group button-input ">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                       
                             </div>
                    </form>
                    </div>
                </div>
                
                <div class="img-tree">
                    <img src="{{asset('assets/img/tree.png')}}" class="rounded float-end position-absolute bottom-0 end-0" alt="tree"
                        style="width: 480px; height: 450px;">
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>