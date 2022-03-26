<?php

require('connect.php');
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
// Проверка выполнения запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();

    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
//Запрос на получение данных c одной таблицы

function selectAll($table, $params=[]){
    global $pdo;
    $sql="SELECT * FROM $table";


    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value= "'". $value."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query=$pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();

}

//Запрос на получение дной строки  c выбранной таблицы

    function selectOne($table, $params=[]){
    global $pdo;
    $sql="SELECT * FROM $table";


    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value= "'". $value."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
//    $sql= $sql . " LIMIT 1";
    $query=$pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();

}
function insert($table, $params){
    global $pdo;
    //INSERT INTO `users` (admin, username, email, password) VALUES ('1', 'aruka', 'aru@gmail.com', '1808');
    $i = 0;
    $coll='';
    $mask='';
    foreach ($params as $key => $value){

        if($i === 0){
            $coll=  $coll . "$key";
            $mask=  $mask . "'" . "$value" . "'";

        } else {
            $coll = $coll . ", $key";
            $mask = $mask .  ", '" . "$value". "'";
        }
        $i++;


     }

    $sql="INSERT INTO $table ($coll) VALUES ($mask)";
$query= $pdo->prepare($sql);
    $query->execute($params);
dbCheckError($query);
return $pdo->lastInsertId();
}

//Обновление строки в таблице
function update($table,$id,  $params){
    global $pdo;
    $i = 0;
    $str= '';
    foreach ($params as $key => $value){
        if($i === 0){

            $str=  $str . $key . " = '" . $value . "'";

        } else {
            $str=  $str . ", " . $key . " = '" . $value. "'";
        }
        $i++;

    }
  //UPDATE `users` SET `username' = 'test' WHERE 'id'=1
    $sql="UPDATE $table  SET $str WHERE id= $id";
    $query= $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}



//Обновление строки в таблице
function delete($table,$id){
    global $pdo;
//    DELETE FROM `users` WHERE id = 2
    $sql="DELETE FROM $table WHERE id= $id";
    $query= $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}


//
//$arrData=[
//    'admin' => '1',
//    'username' => 'serko',
//    'email' => 'aru00@gmail.com',
//    'password' => 'wwwww',
//     'created' => '2022-03-13 23:51:04'
//
//];


//
//insert('users', $arrData);