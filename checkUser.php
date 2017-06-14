<?php
// Henter informationer fra form
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

// laver en forbindelse over til connect.php
require_once "connect.php";
// Hent de brugere ud som lige er blevet indtastet
$statement = $DBH->prepare("SELECT * FROM users WHERE dbUsername=?");
$statement->bindParam(1, $formUsername);
$statement->execute();
//hiver alle rækkerne ud af $statement
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

//hvis brugeren ikke findes siger den echo, og går tilbage til index.php
if(empty($rows)){
    echo "<h1>Kan ikke finde bruger!<br>
    Prøv igen. Hvis du er en robot prøv ikke igen!</h1>";
    header("Refresh:3; url=nyheder.php");
}

// Vi kommer ind i else hvis brugernavn passer
else{
    //Der findes brugere med det samme brugernavn nu skal PW testes
    //Kør et loop der tester hver række om dbPassword matcher formPassword
    //For hver række trækker vi en række ud og ser om den passer
    foreach($rows as $row){
       
        if($row['dbPassword'] == $formPassword){
            
            echo "SUCCES!!";
            //starten ern session hvor man kan lagere forskellige værdier i
            //Session starter
            session_start();
            // i min session vil jeg lagere et username som skal være lig med det brugeren har indtastet
            $_SESSION['username'] = $formUsername;
            
            //Hvis password også passer kommer vi tilbage til nyheder.php
            header("location: nyheder.php");
        }
    }
    //Kommer her ned hvis password ikke passer
    echo "<h1>Ikke korrekt password!<br>
    Prøv igen. Hvis du er en robot prøv ikke igen!</h1>";
    header("Refresh:3; url=nyheder.php");

}
$DBH = null;

?>