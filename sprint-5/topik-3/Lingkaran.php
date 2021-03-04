<?php 
require 'autoloader/init.php';

$Lingkaran = new Lingkaran;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Lingkaran</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main-lingkaran">
        <h1 class="lingkaran">HITUNG LUAS LINGKARAN</h1>
        <form action="" method="post">
            <label for="radius">input radius:</label>
            <input type="text" name="radius" id="radius">
            <input type="submit" value="submit">
        </form>
        <br>
            <p>
                <?php 
                
                    if( isset($_POST['radius']) ) {
                        $luasLingkaran = $Lingkaran->luasLingkaran($_POST['radius']);
                        echo "Luasnya adalah " . $luasLingkaran;
                    }

                ?>
            </p>
            <br>
            <a href="index.php">Homepage</a>
    </div>
    <br>
</body>
</html>