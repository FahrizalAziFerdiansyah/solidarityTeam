<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <table border="2">
    <tr>
    <td>NIM</td>
    <td>Nama_mhs</td>
    <td>Jenis_kel</td>
    <td>Alamat</td>
    </tr>
    <?php foreach ($content->result() as $key ):?>
        <tr>
        <td><?php echo $key->NIM; ?></td>
        <td><?php echo $key->Nama_mahasiswa; ?></td>
        <td><?php echo $key->Jenis_kel; ?></td>
        <td><?php echo $key->Alamat; ?></td>
        </tr>
    <?php endforeach ?>
    </table>
</body>
</html>