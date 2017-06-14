<?php session_start(); 
 ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <!-- Normalize -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
        <!-- Flexbox grid -->
        <link rel="stylesheet" href="css/flexboxgrid.css">
        <!-- Variabler -->
        <link rel="stylesheet" href="css/variabler.css">
        <!-- Style -->
        <link rel="stylesheet" href="css/style.css"> </head>

    <body>
        <!-- header -->
        <header id="main-header">
            <div class="header-container">
                <div class="row end-xs end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg ">
                    <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
                        <h1>Islændere i DK</h1></div>
                    <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6"><img src="img/medlem-emblem.png" alt="Medlem emblem Logo"> </div>
                </div>
                <div class="row between-xs between-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg margin-bot">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                        <!-- Nav -->
                        <nav id="navbar">
                            <ul>
                                <li><a href="index.php">Forside</a></li>
                                <li><a href="nyheder.php" class="current">Nyheder</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Kontakt</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <!-- Form seach -->
                        <form>
                            <input id="seach" type="text" name="search" placeholder="Search.."> </form>
                    </div>
                </div>
                <!-- Tjek om bruger er logget ind, hvis ja, så skriv "Hej <bruger>" samt log ud knap -->
                <?php 
                            // Tjekker om session er sat og den ikke er tom
                            if(isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>
                    <div class="row  end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
                        <div class="col-xs-12">
                            <h4>Velkommen:<?php echo $_SESSION['username']; 
                            ?></h4>
                            <h5><a href="logout.php?logout=true">Log ud</a></h5></div>
                    </div>
                    <!-- Hvis du ikke er logget ind vises nedståede -->
                    <?php
                            } else {
                        ?>
                        <div class="row  end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
                            <div class="col-xs-12">
                                <!-- Form login -->
                                <form action="checkUser.php" method="post">
                                    <!-- Brugernavn -->
                                    <input class="log-in-box" type="text" id="user" name="formUsername" placeholder="Brugernavn...">
                                    <!-- Password -->
                                    <input class="log-in-box" type="password" id="pass" name="formPassword" placeholder="Password...">
                                    <!-- button login -->
                                    <button type="submit" value="Log ind">Log ind</button>
                                </form>
                            </div>
                        </div>
                        <?php }?>
                            <div class="row end-xs end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg ">
                                <div class="col-xs-12 margin-bot"> <a href="#" alt="Registrer dig her knap">Registrér dig her...</a> </div>
                            </div>
            </div>
        </header>
        <!-- Main -->
        <main id="nyheder">
            <div class="main-container">
                <?php 
                //vises hvis man er logget ind -->
                if(isset($_SESSION['username']) 
                   && 
                   !empty($_SESSION['username'])){ ?>
                    <div class="row ">
                        <div class="col-xs-12">
                            <article>
                                <!-- Form -->
                                <!-- action:"insert.php" Når du har udfyldt din formular og trykket på indsæt hvad skal der så ske, vi ryger over til insert.php-->
                                <form action="insert.php" method="get">
                                    <!-- FormGroup-class /heading -->
                                    <div class="formGroup">
                                        <!-- Label-->
                                        <label for="heading"> Artiklens overskrift her: </label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input type="text" id="heading" name="heading" placeholder="Overskrift her...">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /heading end -->
                                    <!-- -->
                                    <!-- FormGroup-class /headerText -->
                                    <div class="formGroup">
                                        <!-- Label-->
                                        <label for="headerText"> Artiklen subtekst her: </label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input type="text" id="headerText" name="headerText" placeholder="Overskrift sub tekst her...">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /headerText end -->
                                    <!-- -->
                                    <!-- FormGroup-class /imgSrc -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="imgSrc">Billednavn:</label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input class="u-full-width" type="text" id="imgSrc" name="imgSrc" placeholder="Sti til billede uden .jpg">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /imgSrc end -->
                                    <!-- -->
                                    <!-- FormGroup-class /imgAlt -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="imgAlt">Alt tekst til billede:</label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input class="u-full-width" type="text" id="imgAlt" name="imgAlt" placeholder="Alt tekst til billede">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /imgAlt end -->
                                    <!-- -->
                                    <!-- FormGroup-class /articleText -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="articleText">Artiklens tekst her:</label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Textarea -->
                                        <textarea class="u-full-width" id "articleText" name="articleText" placeholder="Tekst her..."></textarea>
                                        <!-- Textarea end -->
                                    </div>
                                    <!-- FormGroup-class /imgSrc end -->
                                    <!-- -->
                                    <!-- Indsæt -->
                                    <input class="button-primary" type="submit" value="insæt">
                                    <!-- Indsæt end -->
                                </form>
                                <!-- Form end -->
                            </article>
                        </div>
                    </div>
                    <?php
                }
                ?>
                        <div class="row">
                            <!-- Col 1 -->
                            <div class="col-xs-12 col-ms-9 col-md-9 col-lg-9">
                                <article>
                                    <?php
                        // inkludere fetchDb.php
                        //tager indhold fra en anden fil (fetchDb.php) og ligger det her ind
                        include "fetchDb.php";
                        
                        ?>
                                </article>
                                <!-- Article -->
                                <article>
                                    <hr>
                                    <h2>Kage</h2>
                                    <p>lorem ipsum lorem ipsum</p> <img src="img/news1.jpg" alt="">
                                    <p>lorem ipsum lorem ipsum</p>
                                </article>
                                <hr>
                                <!-- Article -->
                                <article>
                                    <h2>Nummer 2</h2>
                                    <p>lorem ipsum lorem ipsum lorem ipsum</p> <img src="img/news2.jpg" alt="">
                                    <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum </p>
                                </article>
                                <hr>
                                <!-- Article -->
                                <article>
                                    <h2>Overskrift</h2>
                                    <p>lorem ipsum lorem ipsum</p> <img src="img/news3.jpg" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia labore, error tempora cum at dolorum. Quaerat culpa deleniti, praesentium doloribus? Dicta fuga magnam qui, tempore velit reiciendis saepe ex doloremque!</p>
                                </article>
                            </div>
                            <!-- Col 2 -->
                            <div class="col-xs-0 col-sm-3 col-md-3 col-lg-3">
                                <aside class="d-none" id="sponsorer">
                                    <h4 class="text-center">Vores sopnsorer</h4> <img src="img/sponsor1.jpg" alt=""> <img src="img/sponsor2.jpg" alt=""> <img src="img/sponsor3.jpg" alt=""> <img src="img/sponsor4.jpg" alt=""> </aside>
                            </div>
                        </div>
            </div>
        </main>
        <!-- Footer -->
        <footer id="main-footer">
            <div class="footer-container">
                <div class="row  middle-xs ">
                    <!-- Col 1 -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border-right text-center">
                        <p>Islændere i DK</p>
                        <p>Tågehornvej 32</p>
                        <p>9300 Ølstykke</p>
                        <p>islandere(at)live.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 12345678</p>
                    </div>
                    <!-- Col 2 -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border-right text-center">
                        <p>Mandag-fredag:</p>
                        <p>08:00-13:00</p>
                        <p>Lørdag:</p>
                        <p>09:00-11:00</p>
                    </div>
                    <!-- Col 3 -->
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 "> <img src="img/guy-edit.jpg" alt="Thomas Karse img"> <span>Thomas Karse</span>
                        <br> <img src="img/guy2-edit.jpg" alt="Bjarne Arm img"> <span>Bjarne Arm</span>
                        <br> <img src="img/guy3-edit.jpg" alt="Lisbeth Grøn img"> <span>Lisbeth Grøn</span> </div>
                </div>
            </div>
        </footer>
    </body>

    </html>