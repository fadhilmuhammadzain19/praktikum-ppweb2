<?php
require_once 'bukuTamu.php';
session_start();

if (!isset($_SESSION['bukuTamu'])) {
    $_SESSION['bukuTamu'] = [];
}

if (isset($_POST['submit'])) {
    // Membuat object dari class BukuTamu
    $bukuTamu = new BukuTamu();

    // Mengisi property object
    // Y-m-d H:i:s artinya
    $bukuTamu->timestamp = date('Y-m-d H:i:s');

    $bukuTamu->fullname = $_POST['fullname'];
    $bukuTamu->email = $_POST['email'];
    $bukuTamu->Message = $_POST['Message'];

    array_push($_SESSION['bukuTamu'], $bukuTamu);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>bukuTamu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class=container my-5>
            <h2 class="text-center">Daftar kunjungan</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Keperluan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['bukuTamu'] as $entry) : ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($entry->timestamp); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($entry->fullname); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($entry->email); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($entry->Message); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="index.php">&lt;&lt;&lt; Kembali</a>
            <!-- <a href="index.php"><<< Kembali</a> -->
        </div>
    </body>
</html>