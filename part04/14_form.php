<!-- form12.php -->
<html>

<body>
    username : <?php echo $_POST["user"];  ?><br>
    nama lengkap : <?php echo $_POST["nama"];  ?><br>
    alamat : <?php echo $_POST["alamat"];  ?><br>
    Kota : <?php echo $_POST["kota"];  ?><br>
    jenis Kelamin kamu <?= $_POST["Gender"]; ?>

    <hr>
    selamat datang <strong><?php echo $_POST["nama"]; ?></strong>, &nbsp; terima kasih sudah mengikuti chanel ini.


</body>

</html>