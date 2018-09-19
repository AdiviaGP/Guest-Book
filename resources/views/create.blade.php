<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Guest Book</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <section class="form">
      <div class="logo">
        <img src="/img/uii.png" width="200px" height="200px">
      </div>

      <form action="/" method="post">
        {{csrf_field()}}
        <h1>GUEST BOOK</h1>

        <!-- count error -->
                        @if (count($errors) > 0)
                          <div class="alert alert-danger imgdiv">
                              <strong>Whoops!</strong> There were some problems with your input.
                              <ul>
              					<!-- print  error -->
                                  @foreach ($errors->all() as $error_val)
                                      <li>{{ $error_val }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      @if ($success_message = Session::get('success'))
                      <div class="alert alert-success alert-block imgdiv">
                          <button type="button" class="close imgdiv" data-dismiss="alert">×</button>
                              <strong>{{ $success_message }}</strong>
                      </div>
                      @endif
        <!--#########################-->

        <div class="form-group">
          <label for="exampleFormControlInput1">Nama Lengkap</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Fakultas</label>
          <select class="form-control" id="exampleFormControlSelect1" name="fakultas">
            <option></option>
            <option>Fakultas Ekonomi</option>
            <option>Fakultas Hukum</option>
            <option>Fakultas Ilmu Agama Islam</option>
            <option>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
            <option>Fakultas Psikologi dan Ilmu Sosial Budaya</option>
            <option>Fakultas Teknik Sipil dan Perencanaan</option>
            <option>Fakultas Teknologi Industri</option>
          </select>
        </div>
        <br>
        <div class="button">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>
      </form>
      <div class="cek"><a href="/"><span class="vertical-text">DAFTAR PENGUNJUNG</span></a></div>
  </section>
  </body>
</html>
