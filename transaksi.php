<?php
include('config.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Lakukan operasi SQL untuk menyimpan data ke database
    $sql = "INSERT INTO transaksi (nama, nohp, email, alamat) VALUES ('$nama', '$nohp', '$email', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: web.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>TRANSAKSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="transaksi.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Transaksi</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="post" action="">
                    <input class="text" type="text" name="nama" placeholder="Nama Lengkap" required="yes">
                    <input class="text p" type="text" name="nohp" placeholder="Nomor Hp" required="yes">
                    <input class="text" type="text" name="email" placeholder="Email" required="">
                    <input class="text p" type="text" name="alamat" placeholder="Alamat Lengkap" required="">
                    <input type="submit" value="NEXT BAYAR>>" name="submit">
                    <p class="text">Batalkan Transaksi? <a href="index.php">Batal</a>.</p>
                </form>
            </div>
        </div>
    </div>
    <!-- //main -->
</body>

</html>