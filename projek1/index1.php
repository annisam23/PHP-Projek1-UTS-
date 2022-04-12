<?php
require_once "class_BMIpasien.php";

$pasien1 = new Bmipasien("Ica", "Bogor", "20 Tahun", "icaww21@gmail.com", "Perempuan", 70, 165, "21-01-2022");
$pasien2 = new Bmipasien("Isan", "Bogor", "27 Tahun", "isas@gmail.com", "LakiLaki", 88, 175, "01-02-2022");
$pasien3 = new Bmipasien("Ani", "Bogor", "15 Tahun", "anniwr@gmail.com", "Perempuan", 40, 155, "16-03-2022");


$arr = [$pasien1, $pasien2, $pasien3];


if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $berat = $_POST['berat'];
  $tinggi = $_POST['tinggi'];
  $gender = $_POST['jk'];
  $email = $_POST['email'];
  $umur = $_POST['umur'];

  $pasien4 = new Bmipasien($nama, "Bogor", $umur, $email, $gender, $berat, $tinggi, "09-04-2022");
  $arr = [$pasien1, $pasien2, $pasien3, $pasien4];
  //print_r($arr);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Hitung BMI</title>
  <style>

  </style>
</head>

<body>
  <div class="wrapper">
    <h2 style="text-align:center;">Cek BMI</h2>
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post" action="">
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Nama</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="text" name="nama" placeholder="Masukan Nama " type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="berat" class="col-4 col-form-label">Berat Badan</label>
              <div class="col-8">
                <input id="berat" name="berat" placeholder="Masukan berat badan (Kg)" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
              <div class="col-8">
                <input id="tinggi" name="tinggi" placeholder="Masukan tinggi badan (Cm)" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-4 col-form-label">Email</label>
              <div class="col-8">
                <input id="email" name="email" placeholder="Masukan Email " type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="berat" class="col-4 col-form-label">Umur</label>
              <div class="col-8">
                <input id="berat" name="umur" placeholder="Masukan Umur" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Jenis Kelamin</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="produk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                  <label for="produk_0" class="custom-control-label">L</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="produk_1" type="radio" class="custom-control-input" value="Perempuan">
                  <label for="produk_1" class="custom-control-label">P</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/564x/76/59/68/7659685e08d6f147e5a120e61cf234fd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kalkulator BMI</h5>
              <H6 class="card-title">Apa itu BMI?</h6>
              <p class="card-text">
                Body Mass Index (BMI) atau Indeks Massa Tubuh (IMT) adalah angka yang menjadi penilaian standar
                untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Berat(KG)</th>
        <th>Tinggi(CM)</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Email</th>
        <th>Tanggal Periksa</th>
        <th>Nilai BMI</th>
        <th>Status BMI</th>

      </tr>
      <tr>
        <?php $nomer = 1; ?>
        <?php foreach ($arr as $psn) : ?>
          <td><?= $nomer++; ?></td>
          <td><?php echo $psn->nama; ?></td>
          <td><?php echo $psn->berat; ?></td>
          <td><?php echo $psn->tinggi; ?></td>
          <td><?php echo $psn->gender; ?></td>
          <td><?php echo $psn->umur; ?></td>
          <td><?php echo $psn->email; ?></td>
          <td><?php echo $psn->tanggal; ?></td>
          <td><?php echo $psn->nilaiBMI(); ?></td>
          <td><?php echo $psn->statusBMI(); ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
</body>

</html>