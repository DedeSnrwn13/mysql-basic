<?php

$connect = mysqli_connect('localhost', 'root', '', 'latihan_mysql_basic');

if ($connect == true) {
    echo "Berhasil";
} else {
    echo "Gagal";
}