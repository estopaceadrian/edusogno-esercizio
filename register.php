<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are present
    if (isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['password'])) {
        // Extract form data
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Basic validation
        if (empty($nome) || empty($cognome) || empty($email) || empty($password)) {
            echo json_encode(["error" => "All fields are required"]);
            exit;
        }

        // Connect to the database
        $db_conn = mysqli_connect("localhost", "root", "", "edusogno");
        if ($db_conn === false) {
            echo json_encode(["error" => "Could not connect to the database"]);
            exit;
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the user into the database
        $query = "INSERT INTO utenti (nome, cognome, email, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($db_conn, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $cognome, $email, $hashed_password);
        $result = mysqli_stmt_execute($stmt);
        
        // Check if insertion was successful
        if ($result) {
            header("Location: events.php");
            exit;
        } else {
            echo json_encode(["error" => "Failed to add user"]);
        }

        // Close the database connection
        mysqli_close($db_conn);
    } else {
        echo json_encode(["error" => "Invalid form data"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edusogno</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
  </head>

  <body>
    <div class="bg-image">
      <div class="topbar">
        <img src="./assets/images/Group 181.svg" alt="logo" />
      </div>
      <div>
        <div class="title">Crea il tuo account</div>
        <div class="App">
          <form id="registerForm" method="POST" action="register.php">
            <fieldset>
              <div class="Field">
                <label>Inserisci il nome</label>
                <input id="nome" name="nome" placeholder="Mario" required />
              </div>
              <div class="Field">
                <label>Inserisci il cognome</label>
                <input
                  id="cognome"
                  name="cognome"
                  placeholder="Rossi"
                  required
                />
              </div>
              <div class="Field">
                <label>Inserisci l'email</label>
                <input
                  id="email"
                  type="email"
                  name="email"
                  placeholder="name@example.com"
                  required
                />
              </div>
              <div class="Field">
                <label>Inserisci la password</label>
                <input
                  id="password"
                  type="password"
                  name="password"
                  placeholder="Scrivila qui"
                  required
                />
                <div id="togglePassword">
                  <img src="./assets/images/Vector.svg" class="eye" />
                </div>
              </div>
              <button type="submit">REGISTRATI</button>
              <div class="forgotpw">
                Hai già un account<strong
                  >? <a href="./index.php">Accedi</a></strong
                >
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
