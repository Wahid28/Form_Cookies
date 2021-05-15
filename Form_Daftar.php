<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <form action="Database.php" method="get">
        <pre>
            NIM         : <input type="text" name="nim">
            Nama        : <input type="text" name="nama">
            Alamat      : <input type="text" name="alamat">
            Fakultas    : <input type="text" name="fakultas">
            prodi       : <input type="text" name="prodi">
            Agama       : <select name="agama">
                <option> Islam 
                <option> Hindu  
                <option> Buddha 
                <option> Kristen 
                <option> Konghuchu
                </select>
            Password    : <input type="text" name="password">
        </pre>
        <input type="submit" value="Simpan" name="simpan">
    </form>

    <?php
    if (isset($_GET["simpan"])){
        echo $_GET["agama"];
    }
    ?>
</body>
</html>