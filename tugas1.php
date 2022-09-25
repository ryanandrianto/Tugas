<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS OOP 1 | G.211.21.0105</title>
</head>
<style>
body 




{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    background: #2980B9;
    font-family: "copperplate";
}

.po {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);


    background-color: #6DD5FA;
    width: auto;
    height: auto;
    border-radius: 3px;
    padding: 3px 12px;
    margin: 3px;
    box-shadow: 3px 3px 4px #bbb, -3px -3px 4px #fff;
}

h2 {
    text-align: center;
    font-weight: 800;
    border: 2px solid burlywood;
    background-color: #D7E8EE;
    border-radius: 8px;
}

p {
    text-align: justify;
    border: 2px solid burlywood;
    border-radius: 8px;
    padding: 2px 8px;
    font-weight: 500;
    font-size: 16px;
}
</style>
<body>
  <?php class barang 
  /** class barang adalah clas utama atau main class
        */{
    public $nama;
    public $harga;
    public $potongan;
    /** public $nama; public $harga; public $potongan;    adalah method dari class itu sendiri
    */

    function getHarga() {
        return $this->Harga;
    }

    function setHarga($harga) {
        $this->Harga=$harga;
    }

    function getNama() {
        return $this->Nama;
    }

    function setNama($nama) {
        $this->Nama=$nama;
    }

    function getPotongan() {
        return $this->Potongan;
    }

    function setPotongan($potongan) {
        $this->Potongan=$potongan;
    }
}

/**
    * php class barang  adalah class utama 
    function get membaca data dari properti yang tidak dapat diakses.
    function set dijalankan saat menulis data ke properti yang tidak dapat diakses

    */
class CDMusic extends barang
/** lass CDMusic extends barang adalah class turunan atau class pewarisan dari class barang
        */
         {
    public $artist;
    public $genre;
     /** public $artist; public $genre;   adalah method dari class itu sendiri
    */

    function __construct() {} 
/** function __construct adalah class yang di eksekusi pertama kali saat class itu di pangil
    */
    function getArtist() {
        return $this->artist;
    }

    function setArtist($artist) {
        $this->artist=$artist;
    }

    function getGenre() {
        return $this->genre;
    }

    function setGenre($genre) {
        $this->genre=$genre;
    }

    function setHarga($harga) {
        $this->Harga=$harga;
    }

    function getHarga() {
        $harga=$this->Harga;
        $ppn=((10/100) * $this->Harga);
        $potongan=((5/100) * $this->Harga);
        return ($harga + $ppn) - $potongan;
    }

    function setPotongan($potongan) {
        $this->Potongan=$potongan;
    }
}

/**class CDMusic extends barang adalah class turun atau pewarisan dari class barang
 function get membaca data dari properti yang tidak dapat diakses.
    function set dijalankan saat menulis data ke properti yang tidak dapat diakses

        *  
        */
class CDCrack extends barang 
/** class CDCrack extends barang adalah class turunan atau class pewarisan dari class barang
        */
   {
    public $kapasitas;
    public $jenis;
 /** public $kapasitas; public $jenis;   adalah method dari class itu sendiri
    */
    function getKapasitas() {
        return $this->Kapasitas;
    }
    /** function getKapasitas membaca data Kapasitas dan menampilkan data mengunakan $kapasitas
        */

    function setKapasitas($kapasitas) {
        $this->Kapasitas=$kapasitas;
    }
/** kapasitas di pangil menjadi $kapasitas  / data kapasitas berubah menjadi $kapasistas
        */
    function getJenis() {
        return $this->Jenis;
    }
/** function getJenis membaca data Kapasitas dan menampilkan data mengunakan $jenis
        */
    function setJenis($jenis) {
        $this->Jenis=$jenis;
    }
/** Jenis di pangil menjadi $jenis  / data Jenis berubah menjadi $jenis
        */
    function setHarga($harga) {
        $this->Harga=$harga;
    }
    /** kapasitas di pangil menjadi $harga  / data kapasitas berubah menjadi $harga
        */

    function getHarga() {
        $harga=$this->Harga;
        $ppn=((15 / 100) * $this->Harga);
        return $harga+$ppn;
    }
}
/**class CCDCrack extends barang adalah class turun atau pewarisan dari class barang
 function get membaca data dari properti yang tidak dapat diakses.
    function set dijalankan saat menulis data ke properti yang tidak dapat diakses

        *  
        */
?>
    <div class="po">
        <h3 align="center">TUGAS OOP 2</h3>
        <p>

            <?php 
        $beli=new barang(); $beli_cdm=new CDMusic(); $beli_cdr=new CDCrack();
         $beli->setNama("CD Music / CD Rack");
        /**
       $beli=new barang(); $beli_cdm=new CDMusic(); $beli_cdr=new CDCrack() 
       memangil class utama yaitu barang dan juga mamangil class turunan class CDMusic & CDCrack
        *  
        */
        $beli->setHarga(250000);
        $beli->setPotongan("1. Potongan 5% tiap pembelian satu CD Musik<br /> 2. Mohon Maaf Belum ada Potongan untuk pembelian CDRack");

        echo "Nama barang : ". $beli->getNama() . "<br />";
        echo "Harga : Rp. ". $beli->getHarga() . ",-<br />";
        echo $beli->getPotongan() . "</br>";
        $beli_cdm->setArtist("Justin Bieber");
        $beli_cdm->setGenre("Pop");
        $beli_cdm->setPotongan("5%");
        $beli_cdm->setHarga(50000);
        echo "<br>---SELAMAT DATANG DI CDMUSIK---<br />";
        echo "Nama barang : ". $beli->getNama() . "<br />";
        echo "Artis : ". $beli_cdm->getArtist() . "<br />";
        echo "Genre : ". $beli_cdm->getGenre() . "<br />";
        echo "Selamat anda mendapatkan Potongan Sebesar ". $beli_cdm->getPotongan() . "<br />";
        echo "Total Harga : Rp.". $beli_cdm->getHarga() . ",-<br />Harga diatas sudah
        termasuk PPN sebesar 10% dan Potongan 5%<br /></br>";


        $beli_cdr->setKapasitas("1 TB");
        $beli_cdr->setJenis("Software Abobe");
        $beli_cdr->setHarga(100000);
        echo "---SELAMAT DATANG DI CDRack--- <br />";
        echo "Kapasitas : ". $beli_cdr->getKapasitas() . "<br />";
        echo "Jenis : ". $beli_cdr->getJenis() . "<br />";
        echo "Mohon maaf Potongan belum tersedia untuk pembelian 1 CDRack <br />";
        echo "Total Harga : Rp.". $beli_cdr->getHarga() . ",-<br />Harga diatas sudah
        termasuk ppn sebesar 15% dan tidak mendapatkan Potongan";
        ?>
        </p>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap.bundle"></script>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap.bundle.min"></script>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap.esm"></script>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap.esm.min"></script>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap"></script>
    <script src="C:/xampp/htdocs/tugas_framewrok/bootstrap-5.2.1-dist/bootstrap-5.2.1-dist/js/bootstrap.min"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</body>
</html>