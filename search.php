<?php 

include('connection.php');

$keyword = $_GET['keyword'];
$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama='$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>
</head>
<body>
    <div style="display: flex;">
        <a href="add.php">Tambah Data</a>
        <form action="search.php" method="GET" style="margin-left: 10px;">
            <input type="text" name="keyword" placeholder="Keyword.." value="<?php echo $_GET['keyword']; ?>">
            <button type="submit">Cari</button>
        </form>
    </div>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Klemain</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result): ?>
                <tr>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['alamat']; ?></td>
                    <td><?php echo $result['umur']; ?></td>
                    <td><?php echo $result['jenis_kelamin']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $result['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>