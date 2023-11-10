<?php
    require_once 'login.php';

    try
    {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (\PDOException $e)
    {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $query = "CREATE TABLE users (
        forename VARCHAR(32) NOT NULL,
        surname VARCHAR(32) NOT NULL,
        username VARCHAR(32) NOT NULL,
        password VARCHAR(32) NOT NULL
        )";

    $result = $pdo->query($query);

    $forename = 'Owais';
    $surname = 'Tahir';
    $username = 'otahir';
    $password = 'mysecret';
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //add_user($pdo, $forename, $surname, $username, $hash);
    add_user($pdo, $forename, $surname, $username, $password);

    $forename = 'Bilal';
    $surname = 'Khan';
    $username = 'bkhan';
    $password = 'acrobat';
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //add_user($pdo, $forename, $surname, $username, $hash);
    add_user($pdo, $forename, $surname, $username, $password);


    function add_user($pdo, $fn, $sn, $un, $pw)
    {
        $stmt = $pdo->prepare('INSERT INTO users VALUES(?,?,?,?)');

        $stmt->bindParam(1, $fn, PDO::PARAM_STR, 32);
        $stmt->bindParam(2, $fn, PDO::PARAM_STR, 32);
        $stmt->bindParam(3, $fn, PDO::PARAM_STR, 32);
        $stmt->bindParam(4, $fn, PDO::PARAM_STR, 255);

        $stmt->execute([$fn, $sn, $un, $pw]);
    }

?>