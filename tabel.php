<?php
  $nama = $_POST['nama'];
  $NIM = $_POST['NIM'];
  $radiobutton = $_POST['radiobutton'];
  $fakultas = $_POST['fakultas'];
  $angkatan = $_POST['angkatan'];
  $agama = $_POST['agama'];
  $TTL = $_POST['TTL'];
  $alamat = $_POST['alamat'];
  $nohp = $_POST['nohp'];
  $idemail = $_POST['idemail'];
  $divisi = $_POST['divisi'];
  $alatyang = $_POST['alatyang'];
  $motivasi = $_POST['motivasi'];
  $inovasi = $_POST['inovasi'];
  
  $foto = $_FILES['fileUpload']['tmp_name'];

  move_uploaded_file($foto, "profile_picture.jpg");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>tabel</title>
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Fakultas</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Agama</th>
      <th scope="col">TTL</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.Hp</th>
      <th scope="col">ID.Line.Email</th>
      <th scope="col">Divisi</th>
      <th scope="col">Alat yang dimiliki</th>
      <th scope="col">Motivasi</th>
      <th scope="col">Inovasi</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nama;?></td>
      <td><?php echo $NIM;?></td>
      <td><?php echo $radiobutton;?></td>
      <td><?php echo $fakultas;?></td>
      <td><?php echo $angkatan;?></td>
      <td><?php echo $agama;?></td>
      <td><?php echo $TTL;?></td>
      <td><?php echo $alamat;?></td>
      <td><?php echo $nohp;?></td>
      <td><?php echo $idemail;?></td>
      <td><?php foreach ($divisi as $key) {
      echo "-".$key."<br>";
      } ;?></td>
      <td><?php foreach ($alatyang as $key) {
      echo "-".$key."<br>";
      } ;?></td>
      <td><?php echo $motivasi;?></td>
      <td><?php echo $inovasi;?></td>
      <td><img src="profile_picture.jpg" style="height: 100px" width="100px"></td>
    </tr>
  </tbody>
</table>
<ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item">
      <a class="page-link" href="#">2 </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</body>
</html>