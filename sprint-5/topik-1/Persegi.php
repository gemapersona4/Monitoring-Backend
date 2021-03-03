<?php 
include('namespace/Persegi.php');

use Persegi\Persegi;
$Persegi = new Persegi;     

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>HITUNG LUAS PERSEGI</h1>
    <form action="" method="post">
        <label for="side">input side:</label>
        <input type="text" name="side" id="side">
        <input type="submit" value="submit">
    </form>
    <br>
    <?php 
        
        if( isset($_POST['side']) ) {
            $luasPersegi = $Persegi->luasPersegi($_POST['side']);
            echo "Luasnya adalah " . $luasPersegi;
        }

    ?>
    <br>
    <a href="index.php">Homepage</a>
</body>
</html>