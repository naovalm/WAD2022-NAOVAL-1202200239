<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="MODUL2 NAOVAL.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="MODUL2 NAOVAL.php" style="color: white;" >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking.php" style="color: white;">MyBooking</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container">
  <div class="row">
    <div class="col">
    <div class="jumbotron jumbotron-fluid">
  <div class="container mt-5">
    <h1 style="text-align: left;"><b>Tambah Mobil</b></h1>
    <p style="text-align: left;">Tambah Mobil Baru Anda Ke List Show Room</p>
  </div>
</div>
    </div>
    <div class="col">
         
    </div>
</div>
<div class="row">
    <div class="col">
    <section id="form">
        <br></br>
        <form action="index.php?page=mybooking" method="POST" class="booking-form">
          <div class="mb-3">
            <label for="namereadonly" class="form-label"><b>Nama Mobil</b></label>
            <input type="text" class="form-control" id="namereadonly" name="namereadonly" placeholder="BMW M4">
          </div>
          <div class="mb-3">
            <label for="bookdate" class="form-label"><b>Nama Pemilik</b></label>
            <input type="text" class="form-control" id="bookdate" name="bookdate" placeholder="NAOVAL_1202200239">
          </div>
          <div class="mb-3">
            <label for="starttime" class="form-label"><b>Merk</b></label>
            <input type="text" class="form-control" id="starttime" name="starttime" placeholder="BMW">
          </div>
          <div class="mb-3">
            <label for="longduration" class="form-label"><b>Tanggal Beli</b></label>
            <input type="text" class="form-control" id="longduration" name="longduration" placeholder="11/12/2022">
          </div>
            <div class="form-group">
                <label for="Deskripsi"><b>Deskripsi<b></label>
                <textarea class="form-control" id="Deskripsi" rows="3" placeholder="The standard M4 comes with rear-wheel drive, a six-speed manual transmission, and a fiery 473-hp twin-turbo inline-six engine; M4 Competition models have 503 horsepower. Both models can be had with an optional eight-speed automatic, the only transmission sold with the optional xDrive all-wheel-drive system."></textarea>
            </div>
    <div class="mb-3">
  <label for="formFile" class="form-label"><b>Foto</b></label>
  <input class="form-control" type="file" id="formtambah">
  <br>
  <b>Status Pembayaran</b>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Lunas
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Belum Lunas
    </label>
  </div>
  
  <button type="submit" name="Submit" class="btn btn-primary mt-3"><span>Selesai</span></button>

  </div>
    </div>
    <div class="col">
           
    </div>
</div>

    </body>
</html>  