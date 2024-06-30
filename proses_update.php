<?php
include "koneksi.php";
$password=$_POST['password'];
$username=$_POST['username'];

$query="UPDATE tb_website SET username='$username' WHERE password='$password';";        
$hasil=mysqli_query($conn,$query);
if($hasil){
    header('location:datauser.php');
}else{
    echo"Gagal update data";
    echo mysqli_error();
}
?>