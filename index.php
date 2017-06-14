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
                                <li><a href="index.php" class="current">Forside</a></li>
                                <li><a href="nyheder.php">Nyheder</a></li>
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
        <main id="index">
            <div class="main-container">
                <div class="row center-xs center-sm center-md center-lg">
                    <!-- Col 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <!-- Article -->
                        <article><img src="img/articleImg1.jpg" alt="Article img 1">
                            <h2>Article 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid soluta placeat at hic cupiditate vel modi, natus omnis. Omnis perspiciatis molestias modi quam deserunt tempora corrupti atque dolorem corporis dolore!</p>
                        </article>
                        <!-- Section -->
                        <section id="dokumenter"> <i class="fa fa-file-text-o  fa-3x"></i>
                            <h3>Dokumenter</h3> </section>
                        <!-- Article -->
                        <article><img src="img/articleImg2.jpg" alt="Article img 2">
                            <h2>Article 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores inventore, molestias fugiat quo blanditiis non vitae maiores nobis, quaerat eaque commodi enim earum corporis est amet accusantium nostrum, ratione sequi.</p>
                        </article>
                    </div>
                    <!-- Col 2 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <!-- Section -->
                        <section id="link"> <i class="fa fa-link fa-3x"></i>
                            <h3>Links</h3> </section>
                        <!-- Article -->
                        <article> <img src="img/articleImg3.jpg" alt="Article img 3">
                            <h2>Article 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias inventore, itaque voluptas perferendis distinctio laboriosam at! Ipsum enim, ut cum? Neque, voluptatibus ipsam eveniet commodi omnis voluptates nemo pariatur alias.</p>
                        </article>
                        <!-- Article -->
                        <article> <img src="img/articleImg4.jpg" alt="Article img 4">
                            <h2>Article 4</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eius deserunt minus eos, earum, quo iusto expedita, nesciunt magni dolore aperiam! Quia assumenda amet ipsam vero expedita beatae, velit non!</p>
                        </article>
                    </div>
                    <!-- Col 3 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <!-- Article -->
                        <article><img src="img/articleImg5.jpg" alt="Article img 5">
                            <h2>Article 5</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, et reiciendis temporibus at laudantium voluptatibus, in repellat itaque saepe, quia dolore eius. Neque cupiditate necessitatibus, placeat ipsa laudantium eligendi eum.</p>
                        </article>
                        <!-- Section -->
                        <section id="marked"> <i class="fa fa-shopping-cart fa-3x"></i>
                            <h3>Marked</h3> </section>
                        <!-- Article -->
                        <article> <img src="img/articleImg6.jpg" alt="Article img 6">
                            <h2>Article </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eius nisi quo, eligendi? Ullam repudiandae veniam officiis porro tempora eaque, natus quasi quae, accusantium, neque quam accusamus earum aperiam. Cumque!</p>
                        </article>
                    </div>
                    <!-- Col 4 -->
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <!-- Section -->
                        <section id="events"> <i class="fa fa-calendar fa-3x"></i>
                            <h3>Events</h3> </section>
                        <!-- Article -->
                        <article> <img src="img/articleImg7.jpg" alt="Article 7 img">
                            <h2>Article 7</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illum itaque dignissimos facilis, dolor eius harum. Dicta quos neque at deserunt dolores, quo veniam nisi. Officiis veniam, commodi saepe maxime.</p>
                        </article>
                        <!-- Article -->
                        <article> <img src="img/articleImg8.jpg" alt="Article 8 img">
                            <h2>Article 8</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum delectus, repellat, suscipit porro, ducimus inventore id nobis, perspiciatis necessitatibus assumenda quas architecto. Sequi dignissimos ex, itaque quod ut voluptas, quae.</p>
                        </article>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer id="main-footer">
            <div class="footer-container">
                <div class="row  middle-xs ">
                    <div class="col-xs-4 border-right text-center">
                        <p>Islændere i DK</p>
                        <p>Tågehornvej 32</p>
                        <p>9300 Ølstykke</p>
                        <p>islandere(at)live.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 12345678</p>
                    </div>
                    <div class="col-xs-4 border-right text-center">
                        <p>Mandag-fredag:</p>
                        <p>08:00-13:00</p>
                        <p>Lørdag:</p>
                        <p>09:00-11:00</p>
                    </div>
                    <div class="col-xs-4 "> <img src="img/guy-edit.jpg" alt="Thomas Karse img"> <span>Thomas Karse</span>
                        <br> <img src="img/guy2-edit.jpg" alt="Bjarne Arm img"> <span>Bjarne Arm</span>
                        <br> <img src="img/guy3-edit.jpg" alt="Lisbeth Grøn img"> <span>Lisbeth Grøn</span> </div>
                </div>
            </div>
        </footer>
    </body>

    </html>