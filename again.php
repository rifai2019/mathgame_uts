<?php
session_start();
	echo "Hallo " . $_SESSION['name'] . ", Selamat datang kembali di permainan ini!!!<br>";
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action='start.php' method='post'>
        <input type='submit' name='start' value='Start Game'>
    </form>
    <p>Bukan Anda? <a href="index.php">klik di sini</a></p>
</body>
</html>