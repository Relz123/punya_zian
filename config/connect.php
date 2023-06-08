<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "uprakxi";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $ukk_bukus = [];
    while ($ukk_buku = mysqli_fetch_assoc($result)) {
        $ukk_bukus[] = $ukk_buku;
    }
    return $ukk_bukus;
}

function tambah_data($ukk_buku)
{
    global $conn;

    $kategori = $ukk_buku["kategori"];
    $no_isbn = $ukk_buku["no_isbn"];
    $judul_buku = $ukk_buku["judul_buku"];
    $pengarang = $ukk_buku["pengarang"];
    $tahun_terbit = $ukk_buku["tahun_terbit"];
    $penerbit = $ukk_buku["penerbit"];

    $query = "INSERT INTO `ukk_buku`(`kategori`, `no_isbn`, `judul_buku`, `pengarang`, `tahun_terbit`, `penerbit`) VALUES ('$kategori','$no_isbn','$judul_buku','$pengarang','$tahun_terbit','$penerbit')";

    $query_exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($query_exe) {
        return true;
    }
    return false;
}
function hapus_data($id)
{
    global $conn;

    $query = "delete from `ukk_buku` where id='$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function edit_data($ukk_buku)
{
    global $conn;


    $id = $ukk_buku["id"];
    $kategori = $ukk_buku["kategori"];
    $no_isbn = $ukk_buku["no_isbn"];
    $judul_buku = $ukk_buku["judul_buku"];
    $pengarang = $ukk_buku["pengarang"];
    $tahun_terbit = $ukk_buku["tahun_terbit"];
    $penerbit = $ukk_buku["penerbit"];

    $query = "UPDATE `ukk_buku` SET `kategori`='$kategori',`no_isbn`='$no_isbn',`judul_buku`='$judul_buku',`pengarang`='$pengarang',`tahun_terbit`='$tahun_terbit',`penerbit`='$penerbit' WHERE id='$id'";


    $query_execeute = mysqli_query($conn, $query);

    if ($query_execeute) {
        return true;
    }

    return false;
}
function pinjam($ukk_buku)
{
    global $conn;

    $kategori = $ukk_buku["kategori"];
    $no_isbn = $ukk_buku["no_isbn"];
    $judul_buku = $ukk_buku["judul_buku"];
    $pengarang = $ukk_buku["pengarang"];
    $tahun_terbit = $ukk_buku["tahun_terbit"];
    $penerbit = $ukk_buku["penerbit"];

    $query = "INSERT INTO `ukk_buku`(`kategori`, `no_isbn`, `judul_buku`, `pengarang`, `tahun_terbit`, `penerbit`) VALUES ('$kategori','$no_isbn','$judul_buku','$pengarang','$tahun_terbit','$penerbit')";

    $query_exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($query_exe) {
        return true;
    }
    return false;
}

function query1($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $users = [];
    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = $user;
    }
    return $users;
}
function lupapw($user)
{
    global $conn;
    var_dump($user);
    echo "aaaaaaaa";
    $id = $user["id"];
    $username = $user["username"];
    $password = $user["password"];

    $query = "UPDATE `user` SET  `password`='$password' WHERE id='$id'";

    $query_execeute = mysqli_query($conn, $query);

    if ($query_execeute) {
        return true;
    }

    return false;
}
