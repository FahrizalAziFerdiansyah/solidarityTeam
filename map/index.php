
<?php

if (isset($_POST['kirim'])) {

$namaFile = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
}
// ambil data file



?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Pilih file: <input type="file" name="file" />
       <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
    </form> 
</body> 
</html>