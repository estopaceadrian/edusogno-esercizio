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
            <div class="title">Hai già un account?</div>
            <div class="App">
            <form id="registerForm" method="POST" action="register.php">
                <fieldset>
                <div class="Field">
                    <label>Inserisci l’e-mail</label>
                    <input id="nome" placeholder="name@example.com" required/> 
                </div>
                <div class="Field">
                    <label>Inserisci la password</label>
                    <input id="password" type="password" placeholder="Scrivila qui" required/>
                    <div id="togglePassword">
                        <img src="./assets/images/Vector.svg"  class="eye"/>
                    </div>
                </div>
                
                <button type="submit">ACCEDI</button>
                <div class="forgotpw">
                    Non hai ancora un profilo<strong>? <a href="./register.php">Registrati </a></strong>
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