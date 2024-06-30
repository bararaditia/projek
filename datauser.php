<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
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

/* RESET CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;  
        font-family: 'Poppins', sans-serif;
    }

    img {
    max-width: 100%;
    }

    a {
        text-decoration: none;
    }

/* GLOBAL CSS */
    section {
        padding: 70px 0;
    }

    section .section-title {
        font-size: var(--h2-font-size);
        font-weight: bold;
        text-transform: uppercase;
    }

    .btn-orange {
        background-color: var(--primary-color);
        color: white;
    }

    .text-orange {
        color: var(--primary-color);
    }

    .text-dark {
        color: var(--dark-color);
    }

    .fs-7 {
        font-size: var(--small-font-size);
    }

    .form-control:focus{
        box-shadow: none;
        border-color: var(--primary-color);
    }

/* CSS PER SECTION */

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
.table h1{
   display: flex;
   font-weight: bolder;
   justify-content: space-between;
   color: #134a91;
   align-items: center;
   padding: 70px 0px 0px 110px;
}
table{
    margin-top: 30px;
    margin-left: 65px;
    width: 90%;
    table-layout: fixed;
    min-width: 900px;
    border-collapse: collapse;
}
thead th{
    position: sticky;
    top: 0;
    background-color: #f6f9fc;
    color: grey;
    font-size: 15px;
}
th,td{
    border-bottom: 1px solid #dddd;
    padding: 10px 20px;
    word-break: break-all;
    text-align: center;
}
tr:hover td{
    cursor: pointer;
    background-color: #f6f9fc;
}
.echo{
  margin-left: 500px;
}
/* Regular styles */

/* Media query for screens smaller than or equal to 768px */
@media (max-width: 768px) {
    /* Reset some padding and margin for smaller screens */
    section {
        padding: 40px 0;
    }

    .table h1 {
        padding: 40px 0 0 20px; /* Adjust padding for smaller screens */
    }

    .table {
        margin-left: 20px; /* Adjust margin for smaller screens */
    }

    table {
        margin-left: 20px; /* Adjust margin for smaller screens */
    }
}

/* Media query for screens smaller than or equal to 576px */
@media (max-width: 576px) {
    .table h1 {
        padding: 40px 0 0 10px; /* Further adjust padding for smaller screens */
    }

    .table {
        margin-left: 10px; /* Further adjust margin for smaller screens */
    }

    table {
        margin-left: 10px; /* Further adjust margin for smaller screens */
    }
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
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="landing.html" style="margin-left: 10px; color: red;">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- manage -->
      <div class="table">
        <h1>Manage User</h1>
        <p></p>
      </div>
      <div class="table_section">
      <table border="1">
            <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="3">Action</th>
            </tr>
            <?php
            
            include "koneksi.php"; // Include your database connection file
            $query = "SELECT * FROM tb_website"; // SQL query to fetch data from database
            $hasil = mysqli_query($conn, $query); // Execute the query
            $no = 1;
            $jum = mysqli_num_rows($hasil); // Count the number of rows returned
            
            
            // Loop through each row of data
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['password']; ?></td>
                        <td><a href="detail.php?password=<?php echo $data['password']; ?>">Detail</a></td>
                        <td><a href="update.php?password=<?php echo $data['password']; ?>">Edit</a></td>
                        <td><a href="delete.php
                        ?password=<?php echo $data['password']; ?>" onclick="return confirm('apakah anda yakin?')" style="color:red;">Delete</a></td>
                    </tr>
                    <?php
                    
                    }
                    ?>
      </table>
  </div>
  
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>