<?php 
function getAll($tbl){
    $pdo = Database::getInstance()->getconnection();
    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);

    if($results){
        return $results;
    }else{
        return 'There was an error.';
    }
}