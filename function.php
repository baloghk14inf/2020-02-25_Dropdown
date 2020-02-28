<?php

include_once "mysql.php";

//itt lessz a probléma

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

if (isset($_POST['id']) && !empty($_POST['id'])) {


    
    $id = $_POST['id'];

    //echo $id;
    //var_dump($id);
    //$result = listazas($mysqli, $id);


    $sql = "SELECT * FROM `modell` WHERE `marka_ID` ='$id'";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    //Send the array back as a JSON object
    echo json_encode($rows);
    
    
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

