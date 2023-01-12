<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Loket Menu</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  </head>
  <body>
    <div class="container-besar">
      <div class="background-1">
        <img src="{{ asset('assets/img/BG_HOME.png') }}" alt="Background" />
      </div>
      <div class="background-2">
        <img src="{{ asset('assets/img/GELOMBANG.png') }}" alt="Background" />
      </div>
      <div class="loket">
        <div class="d-flex justify-content-evenly">
          <div class="loket-base d-grid">
            <div class="loket-kiri">
              <div class="loket-kiri-info">
                <h1>LOKET 1</h1>
              </div>
              <div class="loket-kiri-isi">
                <h1 id="angka-kiri">0</h1>
              </div>
            </div>
            <button id="button-kiri" class="loket-kiri-button">Next</button>
          </div>
          <div class="loket-base">
            <div class="loket-kanan">
              <div class="loket-kanan-info">
                <h1>LOKET 2</h1>
              </div>
              <div class="loket-kanan-isi">
                <h1 id="angka-kanan">0</h1>
              </div>
            </div>
            <button id="button-kanan" class="loket-kanan-button">Next</button>
          </div>
        </div>
      </div>
      <div class="reset">
        <button id="reset">Reset</button>
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
