<?php
    include_once "mysql.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container" >
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="form-group">
                    <label for="marka">Márka</label>
                        <select name="" class="form-control"   id="marka">
                            <option value="<?=0?>" >Kiválaszt</option>
                            <?php

                            while ($row = $res->fetch_array()) : ?>

                                <option value="<?= $row['ID'] ?>"><?= $row['Nev'] ?></option> <!-- itt tőltöm majd fel dinamikusan az adatbázisban található értékekkel-->

                            <?php endwhile; ?>
                        </select>
                </div>
                <div class="form-group">
                    <label for="modell">Modell</label>
                        <select name="" class="form-control"   id="modell">
                            <option value="0" ></option>
                        </select>
                </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js'></script>
    <script src="script.js"></script>
</body> 

</html>