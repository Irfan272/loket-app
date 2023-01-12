<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/img/LOGO_LOKET_KITA.png')}}" alt="logo" class="rounded px-4 w-50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
         
            <li class="nav-item dropdown">
              @auth
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Welcome, {{auth()->user()->name}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <form action="/logout" method="POST">
                  
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                  </form>

               
              </ul>
              @endauth
            </li>
      
          </ul>
         </div>
      </div>
    </nav>
    
    <div class="container-besar">
      <div class="about">
        <div class="about-content">
          <img src="{{ asset('assets/img/LOGO_LOKET_KITA.png') }}" alt="Logo" />
          <h5>Aplikasi ini merupakan simulasi dari antrian, dimana setiap customer yang nomornya sesuai dengan nomor antrian yang tertera di loket boleh langsung menuju loket. Setiap loket disesuaikan dengan keperluan customer.</h5>
          <div class="about-create mt-5">
            <p class="about-nama-content">Aplikasi ini dibuat oleh :</p>
            <div class="d-flex about-nama-isi">
              <div class="about-nama">
                <p>Irfan Fadillah</p>
                <p>Kuwadi Kadun</p>
                <p>M. Naufal Zaki Ramadhan</p>
              </div>
              <div>
                <p>1101191052</p>
                <p>1101191056</p>
                <p>1101191050</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
