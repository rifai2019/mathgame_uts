<?php
session_start();
    echo "Hello " . $_SESSION['name'] . " tetap semangat ya... you can do the best!!<br>";
    echo "Lives: ". $_SESSION['live'] . " | Score: " . $_SESSION['skor'] ;

$x = rand(0,20);
$y = rand(0,20);

    if(isset($_POST['submit']))
    {
        $jawab = $_POST['jawab'];
        $hasil = $_SESSION['hasil'];
        $bil1 = $_SESSION['bil1'];
        $bil2 = $_SESSION['bil2'];
    if( $jawab == $hasil){
        $_SESSION['skor'] += 10;
        echo "<p>";
        echo "Hello " . $_SESSION['name'] . " Selamat jawaban Anda benar...<br> $bil1 + $bil2 = $hasil <br>";
        echo "Lives: ". $_SESSION['live'] . " | Score: " . $_SESSION['skor'] ;
        echo "</p>";
        echo "<p>";
        echo "<a href='start.php'><button>Soal selanjutnya</button></a>";
        echo "</p>";
        die();
    } 
    else{
        $_SESSION['skor'] -= 2;
        $_SESSION['live'] -= 1;
        echo "<p>";
        echo "Hello " . $_SESSION['name'] . " sayang jawaban Anda salah... tetap semangat ya !!! <br> 
            $bil1 + $bil2 = $hasil <br>";
        echo "Lives: <". $_SESSION['live'] . "> | Score: <" . $_SESSION['skor'] . ">";
        echo "</p>";
        echo "<p>";
        echo "<a href='start.php'><button>Soal selanjutnya</button></a>";
        echo "</p>";

        if($_SESSION['live'] <= 0){
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=finish.php">';
            exit();
            }
        }
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="start.php" method="post">
    <p> Berapakah 
    <?php
        $_SESSION['bil1'] = $x;
        $_SESSION['bil2'] = $y; 
        $_SESSION['hasil'] = $x + $y;
            echo "$x + $y"
        ?> = <input type="text" name="jawab">
            <br>    
        <td><button type="submit" name="submit">Submit</button></td>
            </br>
    </p>
    </form>
</body>
</html>