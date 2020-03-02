<?php

include_once "mysql.php";



if (isset($_POST['id']) && !empty($_POST['id'])) {

   // echo "valami";
    $id = $_POST['id'];



        $result = listazas($mysqli, $id);

        $tomb = array();
    
        while( $row = mysqli_fetch_array($result) ){
            $marka_id = $row['marka_ID'];
            $nev = $row['Nev'];
        
            $tomb[] = array("marka_ID" => $marka_id, "Nev" => $nev);
        }
        
    
        echo json_encode($tomb);

}
else {
    echo 0;
}
    
    


function listazas($connection,$id)
{
    $query = "SELECT * FROM modell WHERE marka_ID = ? ";
    if ($statment = mysqli_prepare($connection, $query)) {
        mysqli_stmt_bind_param($statment, "i",$id); //bind-hozzákötés "i"-integer 
        mysqli_stmt_execute($statment);
        $result = mysqli_stmt_get_result($statment); //eredménymegszerzés
     // return mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    } else {
        logMessage("ERROR", 'Query error: ' . mysqli_error($connection));
        errorPage();
    }  
}

