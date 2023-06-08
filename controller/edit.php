<?php
require '../Config/connect.php';
$id = $_GET['id'];

$ukk_buku = query("select * from `ukk_buku` where id=$id")[0];

?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Page/Table/css/style.css" />
    <link rel="stylesheet" href="../dist//sweetalert2.css">
    <script src="../dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../Page/Table/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../Page/Table/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Page/Table/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Page/Table/css/style.css">
    <link rel="stylesheet" href="../css/tamdit.css">
    <title>Edit</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <h2 class="mb-5">Edit Data Buku</h2>
            <h2>Data Buku Perpustakaan Telkom</h2>

            <div class="table-responsive">

                <table class="table custom-table">
                    <form action="" method="post">
                        <thead>
                            <tr>

                                <th scope="col">Kategori</th>
                                <th scope="col">NO. ISBN</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <input type="text" name="id" id="id" required value="<?= $ukk_buku["id"]; ?>" hidden>
                                <td><input type="text" name="kategori" id="kategori" required value="<?= $ukk_buku["kategori"]; ?>"></td>
                                <td><input type="text" name="no_isbn" id="no_isbn" required value="<?= $ukk_buku["no_isbn"]; ?>"></td>
                                <td><input type="text" name="judul_buku" id="judul_buku" required value="<?= $ukk_buku["judul_buku"]; ?>"></td>
                                <td><input type="text" name="pengarang" id="pengarang" required value="<?= $ukk_buku["pengarang"]; ?>"></td>
                                <td><input type="text" name="tahun_terbit" id="tahun_terbit" required value="<?= $ukk_buku["tahun_terbit"]; ?>"></td>
                                <td><input type="text" name="penerbit" id="penerbit" required value="<?= $ukk_buku["penerbit"]; ?>"></td>

                            </tr>

                            <td colspan="6" align="center"><button type="submit" name="submit" class="more" style="font-size : 25px">Edit</button></td>

                        </tbody>
                    </form>
                </table>
                <form action="../Page/admin.php" align="center">
                    <button type="submit" class="more">Back to Admin Page</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["submit"])) {
        $edit = edit_data($_POST);
        if ($edit) {
    ?>
            <script>
                Swal.fire({
                    title: "Edit Data",
                    text: "Edit Data Succesfull",
                    icon: "success",
                    timer: 1000
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Failed",
                    text: "Failed to Edit Data!",
                    icon: "warning",
                    timer: 5000
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>