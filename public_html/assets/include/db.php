<?php
// TODO set values
$host = '';
$db = '';
$user = '';
$pass = '';
$charset = '';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

/*
 * Throw new exception to hide credentials
 * From: https://phpdelusions.net/pdo#dsn
 */
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int) $e->getCode());
}
?>
