<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="username">username :</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">password :</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>
    <br>
    <br>
    <?php var_dump($_POST['username']); echo "<br>"; var_dump($_POST['password']); ?> 

</body>
</html>