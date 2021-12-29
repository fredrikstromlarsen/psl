<?php

declare(strict_types=1);
error_reporting(E_ALL);

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Dotenv\Dotenv;

require __DIR__ . './vendor/autoload.php';

$env = Dotenv::createImmutable(__DIR__);
$env->load();
$env->required('SECRET');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $db = json_decode(file_get_contents("db.json"), true);
    $r = [
        "un" => "^[A-Za-z]{3,6}$",
        "pw" => "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
    ];
    $cookieOptions = ['expires' => time() + 3600 * 18, 'path' => $_SERVER['REQUEST_URI'], 'SameSite' => 'Lax', 'HttpOnly' => true];

    include("functions.php");

    if (isset($_COOKIE['jwt'])) {
        $jwt = $_COOKIE['jwt'];
        $decoded = JWT::decode($jwt, new Key($_ENV['SECRET'], 'HS256'));
        var_dump($decoded);
    } else
        if (isset($_POST["username"]) && isset($_POST["password"])) {
        // echo "<br>> Username and password is set.";

        $un = strtolower($_POST["username"]);
        $pw = $_POST["password"];

        if (preg_match("/" . $r["un"] . "/", $un) && preg_match("/" . $r["pw"] . "/", $pw)) {
            // echo "<br>> Valid password and username.";

            $uid = checkIfUserExists($db, $un, $pw);

            if ($uid) {
                // echo "<br>> Authenticated.";

                $issuedAt = new DateTimeImmutable();
                $expiresAt = $issuedAt->modify("+1 day")->getTimestamp();
                $payload = [
                    "iat" => $issuedAt->getTimestamp(),
                    "iss" => $_SERVER["SERVER_NAME"],
                    "nbf" => $issuedAt->getTimestamp(),
                    "exp" => $expiresAt,
                    "uid" => $uid,
                ];
                $jwt = JWT::encode($payload, $_ENV["SECRET"], "HS512");
                echo "$jwt";
                // setcookie("jwt", $jwt, $cookieOptions);
                // header("Location:./");
            } else login("Wrong username or password.");
        } else login("Improper formatting of username or password.");
    } else login("");
    ?>
</body>

</html>