<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

if( isset($_POST['submit']) ) {
    $client = new Client();

    $response = $client->request('post', 'https://api.pondokprogrammer.com/api/student_login',  [
        'form_params' => [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]
    ]);

    $body = $response->getBody();

    $body_array = json_decode($body, true);
    $token = $body_array['token'];
    $response = $client->request('post', 'https://api.pondokprogrammer.com/api/class/qr?class_id=117',  [
        'headers' => [
            'Authorization' => "bearer $token",
        ]
    ]);
    echo $response->getBody();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <div class="login">
                <ul>
                    <li>
                        <label for="email">email: </label>
                        <input type="text" name="email" id="email">
                    </li>
                    <br>
                    <li>
                        <label for="password">password: </label>
                        <input type="password" name="password" id="password">
                    </li>
                    <br>
                    <li>
                        <input type="submit" name="submit" id="submit">
                    </li>
                </ul>
            </div>
        </form>
    </div>
</body>
</html>