<?php 

class FormView {

	public function formAwalNobee (){
		?>
<!DOCTYPE html>
<html>
<head>
	<title>nobeee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="nobee.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body  style="background-image:url(https://nts2f1lcc35cnhwu33g5hs1e-wpengine.netdna-ssl.com/wp-content/uploads/2015/06/Top_view-Desk.jpg);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: center">
	<form action="tabel.php" method="POST" enctype="multipart/form-data">
	<h2><i class="fa fa-user"></i>Form Pendaftaran Nobee</h2>
	<br/>
		<div class="form-group">
  			<label for="namalengkap">Nama</label>
  			<input type="namalengkap" class="form-control" name="nama" id="namalengkap" placeholder="Nama Lengkap Anda"></input>
  		</div>
		<div class="form-group">
  			<label for="nim">NIM</label>
    		<input type="nim" class="form-control" name="NIM" id="nim" placeholder="NIM">
  		</div>
		
		 <div class="form-group">
 			<p>Jenis Kelamin</p>
  			<input type="radio" name="radiobutton" value="pria" id="cek-pria" class="cek"><label for="cek-pria">Pria</label>
  			<input type="radio" name="radiobutton" value="wanita" id="cek-wanita" class="cek"><label for="cek-wanita">Wanita</label>
 		</div>
		<div class="form-group">
			<label for="fk">Fakultas</label>
			<select class="form-control" name="fakultas">
				<option value = "Fakultas Kedokteran">Fakultas Kedokteran</option>
				<option value="Fakultas Kedokteran Gigi">Fakultas Kedokteran Gigi</option>
				<option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
				<option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
				<option value="Fakultas Teknik">Fakultas Teknik</option>
				<option value="Fakultas Hukum">Fakultas Hukum</option>
				<option value="Fakultas Pertanian">Fakultas Pertanian</option>
				<option value="Fakultas Ilmu Administrasi">Fakultas Ilmu Administrasi</option>
				<option value="Fakultas Perikanan dan Ilmu Kelautan">Fakultas Perikananan dan Ilmu Kelautan</option>
				<option value="Fakultas Peternakan">Fakultas Peternakan</option>
				<option value="Fakultas Vokasi">Fakultas Vokasi</option>
				<option value="Fakultas Matematika dan Ilmu Pengetahuan">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
			</select>
		</div>
		<div class="form-group">
			<label for="fk">Angkatan</label>
			<select class="form-control" name="angkatan">
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
			</select>
		</div>
		<div class="form-group">
    		<label for="agama">Agama</label>
    		<input type="agama" class="form-control" name="agama" id="agama" placeholder="Agama">
		</div>
		<div class="form-group">
    		<label for="ttl">TTL</label>
    		<input type="ttl" class="form-control" name="TTL" id="ttl" placeholder="TTL">
		</div>
		<div class="form-group">
    		<label for="alamat">Alamat</label>
    		<input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
		</div>
		<div class="form-group">
    		<label for="nohp">No.Hp</label>
    		<input type="nohp" class="form-control" name="nohp" id="nohp" placeholder="No.hp">
		</div>
		<div class="form-group">
    		<label for="email">Id.Line/Email</label>
    		<input type="email" class="form-control" name="idemail" id="email" placeholder="Id.Line/Email">
		</div>
		<div class="form-group">
			<label for="orga">Divisi (maksimal 2)</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="Humas" id="Wherever Needed">
			<label class="form-check-label" for="Whereverneeded">Humas</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="Kominfo" id="Decoration">
			<label class="form-check-label" for="Decoration">Kominfo</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="Kestari" id="Game">
			<label class="form-check-label" for="Game">Kestari</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="Bendahara" id="Food">
			<label class="form-check-label" for="Food">Bendahara</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="PSDM" id="Arts">
			<label class="form-check-label" for="Arts">PSDM</label>
			<br>
			<input type="checkbox" class="form-check-input" name="divisi[]" value="Kewirausahaan" id="Others">
			<label class="form-check-label" for="others">Kewirausahaan</label>
		</div>
		<div class="form-group">
			<label for="orga">Alat yang dimiliki untuk menunjang organisasi</label>
			<br
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="Handphone" id="Wherever Needed">
			<label class="form-check-label" for="Whereverneeded">Handphone</label>
			<br>
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="Laptop" id="Decoration">
			<label class="form-check-label" for="Decoration">Laptop</label>
			<br>
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="Kamera" id="Game">
			<label class="form-check-label" for="Game">Kamera</label>
			<br>
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="Sepeda Motor" id="Food">
			<label class="form-check-label" for="Food">Sepeda Motor</label>
			<br>
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="Mobil" id="Arts">
			<label class="form-check-label" for="Arts">Mobil</label>
			<br>
			<input type="checkbox" class="form-check-input" name="alatyang[]" value="danlainlain" id="Others">
			<label class="form-check-label" for="others">Others</label>
		</div>
		<div class="form-group">
			<label for="offers">Motivasi mengikuti organisasi</label>
			<textarea class="form-control" name="motivasi" id="offers" rows="3" placeholder="Motivasi saya adalah..."></textarea>
		</div>
		<div class="form-group">
			<label for="offers">Inovasi atau Harapan Forum Perempuan Brawijaya 2018</label>
			<textarea class="form-control" name="inovasi" id="offers" rows="3" placeholder="Inovasi saya adalalah.."></textarea>
		</div>

		
<div class="form-group">
			<label for="picture">Foto Diri</label>
			<input type="file" class="form-control-file" id="picture" name="fileUpload">
		</div>
 <div class="form-group">
  <button class="btn btn-submit" type="submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>


  </form>
</div></body>
</html>

	<?php
	}
    public function FormAkhirNobee ($data){
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
      <th scope="col">HariScreening</th>
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
      <td><?php echo $HariScreening;?></td>
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
    <?php
    }
}