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
        <h1 class="segitiga">HITUNG LUAS SEGITIGA</h1>
        <form action="" method="post">
            <label for="base">input base:</label>
            <input type="text" name="base" id="base">
            <br>
            <label for="height">input height:</label>
            <input type="text" name="height" id="height">
            <br>
            <br>
            <input type="submit" value="submit">
            <br>
            <p>
            <?php 
            if( isset($_POST['base']) && isset($_POST['height'])) {
                $luasSegitiga = $Segitiga->luasSegitiga($_POST['base'], $_POST['height']);
                echo "Luasnya adalah " .  $luasSegitiga;
            }
            ?>
            </p>
            <br>
        <a href="index.php">Homepage</a>
    </form>
    </div>
</body>
</html>