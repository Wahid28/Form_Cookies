<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_cookies";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected";

// Pendaftran
if (isset($_GET["simpan"])) {
    if($_GET["nim"] === '' || $_GET["nama"] === '' || $_GET["alamat"] === '' || $_GET["fakultas"] === '' || $_GET["prodi"] === '' || $_GET["password"] === ''){
        echo "Harap isi Semua Bidangnya!";
        // header("URL: http://a.pbw.ilkom.unej.ac.id/192410101110/Formdbupdate.php");
    } else{
    $sql = "INSERT INTO `user` (`nim`, `nama`, `alamat`, `fakultas`, `prodi`, `agama`, `password`) 
    VALUES ('".$_GET["nim"]."', '".$_GET["nama"]."', '".$_GET["alamat"]."', '".$_GET["fakultas"]."', '".$_GET["prodi"]."', '".$_GET["agama"]."', '".$_GET["password"]."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
    }


// Login

$data_nim = '';

if(isset($_GET["masuk"])){
    if($_GET["Login_nim"] === "" || $_GET["Login_pass"] === ""){
        echo "Harap isi Semua Bidangnya!";
    } else{
        $data_nim = $_GET["Login_nim"];
        $sql = "SELECT password FROM `user` where nim = $data_nim";
        $result = $conn->query($sql);
        // $pass = $conn->prepare($sql);
        // $pass->execute();
        // $result = $pass->fetch();
        echo  _toString($result);
    }
}
?>