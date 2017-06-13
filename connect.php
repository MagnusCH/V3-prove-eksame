<?php 
// laver variabler, giver værdi

// adressen til databasen
$host ="localhost";
// databasens navn
$dbName ="hesteside";
// username til databasen
$dbUsername ="root";
// password til databasen
$dbPassword ="";

// PDO = php data object: En måde hvor man kan arbejde med php object orienteret

try{
    // $DHB = database handler, man man kunne også bare have brugt ost
    // mysql:dbname=$dbname hvilken database den er lagert i
    // host=$host, hvilken host det er
    // altså vi angiver vores variabler
    // charset giver utf8
    // array: alt hvad man sætter ind i arry'et bliver lavet om til utf8
    $DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUsername, $dbPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
    // -> man vil anvende en metode som høre til $DBH
    // hvis der kommer en fejl vil vi have den udskrevet så vi kan håndtere/Se den
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // hvis der sker en fejl gem fejlen i variablen $e og udskriv den via echo
}catch(PDOException $e){
    echo "Noget gik galt!: <br>";
    echo $e->getMessage( );
    
}
//lave en forbindelse til databasen hvis der sker en fejl gem den i $e og udskriv fejlen
?>