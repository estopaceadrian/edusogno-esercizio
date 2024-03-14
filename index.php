<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">

</head>

<body>
    <div class="bg-image">
        <div class="topbar">
            <img src="./assets/images/Group 181.svg" alt="logo" />
        </div>
        <div>
            <div class="title">Crea il tuo account</div>
            <div class="App">
            <form id="myForm">
                <fieldset>
                <div class="Field">
                    <label>Inserisci il nome</label>
                    <input id="nome" placeholder="Mario" />
                </div>
                <div class="Field">
                    <label>Inserisci il cognome</label>
                    <input id="cognome" placeholder="Rossi" />
                </div>
                <div class="Field">
                    <label>Inserisci l'email</label>
                    <input id="email" type="email" placeholder="name@example.com" />
                </div>
                <div class="Field">
                    <label>Inserisci la password</label>
                    <input id="password" type="password" placeholder="Scrivila qui" />
                    <div id="togglePassword">
                        <img src="./assets/images/Vector.svg"  class="eye"/>
                    </div>
                </div>
                <button type="submit">REGISTRATI</button>
                <div class="forgotpw">
                    Hai già un account<strong>? Accedi</strong>
                </div>
                </fieldset>
            </form>
            </div>

        </div>
        <div class="image-container">
            <div class="half-circle">
                <img src="./assets/images/Ellipse 13.png" />
            </div>
            <div class="bottomline">
                <img src="./assets/images/Vector 1.svg" />
            </div>
            <div class="darkinnerline">
                <img src="./assets/images/Vector 5.svg" />
            </div>
            <div class="darkbottomline">
                <img src="./assets/images/Vector 4.svg" />
            </div>
            <div class="rocket">
                <img src="./assets/images/Group 201.png" />
            </div>
            <div class="smallcircle">
                <img src="./assets/images/Ellipse 12.png" />
            </div>
        </div>
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>
<!-- <?php
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
                    $json_array["userdata"][]=array("id"=>$row['id'], "attendees"=>$row['attendees'], "eventname"=>$row['nome_evento'],"eventdate"=>$row['data_evento']);
                }
                echo json_encode($json_array["userdata"]);
                return;
            } else {
                echo json_encode(["result"=>"please check the data"]);
                return;
            }

        case "POST":
            $userpostdata= json_decode(file_get_contents("php://input"));
            $nome= $userpostdata->nome;
            $cognome= $userpostdata->cognome;
            $email= $userpostdata->email;
            $password= $userpostdata->password;
            $result= mysqli_query($db_conn, "INSERT INTO utenti (nome, cognome, email, password)
            VALUES('$nome','$cognome','$email','$password')");

            if($result){
                echo json_encode(["success"=>"User added successfully"]);
                return;
            } else {
                echo json_encode(["error"=>"Please check user data"]);
                return;
            }
        break;
    }
?> -->