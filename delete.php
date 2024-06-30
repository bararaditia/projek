<?php
include "koneksi.php";
$pass=$_GET['password'];
$query="DELETE FROM tb_website where password='$pass'";
$hasil=mysqli_query($conn,$query);
if($hasil){
?>
<script labguage="javascript">document.location.href="datauser.php"</script>    
<?php
}else{
    echo "gagal hapus data";
}
?>