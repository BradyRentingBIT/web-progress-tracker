<?php

    require_once 'php/function-listener.php';
    require_once 'php/database.php';
    require_once 'php/query-listener.php';

    echo '
        <form method="post" role="form">
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="username" class="form-control" placeholder="Naam" type="text">
                </div>
            </div>
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
                <button type="submit" name="register" class="btn btn-bit mt-4">Account maken</button>
            </div>
        </form>
    ';

    if (isset($_POST["register"]) && isset($_REQUEST["username"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username) || empty($email) || empty($password)) {
            alertMessage("Vul alle velden in.");
        } else {

            $statement = $pdo->prepare(checkEmail());
            $statement->bindValue(':user_login', $email);
            $statement->execute();
            $emailToCheck = $statement->fetch();
            $emailToCheck = $emailToCheck['user_login'];

            if ($emailToCheck === $email) {
                alertMessage("Dit email adress bestaat al. Voer een ander email adress in.");
            } else {

                $salt = sha1(md5($password));
                $password = md5($password . $salt);

                $statement = $pdo->prepare(registerUser());
                $statement->bindValue(':user_login', $email);
                $statement->bindValue(':user_password', $password);
                $statement->bindValue(':user_name', $username);

                $statement->execute();

                redirectPage('registration-successful.php');
            }
        }

    }