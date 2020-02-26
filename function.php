<?php

include_once "mysql.php";

//itt lessz a probléma



if (isset($_POST['postszam']) && !empty($_POST['postszam'])) {
    
    $id = $_POST['postszam'];

    //echo $id;
    //var_dump($id);
    $result = listazas($mysqli, $id);
    
    
}
    
    


function listazas($connection,$id)
{
    $query = "SELECT * FROM modell WHERE marka_ID = ? ";
    if ($statment = mysqli_prepare($connection, $query)) {
        mysqli_stmt_bind_param($statment, "i",$id); //bind-hozzákötés "i"-integer 
        mysqli_stmt_execute($statment);
        $result = mysqli_stmt_get_result($statment); //eredménymegszerzés
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
       // return $result;
    } else {
        //logMessage("ERROR", 'Query error: ' . mysqli_error($connection));
        //errorPage();
    }  
}

