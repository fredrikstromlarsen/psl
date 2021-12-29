<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure passwords</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php
    $pws = $_GET['pw'] ?? "Password1";
    $pwh = password_hash($pws, PASSWORD_DEFAULT, ["cost" => 10]);
    ?>
    <div>
        <h2>Passwords</h2>
        <span>PLAINTEXT: <?= $pws ?></span><br>
        <span>BCRYPT HASH: <?= $pwh ?></span><br>
        <span>VALID HASH: <?= password_verify($pws, $pwh) ? "true" : "false" ?></span><br>
        <span>HASH INFO: <?php print_r(password_get_info($pwh)); ?></span>

        <h2>Keys</h2>
        <span>SECRET="<?= bin2hex(random_bytes(32)) ?>"</span><br><br>
        <span>SECRET="<?= bin2hex(random_bytes(64)) ?>"</span><br><br>
        <span>SECRET="<?= bin2hex(random_bytes(128)) ?>"</span><br><br>
        <span>SECRET="<?= bin2hex(random_bytes(256)) ?>"</span><br><br>
    </div>
</body>

</html>