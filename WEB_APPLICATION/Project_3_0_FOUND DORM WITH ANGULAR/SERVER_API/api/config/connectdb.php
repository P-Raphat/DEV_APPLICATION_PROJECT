<?php
function database(){
    $serverName = "45.77.38.248";
    $username = "abcdfe054";
    $password = "abcdfe054";
    $dbName = "fd_p_db";
    $objCon = mysqli_connect($serverName,$username,$password,$dbName);
    mysqli_set_charset($objCon,"utf8");
    return $objCon;
}
function statusConnectionDB(){
    $conn = database();
    if(!$conn){
        $data = array("status"=>"fail","msg"=> mysqli_connect_error());
        echo json_encode($data);
        mysqli_close($conn);
    }
    else{
        mysqli_close($conn);
        $data = array("status"=>"ok","msg"=> "Connected Successfully");
        echo json_encode($data);
    }
}
?>