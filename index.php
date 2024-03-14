<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
</head>

<body>

</body>

</html>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");

    $db_conn = mysqli_connect("localhost","root","", "edusogno");
    if($db_conn===false) {
        die("error: could not connect to database".mysqli_connect());
    }
    $method = $_SERVER['REQUEST_METHOD'];
    //echo "test--".$method; die;
    switch($method) {
        case "GET":
        $alluser = mysqli_query($db_conn, "SELECT * FROM evento");
        if(mysqli_num_rows($alluser)>0){
            while($row= mysqli_fetch_array($alluser)){
                $json_array["userdata"][]=array("id"=>$row['id'], "attendees"=>['attendees'], "eventname"=>['nome_evento'],"eventdate"=>['data_evento']);
            }
            echo json_encode($json_array["userdata"]);
            return;
        } else {
            echo json_encode(["result"=>"please check the data"]);
            return;
        }
        break;
    }
?>