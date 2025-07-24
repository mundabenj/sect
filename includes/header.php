<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
        $title = explode('.', basename($_SERVER['PHP_SELF']));
        print ucwords(reset($title));
    ?> - DBT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>