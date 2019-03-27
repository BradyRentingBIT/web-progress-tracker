<?php

    require_once 'php/database.php';
    require_once 'php/query-listener.php';
    require_once 'php/function-listener.php';

    echo '
            <form method="post" role="form">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input name="password" class="form-control" placeholder="Wachtwoord" type="password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="login" class="btn btn-bit mt-4">Log in</button>
                </div>
            </form>
        ';

if (isset($_POST["login"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $salt = sha1(md5($password));
    $password = md5($password.$salt);

    $statement = $pdo->prepare(authenticateUser());
    $statement->bindValue(':user_login', $email);
    $statement->execute();

    $dataFetch = $statement->fetch();
    $truePassword = $dataFetch['user_password'];

    if ($password === $truePassword) {
        echo "Je bent ingelogd";
        $_SESSION['ID'] = $dataFetch['ID'];
        $_SESSION['name'] = $dataFetch['user_name'];
        $_SESSION['email'] = $email;
        redirectPage("dashboard.php");
    } else {
        $message = "Je hebt verkeerde gegevens ingevoerd. Probeer opnieuw.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}