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
    if (empty($ahobby)) {
        echo ("kamu tidak mempunyai hobby ?");
    } else {

        $ahobby = $_POST['hobby'];
        $N = count($ahobby);
        echo ("kamu mempunyai $N hobby: ");
        for ($i = 0; $i < $N; $i++) {
            echo ('<br>');
            echo ('&nbsp &nbsp &nbsp &nbsp');
            echo ($ahobby[$i] . " ");
        }
    }
    ?>
    <br>
    <!-- Select -->
    <?php
    $option = isset($_POST['kursus']) ? $_POST['kursus'] : false;
    if ($option) {
        echo htmlentities($_POST['kursus'], ENT_QUOTES, "UTF-8");
    }
    ?>
    <br>
    <!-- Select Multi -->
    <?php
    echo ('<br>');
    if (isset($_POST["bahasa"])) {
        // Retrieving each selected option 
        foreach ($_POST['bahasa'] as $subject)
            print "You selected $subject <br>";
    } else {
        echo "Select an option first !!";
    }
    ?>
    <br>
    <!-- Slide -->
    target kursus <?= $_POST["lama"]; ?> minggu<br>
    <!-- tanggal -->
    mulai tanggal : <?php echo $_POST["Date"]; ?>

    <hr>
    selamat datang <?php echo $_POST["nama"]; ?>, &nbsp; terima kasih sudah mengikuti chanel ini.

</body>

</html>