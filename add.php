<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <label for="">Nama:</label><br>
        <input type="text" name="nama">
        <br>
        <label for="">Alamat:</label><br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="">Umur:</label><br>
        <input type="number" name="umur">
        <br>
        <label for="">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" id="">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>