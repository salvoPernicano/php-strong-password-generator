<?php
include_once __DIR__ . 'index.php';
session_start();
?>

<form  action="index.php" method="GET">
        <label for="length">Lunghzza password</label>
        <input type="number" name="length" id="length" min=4 placeholder="Min characters 4">
        <button class="btn btn-primary" type="submit">Invia</button>
</form>

<h1>La tua password è: <span class="text-danger"><?php echo $_SESSION["userPwd"]; ?></span> </h1>
