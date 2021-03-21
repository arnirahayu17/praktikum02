<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .form {
          margin: 200px 500px 500px 500px;
        } 
        label {
          width: 160px;
        }
        .form_1 {
          padding-top: 10px;
        }
        .form-select {
          width: 200px;
          margin: 23px;
        }
        .form_3 {
          padding-top: 20px;
        }
        .form_4 {
          padding-top: 20px;
        }
        .form_5 {
          padding-top: 20px;
        }
        .button_1 {
          padding-top: 10px;
          position: absolute; 
          bottom: 200px;
        }
    </style>
</head>
<body>
<form class="form" method="POST" action="nilai_siswa.php">
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_1">
    <label for="Nama" class="col-form-label" >Nama</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control"  name="nama" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="matkul" class="col-form-label" >Mata Kuliah</label>
    <select class="form-select" name="matkul" aria-label="Default select example">
      <option selected>Basis Data</option>
      <option value="1">Jaringan Komputer</option>
      <option value="2">UI & UE</option>
      <option value="3">Pemrograman Web 2</option>
    </select>
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_3">
    <label for="UTS" class="col-form-label" >Nilai UTS</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control" name="uts" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_4">
    <label for="UAS" class="col-form-label"  >Nilai UAS</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control"  name="uas" aria-describedby="passwordHelpInline">
  </div>
  </div>
<div class="row g-3 align-items-center">
  <div class="col-auto">
  <div class="form_5">
    <label for="Tugas" class="col-form-label"  >Nilai Tugas</label>
  </div>
  </div>
  <div class="col-auto">
    <input type="text"  class="form-control" name="tugas" aria-describedby="passwordHelpInline">
  </div>
  </div>
  <div class="button_1">
  <input type="submit" value="Simpan" name="proses"/> 
  </br>
  </div>
</div>
</div>
</div>
</form>
</body>
</html>
