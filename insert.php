<?php
// laver variabel, og gemmer den værdi som er sendt over i insert.php fra formlen i index.php
$heading = $_GET['heading'];
$imgSrc = $_GET['imgSrc'];
$imgAlt = $_GET['imgAlt'];
$articleText = $_GET['articleText'];
$headerText = $_GET['headerText'];
$time = time(); // php funktion, angiver time, hvor mange sek der er gået fra 1970 og til nu, som vi kan lave om til en date, vi har ikke skrevet det i formlen så man ikke selv skal skrive den ned, når time gør den selv.

// laver en forbindelse over til connect.php
require_once "connect.php";
// laver en variaben $statement, og indsætter vores $DHB
// insert into : smider vores til værdier ind i article (imgSrc ..) tager de værdier ind u article
// value(?..) er placeholders, så folk ikke kan skrive direkt ind i databasen
$statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading,  time, articleText, headerText) values(?, ?, ?, ?, ?, ?)");
// køre en ny metode på $statement, som siger, ved det første ? skal du tage værdien ved imgSrc og sætte ind
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $articleText);
$statement->bindParam(6, $headerText);
$statement->execute();

//efter execute kommer tilbage til index.php
header("location: nyheder.php");
?>