<?php
header("Content-type: text/html; charset=utf-8");
include "config.php";

$ICode = 'f9e2c62ff12d908ca80d4dc6487f096b';
$ECode = isset($_GET['sc']) ? $_GET['sc'] : "";

if($ECode == ""){
    echo 
      "<div style=\"margin: 100px auto 0px auto; padding: 20px; background: #f5f5f5; border: 1px solid #dddddd; text-align: center;\">".
        "Connector file installed successfully.".
      "</div>";
    exit();
}
else if($ICode != $ECode){
    echo json_encode(array(
        'error' => 'Connector file belongs to another account',
    ));
    exit();
}

$Query  = isset($_GET['query']) ? base64_decode($_GET['query']) : "";
$Action = isset($_GET['action']) ? $_GET['action'] : "";
$Body   = file_get_contents('php://input');

if($Body != ""){
    $Post = json_decode($Body, true);
    if(is_array($Post) && isset($Post['query'])){
        $Query = base64_decode($Post['query']);
    }
}


if($Query != ""){
    $DB = new mysqli(
        DB_HOSTNAME,
        DB_USERNAME,
        DB_PASSWORD,
        DB_DATABASE
    );
    $DB->query("SET NAMES utf8");
    $Res  = $DB->query($Query);
    if($Res === false){
        echo json_encode(array(
            'error' => 'Request error',
        ));
        exit();
    }

    $List = array();
    for($i = 0; $i < $Res->num_rows; $i++){
        $List[] = $Res->fetch_assoc();
    }

    echo json_encode($List);
    exit();
}
else if($Action == "config"){
    $Result = array(
        'DB_PREFIX' => DB_PREFIX,
        'HTTP_SERVER' => HTTP_SERVER,
        'DIR_APPLICATION' => DIR_APPLICATION,
    );

    echo json_encode($Result);
    exit();
}