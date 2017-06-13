<?php
// henter connect.php
// require_once : Den skal hente connect.php ellers virker det ikke, med _once henter kun én gang 
require_once "connect.php";

// vælger alt fra articles og udføre det / henter article tabellen
$statement = $DBH->prepare("SELECT * FROM articles");
$statement->execute();

// laver en variabel $row som indenholder:
//FETCH_ASSOC betyder: at det bliver hentet som assiautaiv array, hvilket gør at det kommer ud i key value pair, [imgSrc] er key og billedet er value. altså der er en beskrivelse(key) og værdi ( value)
// fetch hiver alt ud som ligger inde i $statement
// derefter går ind i loopet og udskriver det
// <?php echo $row['imgSrc'] indsætter det som står inde i vores database
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
        <hr>
        <h2><?php echo $row['heading'] ?></h2>
        <p>
            <?php echo $row['headerText'] ?>
        </p> <img src="img/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">
        <p class="date">
            <?php echo $row['time'] ?>
        </p>
        <p>
            <?php echo $row['articleText'] ?>
        </p>
    </article>
    <?php    
}
?>