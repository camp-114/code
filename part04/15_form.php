<!-- 15_form.php -->
<html>

<body>

    username : <?php echo $_POST["user"];  ?><br>
    nama lengkap : <?php echo $_POST["nama"];  ?><br>
    alamat : <?php echo $_POST["alamat"];  ?><br>
    Kota : <?php echo $_POST["kota"];  ?><br>
    jenis Kelamin kamu <?= $_POST["Gender"]; ?><br>

    <!-- checkbox singel -->
    <?php
    if (
        isset($_POST['umur']) &&
        $_POST['umur'] == 'Yes'
    ) {
        echo "umurmu diatas 18";
    } else {
        echo "umurmu belum 18";
    }
    ?>
    <br>
    <!-- checkbox multy -->
    <?php
    $ahobby = $_POST['hobby'];
    if (empty($ahobby)) {
        echo ("You didn't select any buildings.");
    } else {
        $N = count($ahobby);

        echo ("kamu mempunyai $N hobby: ");
        for ($i = 0; $i < $N; $i++) {
            echo ('<br>');
            echo ('&nbsp &nbsp &nbsp &nbsp');
            echo ($ahobby[$i] . " ");
        }
    }
    ?>

    <hr>
    selamat datang <?php echo $_POST["nama"]; ?>, &nbsp; terima kasih sudah mengikuti chanel ini.

</body>

</html>