<?php

include_once 'function.php';

$res = $mysqli->query("SELECT * FROM marka ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown</title>
</head>

<body>
    <select name="" onchange="" id="marka">
        <?php

        while ($row = $res->fetch_array()) : ?>

            <option value="<?= $row['ID'] ?>" id="aktualis"><?= $row['Nev'] ?></option> <!-- itt tőltöm majd fel dinamikusan az adatbázisban található értékekkel-->

        <?php endwhile; ?>
    </select>
    <select name="" id="model">
        <option value=""></option>
    </select>
</body>

</html>