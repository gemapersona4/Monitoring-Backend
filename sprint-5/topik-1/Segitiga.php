<?php 
include('namespace/Segitiga.php');

use Segitiga\Segitiga;
$Segitiga = new Segitiga;            
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dokumen</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main-segitiga">
        <h1>HITUNG LUAS SEGITIGA</h1>
        <form action="" method="post">
            <label for="base">input base:</label>
            <input type="text" name="base" id="base">
            <br>
            <label for="height">input height:</label>
            <input type="text" name="height" id="height">
            <br>
            <input type="submit" value="submit">
        </form>
        <br>
        <?php 
            if( isset($_POST['base']) && isset($_POST['height'])) {
                $luasSegitiga = $Segitiga->luasSegitiga($_POST['base'], $_POST['height']);
                echo "Luasnya adalah " .  $luasSegitiga;
            }
        ?>
        <br>
        <a href="index.php">Homepage</a>
    </div>
</body>
</html>