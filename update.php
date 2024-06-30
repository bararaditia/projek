<?php
include "koneksi.php";
$pass = $_GET['password'];
$query = "SELECT * FROM tb_website WHERE password='$pass'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<style>
/* FONTS */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

/* VARIABLES */
    :root {
        --main-color: #134a91;
        --second-color: #193457;

        --h1-font-size: 40px;
        --h2-font-size: 32px;
        --small-font-size: 14px;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;  
        font-family: 'Poppins', sans-serif;
    }

/* NAVBAR */
.navbar{
  box-shadow: 0 4px 41px rgba(14 55 54 / 14%);
}
.navbar .nav-item .nav-link,
.navbar .nav-item .nav-link{
    color: var(--main-color);
    font-size: 18px;
    font-weight: 600;
}
.navbar .nav-item .nav-link:hover,
.navbar .nav-item .nav-link:hover {
    color: var(--second-color);
}
.btn{
    padding: 7px 16px;
    background: var(--main-color);
    border: 2px solid white;
    border-radius: 40px;
    color: white;
    font-weight: 500;
}
.btn:hover{
    background: #fff;
    color: var(--second-color);
}
</style>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="foto/bolamedia.png" alt="Bootstrap" width="60" height="auto">
          </a>
          <a class="navbar-brand fw-bold" href="#">Dashboard Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Manage Data
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="datauser.php">Manage User</a></li>
                  <li><a class="dropdown-item" href="#">Manage Artikel</a></li>
                </ul>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="landing.html" style="margin-left: 10px; color: red;">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
<form action="proses_update.php" method="post">
    <div class="form-group row m-4 mt-5">
      <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="usernmae"  value="<?php echo $data['username']; ?>">
      </div>
    </div>
    <div class="form-group row m-4">
      <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password"  value="<?php echo $data['password']; ?>">
      </div>
    </div>
    <div class="form-group row m-4">
      <label for="inputPassword3" class="col-sm-1 col-form-label">Level</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $data['level']; ?>">
      </div>
    </div><br>

    <div class="form-group row ml-5">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">update</button>
        <button type="reset" class="btn btn-primary">reset</button>
      </div>
    </div>
  </form>
</body>