<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finance - Form Pendaftaran</title>

  <style media="screen">
  <?php include '../css/login.css'; ?>
  </style>

</head>
<body>

  <div class="box">

    <p class="center">Daftar</p>
    <label for="uname">Username</label>
    <input type="text" name="uname" value="" placeholder="Username / No KTP">
    <label for="nama_l">Nama Lengkap</label>
    <input type="text" name="nama_l" value="" placeholder="Nama Lengkap">
    <label for="noktp">Nomor Induk KTP</label>
    <input type="number" name="noktp" value="" placeholder="Nomor Induk KTP">
    <label for="password">Password</label>
    <input type="password" name="password" value="" placeholder="Password / Sandi">
    <input type="password" name="password" value="" placeholder="Konfirmasi Ulang Password / Sandi">

    <input type="button" name="" value="Kembali">
    <div class="right">
      <input type="submit" name="regis" value="Daftar">
    </div>

    <p><i>Sudah punya akun? <a href="/users/login.php">Masuk</a></i></p>
  </div>

</body>
</html>
