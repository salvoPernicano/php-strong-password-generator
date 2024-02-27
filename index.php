<?php
include_once __DIR__ . '/partials/functions/generatePwd.php'; 

if(isset($_GET["length"])){
    $password =  generatePwd($_GET["length"]);
    echo $password;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once __DIR__ . '/partials/template/header.php'; ?>
    <?php include_once __DIR__ . '/partials/template/main.php'; ?>

</body>
</html>