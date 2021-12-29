<?php

function login($e)
{
    $r = $GLOBALS["r"];
?>
    <form action="" method="post" enctype="application/x-www-form-urlencoded" class="container" id="login">
        <span class="e"><?= $e ?></span>
        <div class="container input">
            <input type="text" id="username" name="username" placeholder="Username" required autofocus pattern="<?= $r["un"] ?>">
            <label for="username">Username</label>
        </div>
        <div class="container input">
            <input type="password" id="password" name="password" placeholder="Password" required pattern="<?= $r["pw"] ?>">
            <label for="password">Password</label>
        </div>
        <input type="submit" value="Login">
    </form>
<?php
}
function checkIfUserExists($db, $un, $pw)
{
    foreach ($db as $id => $u) if ($u["un"] == $un && password_verify($pw, $u["pw"])) return $id;
    // return false;
}
