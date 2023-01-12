<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Menu</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  </head>
  <body>
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
