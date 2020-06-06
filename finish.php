<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn){
        die("Koneksi gagal:" . mysqli_connect_error());
    } else {
        echo"";
    }

    $name = $_SESSION['name'];
    $skor = $_SESSION['skor'];
    $query = "UPDATE player SET skor=$skor WHERE nama='$name'";
    $result = mysqli_query($conn, $query);

        echo "Hello, ". $name."... Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.
            <br>Skor Anda : ". $skor . "<br><br>";
        echo "<td><b> Hall of Fame </b></td>";

    $query = 'SELECT id, nama, skor FROM player ORDER BY skor DESC LIMIT 10';
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
        echo "<table border='1' cellpadding=5 cellspacing=0>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Skor</th>
            </tr>
        </thead>
        <tbody>";
    $i = 1;     
    while ($row = mysqli_fetch_array($result))
    {
        echo '<tr><td>'.$i++.'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['skor'].'</td>
        </tr>';
    }
        echo '</tbody></table>';
mysqli_close($conn);
session_destroy();
?>

<p>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action='index.php' method='post'>
        <input type='submit' name='mainlagi' value='Main Lagi'>
    </form>
</p>
</body>
</html>

