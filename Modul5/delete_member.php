<?php
require "koneksi.php";
require "model.php";

if (!empty($_GET['id_member'])) {
    $id_member = $_GET['id_member'];
    deletedata("member", $id_member, "id_member");
    header('location:Member.php');
    exit();
}
?>