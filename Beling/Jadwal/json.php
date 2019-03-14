
<?php

/* 
 * file untuk mengambil data dari database
 * dan mengubahnya ke format json
 * untuk ditampilkan di kalendar.
 */

session_start();

require '../config.php';
$username=$_SESSION['username'];

$query = "SELECT * from jadwalku WHERE username='$username' ";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());

$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "description" => $row["description"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data
        
?>