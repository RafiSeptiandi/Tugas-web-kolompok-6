<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
    <nav class="navbar navbar-dark bg-dark text-white">
        @auth
        <a class="btn btn-outline-info p-3 text-white mx-3" href="/mahasiswa">Kembali Ke Tabel</a>
              <form action="/logout" method="post">
                  @csrf
                <button class="btn btn-outline-danger p-3 text-white" type="submit">Sign Out</button>
              </form>
              <h1 class="mx-auto">Welcome To Our Website</h1>
              @else
        <form class="container-fluid justify-content-around">
          <a class="btn btn-outline-success p-3 text-white" href="/login">Login</a>
          <h3>Welcome To Our Website</h3>
          <a class="btn btn-sm btn-outline-secondary p-3 text-white" href="/register">Register</a>
        </form>
        @endauth
      </nav>
      <h1 class="text-center text-white mt-3">Welcome To Our Website: Pengelolaan Data Mahasiswa Dan Dosen</h1>
      <h1 class="text-center text-white">By: Yuni Aghnaita Izzani (8020200063)</h1>
      <h1 class="text-center text-white">Kevin Perdi Hasan(8020200212)</h1>
      <h1 class="text-center text-white">Mikhail Claudio Ibrahim(8020200095)</h1>
      <h1 class="text-center text-white">Thomas Agung Saputra(8020200225)</h1>
      <h1 class="text-center text-white">Rafi Septiandi Putra(8020200107)</h1>
      <h1 class="text-center text-white">Drenda Scheber(8020200019)</h1>
      <h1 class="text-center text-white">Raja Erlangga Juanitho(8020190364)</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
