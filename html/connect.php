<?php
    try {
    $dsn = 'mysql:host=mysql;dbname=phpdb;charset=utf8';
    $db = new PDO($dsn, 'user', 'secret');

    $sql = 'SELECT version();';
    $contact = $db->prepare($sql);
    $contact->execute();
    $result = $contact->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
    } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
    }
