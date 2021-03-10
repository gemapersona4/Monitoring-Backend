<?php 
require 'autoloader/bangundatar/Persegi.php';

$Persegi = new Persegi;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="main-persegi">
        <h1 class="persegi">HITUNG LUAS PERSEGI</h1>
        <form action="" method="post">
            <label for="side">input side:</label>
            <input type="text" name="side" id="side">
            <input type="submit" value="submit">
        </form>
        <br>
        <p>
        <?php 
            
            if( isset($_POST['side']) ) {
                $luasPersegi = $Persegi->luasPersegi($_POST['side']);
                echo "Luasnya adalah " . $luasPersegi;
            }

        ?>
        </p>
        <br>
        <a href="index.php">Homepage</a>
    </div>
</body>
</html>