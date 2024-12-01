
<?php 

    require_once "../function.php";

    echo $id;

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";  
    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc( $result);
    // echo $row['kategori'];

    // $kategori = "Jelly Bean";
    // $id = 18;
    // $sql = "UPDATE tblkategori  SET kategori='$kategori' WHERE idkategori=$id";

    // $result = mysqli_query($koneksi, $sql);

    // echo $sql;
?>

<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori'];?>">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 
    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tblkategori  SET kategori='$kategori' WHERE idkategori=$id";

       $result = mysqli_query($koneksi, $sql); 

       header("http://localhost/phpsmk/restoran/kategori/select.php");
    }
?>