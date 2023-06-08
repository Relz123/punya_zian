<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>

    <link rel="stylesheet" href="../dist/sweetalert2.css">
    <script src="../dist/sweetalert2.js"></script>
    <?php
    require '../Config/connect.php';
    $id = $_GET["id"];
    ?>

</head>

<body align="center">
    <?php
    if (hapus_data($id) > 0) {
    ?>
        <script>
            Swal.fire({
                title: "Data deleted",
                text: "Data deleted successfully!",
                icon: "success",
                timer: 2000
            }).then((result) => {
                location.href = "../Page/admin.php";
            });
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire({
                title: "Data failed to delete",
                text: "Failed to delete data!",
                icon: "warning",
                timer: 2000
            }).then((result) => {
                location.href = "../Page/admin.php";
            });
        </script>
    <?php
    }
    ?>
</body>