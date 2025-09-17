<?php
//Tarkistetaan onko lomake lähetetty
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Lisää alle koodi joka ottaa vastaan lomakkeen tiedot
    $username = $_POST["username"]??"";
    $password = $_POST["password"]??"";

    //Korjaa ja täydennä alla oleva if-lause joka tarkistaa käyttäjätunnuksen ja salasanan
     if($username == "admin" && $password == "cat123")
     {
        //Kirjautuminen onnistui
        echo "<h1>Welcome admin!</h1>";
        echo "You will be redirected to the salary calculator in a few seconds...";
        //Alla oleva koodi ohjaa käyttäjän palkkalaskuriin 2 sekunnin kuluttua
        echo '<meta http-equiv="refresh" content="2;url=salary_calculator.php">';
        exit();
    }
     else
     {
        //Kirjautuminen epäonnistui
        echo  "Incorrect username or password.";
    }
}
?>