<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>3D Kalkulator rizki rian</title>
    
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Rizky Rian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About Me">3D Kalkulator</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron">
      <img src="img/gambar1.jpeg" alt="Rizky Rian" width="300" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Rizky Rian</h1>
      <p class="lead">Mahasiswa</p>
      <div class="container">

    </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,0L34.3,32C68.6,64,137,128,206,154.7C274.3,181,343,171,411,181.3C480,192,549,224,617,213.3C685.7,203,754,149,823,122.7C891.4,96,960,96,1029,117.3C1097.1,139,1166,181,1234,186.7C1302.9,192,1371,160,1406,144L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir jumbotron -->

    <!-- 3D Kalkulator -->
    <section id="About Me">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <br>
            <br>
            <br>
            <h2>3D kalkulator</h2>
            <br />
          </div>
        </div>
        <div class="container">
          <div class="row text-center">
            <div class="col">

              <!--Script Menyapa dan Perhitungan silinder,kerucut,bola -->
              <script src="js/myscript.js"></script>
              <!-- Akhir Script Menyapa dan Perhitungan silinder,kerucut,bola -->
        
        <br>
        <h5>Menghitung Volume dan Luas Permukaan dari Silinder, Kerucut dan Bola.</h5><br>
    </div>
</div>
</div>
<div class="container">
  <div class="row text-center">
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="card-body">
                <h6>Silinder</h6><br>
                <img src="img/silinder.svg" alt="Gambar_silinder" class="img-fluid" alt="Responsive image" style="width:150px;height:220px;">
                <br>
                <br>
                  <div class="form-group">
                      <input type="text" id="jariSilinder" class="form-control" placeholder="Masukan Jari-jari silinder (dalam meter)"><br>
                  </div>
                  <div class="form-group">
                      <input type="text" id="tinggiSilinder" class="form-control" placeholder="Masukan tinggi silinder (dalam meter)"><br>
                  </div>
                  <div class="form-group mb-0">
                    <button class="btn btn-primary" type="submit" onclick="permukaanSilinder(), volumeSilinder()">Hitung!</button>
                    <br>
                    <br>
                     <h4>Hasil Perhitungan</h4>
                     <p>Luas Permukaan: <span id="hasilPermukaan_Silinder"></span> m<sup>2</sup></p>
                     <p>Volume: <span id="hasilVolume_Silinder"></span> m<sup>3</sup></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="card-body">
                <h6>Kerucut</h6><br>
                <img src="img/kerucut.svg" alt="Gambar_Kerucut" class="img-fluid" alt="Responsive image" style="width:150px;height:220px;">
                <br>
                <br>
                  <div class="form-group">
                      <input type="text" id="jariKerucut" class="form-control" placeholder="Masukan jari-jari kerucut (dalam meter)"><br>
                  </div>
                  <div class="form-group">
                      <input type="text" id="pelukisKerucut" class="form-control" placeholder="Masukan garis pelukis kerucut (dalam meter)"><br>
                  </div>

                  <div class="form-group">
                    <input type="text" id="tinggiKerucut" class="form-control" placeholder="Masukan tinggi kerucut (dalam meter)"><br>
                </div>

                  <div class="form-group mb-0">
                    <button class="btn btn-primary" type="submit" onclick="permukaanKerucut(), volumeKerucut()">Hitung!</button>
                    <br>
                    <br>
                                    <h4>Hasil Perhitungan</h4>
                                    <p>Luas Permukaan: <span id="hasilPermukaan_Kerucut"></span> m<sup>2</sup></p>
                                    <p>Volume: <span id="hasilVolume_Kerucut"></span> m<sup>3</sup></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="card-body">
                <h6>Bola</h6><br>
                <img src="img/bola.svg" alt="Gambar_bola" class="img-fluid" alt="Responsive image" style="width:150px;height:220px;">
                <br>
                <br>
                  <div class="form-group">
                      <input type="text" id="jariBola" class="form-control" placeholder="Masukan jari-jari bola (dalam meter)"><br>
                  </div>
                  <div class="form-group mb-0">
                    <button class="btn btn-primary" type="submit" onclick="permukaanBola(), volumeBola()">Hitung!</button>
                    <br>
                    <br>
                                    <h4>Hasil Perhitungan</h4>
                                    <p>Luas Permukaan: <span id="hasilPermukaan_Bola"></span> m<sup>2</sup></p>
                                    <p>Volume: <span id="hasilVolume_Bola"></span> m<sup>3</sup></p>
                  </div>

                   <!-- Script aritmatika -->


              </div>
          </div>
      </div>
  </div>
</div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,160L30,176C60,192,120,224,180,224C240,224,300,192,360,154.7C420,117,480,75,540,101.3C600,128,660,224,720,250.7C780,277,840,235,900,197.3C960,160,1020,128,1080,122.7C1140,117,1200,139,1260,122.7C1320,107,1380,53,1410,26.7L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir 3D Kalkulator -->
    <!-- Social Media footer -->
    <footer class="footer">
      <a href="https://www.facebook.com/profile.php?id=100009263231571"><i class="bi bi-facebook" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/rizkyrian9/"><i class="bi bi-instagram" aria-hidden="true"></i></a>
      <a href="https://rizkyrian15.github.io/"><i class="bi bi-github" aria-hidden="true"></i></a>
    </footer>
    <!-- Akhir Social Media Footer -->

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Akhir Java Script -->
  </body>
</html>
