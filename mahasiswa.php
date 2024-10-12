<?php

class Mahasiswa {
  // Properties
  private $nama;
  private $nim;
  private $jurusan;
  private $tahunAngkatan;
  private $totalNilai; // total nilai yang terkumpul
  private $jumlahMataKuliah; // jumlah mata kuliah yang diambil
  private $mataKuliah; // array untuk menyimpan nama mata kuliah

  // Constructor
  public function __construct($nama, $nim, $jurusan, $tahunAngkatan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    $this->tahunAngkatan = $tahunAngkatan;
    $this->totalNilai = 0.0; // total nilai awal
    $this->jumlahMataKuliah = 0; // jumlah mata kuliah awal
    $this->mataKuliah = array(); // array untuk menyimpan mata kuliah
  }

  // Getter methods
  public function getNama() {
    return $this->nama;
  }

  public function getNim() {
    return $this->nim;
  }

  public function getJurusan() {
    return $this->jurusan;
  }

  public function getTahunAngkatan() {
    return $this->tahunAngkatan;
  }

  public function getIpk() {
    if ($this->jumlahMataKuliah == 0) {
      return 0.0;
    }
    return $this->totalNilai / $this->jumlahMataKuliah;
  }

  public function getMataKuliah() {
    return $this->mataKuliah;
  }

  // Setter methods
  public function setNama($nama) {
    $this->nama = $nama;
  }

  public function setNim($nim) {
    $this->nim = $nim;
  }

  public function setJurusan($jurusan) {
    $this->jurusan = $jurusan;
  }

  public function setTahunAngkatan($tahunAngkatan) {
    $this->tahunAngkatan = $tahunAngkatan;
  }

  // Function to add Mata Kuliah
  public function addMataKuliah($mataKuliah) {
    $this->mataKuliah[] = $mataKuliah;
    $this->jumlahMataKuliah++;
  }

  // Function to calculate IPK
  public function calculateIpk($nilai) {
    $this->totalNilai += $nilai;
  }

  // Function to display student info
  public function displayInfo() {
    ?>
    <table border ="1">
      <tr>
        <th>Nama</th>
        <td><?= $this->nama ?></td>
      </tr>
      <tr>
        <th>NIM</th>
        <td><?= $this->nim ?></td>
      </tr>
      <tr>
        <th>Jurusan</th>
        <td><?= $this->jurusan ?></td>
      </tr>
      <tr>
        <th>Tahun Angkatan</th>
        <td><?= $this->tahunAngkatan ?></td>
      </tr>
      <tr>
        <th>IPK</th>
        <td><?= number_format($this->getIpk(), 2) ?></td>
      </tr>
      <tr>
        <th>Mata Kuliah</th>
        <td>
          <ul>
            <?php foreach ($this->mataKuliah as $mk) { ?>
              <li><?= $mk ?></li>
            <?php } ?>
          </ul>
        </td>
      </tr>
    </table>
    <?php
  }
}

// Create an object dari the Mahasiswa class
$mahasiswa1 = new Mahasiswa("Hendi Mulyo Wicaksono", "23.240.0075", "Teknik Informatika", 2023);

// Add mata kuliah
$mahasiswa1->addMataKuliah("Pemrograman WEB 2");
$mahasiswa1->addMataKuliah("Matematika Distrit");
$mahasiswa1->addMataKuliah("Pemograman Mobile ");

// Add nilai untuk tiap mata kuliah
$mahasiswa1->calculateIpk(3.5); // Nilai Pemrograman WEB 2
$mahasiswa1->calculateIpk(4.0); // Nilai Matematika Dstrit 
$mahasiswa1->calculateIpk(3.0); // Nilai Pemograman Mobile

// Display table with initial data
$mahasiswa1->displayInfo();

// Update properties
$mahasiswa1->setNama(nama:"Hendi Mulyo Wicaksono");
$mahasiswa1->setJurusan("Teknik Informatika");

// Display updated table
$mahasiswa1->displayInfo();

?>
