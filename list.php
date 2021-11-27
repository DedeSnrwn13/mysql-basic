<?php 

include('connection.php');

$query = mysqli_query($connect, 'SELECT * FROM karyawan');
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($results);

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
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Klemain</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result): ?>
                <tr>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['alamat']; ?></td>
                    <td><?php echo $result['umur']; ?></td>
                    <td><?php echo $result['jenis_kelamin']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>