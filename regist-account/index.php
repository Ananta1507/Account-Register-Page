<?php
$hostname = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "db_crud"; // Ganti dengan nama database Anda 
// Membuat koneksi ke database
$conn = new mysqli($hostname, $username, $password, $database);
$koneksi = mysqli_connect ('localhost','root','','db_crud');

if (isset ($_POST['submit'])) {
$Username = $_POST['username'];
$Password = $_POST['pswd'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];

$query = mysqli_query($koneksi,"insert into account_user (Username , Password , Email,Phone) values ('$Username','$Password','$Email','$Phone')");
if ($query){
    echo '<div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; margin-top : 20px; border-radius: 5px;">
            <strong>Berhasil!</strong> Data berhasil disimpan.
          </div>';
}else{
    echo '<div style="padding: 10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;">
            <strong>Gagal!</strong> Data tidak dapat disimpan. Error: ' . $stmt->error . '
          </div>';
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Regist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" style="margin-top :50px">
  <h2 class="form-title text-center">Account Regist</h2>
  <form method = "post">
  <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter phonenumber" name="phone" required>

    <div class="container d-flex justify-content-center align-items-center" style="height: 10vh;">
        <div>
    </div>
    <button type="submit" class="btn btn-primary mx-2" name="submit">Save Item</button>
    <button type="submit" class="btn btn-primary mx-2" name="back">Back to login Page</button>

  </div>

</body>
</html>
