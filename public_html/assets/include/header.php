<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php if isset($beschrijving): ?>
        <meta name="description" content="<?= $beschrijving ?>">
<?php endif; ?>
        <link rel="stylesheet" href="/assets/css/style.css">
        <title><?= $titel ?></title>
<?php if isset($stijl): ?>
        <style><?= $stijl ?></style>
<?php endif; ?>
    </head>
    <body>
