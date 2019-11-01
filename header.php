<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
usort($posts, 'compareDate');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Fake News</title>
</head>

<body>
    <header>
        <h1 class="title">Fake News </h1>
        <p class="currentDate">
            <?php echo date("Y/m/d") ?> 
        </p>
    </header>