<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Guest Book</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <section class="form">
      <div class="logo">
        <img src="/img/uii.png" width="200px" height="200px">
      </div>
      <div class="tablee table">
      <table border="0" class="table" width="90%" height="100%">
        <h1>DAFTAR PENGUNJUNG</h1>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Fakultas</th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $buku)
            <tr>
              <td>{{$buku->nama}}</td>
              <td>{{$buku->fakultas}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="link">{{ $books->links() }}</div>
      </div>
      <div class="cek"><a href="/create"><span class="vertical-text">GUEST BOOK</span></a></div>

  </section>
  </body>
</html>
