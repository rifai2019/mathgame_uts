<?php
session_start();

$host = "localhost";
$username = "id13981131_mathgame";
$password = "eY4}[WUD99ETv3gW";
$db = "id13981131_mathgame51";

$conn = mysqli_connect($host, $username, $password, $db);
    if (!$conn){
        die("Koneksi gagal:" . mysqli_connect_error());
    } else {
        echo"";
    }

    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $query = "SELECT nama, email FROM player WHERE nama='$name'";
        $result = mysqli_query($conn, $query);
        $name_db = array();
        $email_db = array();
    if (mysqli_num_rows($result) > 0) {
        while($data = mysqli_fetch_assoc($result)) {
            $name_data = $data['nama'];
            $email_data = $data['email'];
            array_push($name_db, $name_data);
            array_push($email_db, $email_data);
        }
    }
        $name_str = implode("", $name_db);
        $email_str = implode("", $email_db);

    if($name == $name_str && $email = $email_str){
        $_SESSION['name'] = $_POST['nama'];
        $_SESSION['live'] = 5;
        $_SESSION['skor'] = 0;
        header('Location:again.php');
        die();
    } 
    else{
        $query_reg = "INSERT INTO player (nama, email, skor) VALUES ('$name', '$email', 0)";
        $result_reg = mysqli_query($conn, $query_reg);
        $_SESSION['name'] = $_POST['nama'];
        $_SESSION['live'] = 5;
        $_SESSION['skor'] = 0;
        header('Location:start.php');
        die();
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
</head>
<body>
<form action="index.php" method="post">
<table >
        <td><b>Selamat datang di Mathematics Game</b></td> 
    <tr>    
        <td>Masukkan Nama:</td> 
        <td><input type="text" name="nama"></td>
    <tr>    
        <td>Masukkan Email:</td> 
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td><button type="submit" name="submit">Submit</button></td>
    </tr>
</table>
</form>
</body>
</html>
