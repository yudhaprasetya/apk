<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finance - Form Login</title>

  <style media="screen">
  <?php include '../css/login.css'; ?>
  </style>

</head>
<body>

  <div class="box">

    <p class="center">Silahkan Login</p>
    <label for="uname">Username</label>
    <input type="text" name="uname" value="" placeholder="Username / No KTP">
    <label for="password">Password</label>
    <input type="password" name="password" value="" placeholder="Password / Sandi">

    <input type="button" name="" value="Kembali">
    <div class="right">
      <input type="submit" name="login" value="Masuk">
    </div>

    <p><i>Belum punya akun? <a href="/users/regis.php">Daftar Sekarang!!!</a></i></p>
  </div>

</body>
</html>
