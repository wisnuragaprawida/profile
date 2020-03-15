<?php 
require('function.php');

if(isset($_POST["kirim"])){

    if (tambah($_POST)>0) {
       echo "<script>
                alert ('berhasil');
                document.location.href ='index.php';
            </script>
            ";
    }
    else {
        echo " <script>
                 alert ('gagal');
                 document.location.href ='index.php';
             </script>
             ";
     }
      
}

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mycss.css">
    <title>portfolio</title>
  </head>
  <body class="mt-5">


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">Wisnu Raga</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">About</a>
      <a class="nav-item nav-link" href="#">Portfolio</a>
      <a class="nav-item nav-link" href="#">Contact</a>
    </div>
  </div>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center ">
    <img src="img/wisnu.jpg" class="rounded-circle img-thumbnail  gmbrprofil" >
    <h1 class="display-4 tulisanprofil">Wisnu Raga</h1>
    <p class="lead tulisanprofil1" id="tmbl">Selamat Datang di MY PORTFOLIO.</p>
  </div>
</div>

<section id="about" class="about">
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>About</h2>
    </div>
  </div>

  <div class="row justify-content-center ">
    <div class="col-md-10">
      <p>nama saya Wisnu Raga Prawida saya lahir di Lumajang,17 April 2002. dengan terlahir sangat tampan:) dan pada saat itulah hidup ku di mulai hehehe. awal mengenal pemrograman pada saat saya suka terhadap sesuatu hal yang disebut hacking. saya mulai belajar exploitasi android. belajar dari forum ke forum dan belajar lewat internet. suatu ketika saya mengenal istilah deface ya itu mengganti halaman website seseorang dengan script deface attacker. namun karena saya ingin membat script deface sendiri saya memutuskan untuk belajar secara otodidak untuk membuatnya. dan saya mulai belajar html dan css.. dan saya sadar membuat script deface sangatlah sulit.. dan itu yang membuat saya benci dengan istilah deface. dan mulai belajar membuat website</p>
  </div>
</div>
</section>
<section id="portfolio" class="portfolio pb-4">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-4 pt-4">
        <h2>Portfolio</h2>
      </div>
    </div>
    <div class="row mb-4 tulisan" >
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">menguasai html fundamental dan html5.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">memahami karakteristik css dan css layouting</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/3.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">paham tentang algoritma dan logic pada javascripts.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 tulisan"  >
      <div class="col-md">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact">
  <div class="container">
    <div class="row pt-4 mb-4 ">
      <div class="col text-center">
        <h2>Contact Us</h2>
      </div>
    </div>

    <div class="row justify-content-center mb-5 ">
      <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
        <div class="card-body">
          <h5 class="card-title">Hubungi Kami</h5>
          <p class="card-text">pt.nglowo abadi menyediakan berbagai alat bunuh diri dan keperluan lainnya</p>
        </div>
       </div>
       <ul  class="list-group">
        <li class="list-group-item disabled" aria-disabled="true"><h1>alamat</h1></li>
        <li class="list-group-item ">PT.NGLOWO ABADI</li>
        <li class="list-group-item ">JL.inajadulu-pakel-sukoreno-prigen</li>
        <li class="list-group-item">jawa timur-Indonesia</li>
      </ul>
     </div>
     <div class="col-lg-6">
      <form action="" method="post">
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" placeholder="masukan email" name="email" required>
  </div>
  <div class="form-group">
    <label for="telp">no tlp</label>
<input type="text" class="form-control" id="telp" placeholder="masukan nomor ponsel" name="tlp" required>
  </div>
  <div class="form-group">
    <label for="pesan">pesan</label>
    <textarea name="pesan" id="pesan" class="form-control" placeholder="tulis pesan" required></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" name="kirim">kirim pesan</button>
  </div>
     </form>
       
     </div>
    </div> 

  </div>

</section>

<footer class=" text-white">
  <div class="container">
    <div class="row text-center" >
      <div class="col">
        <p>&copy copyright 2019 powered by lowocoding</p>
      </div>
    </div>
  </div>
</footer>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>