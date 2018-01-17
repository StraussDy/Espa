<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Jérémie Esparel | Etudiant</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Bienvenue</a></li>
                <li><a href="#one">Mes formations</a></li>
                <li><a href="#two">Expériences / Compétences</a></li>
                <li><a href="#three">Contact</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>Jérémie Esparel</h1>
            <p>Just another fine responsive site template designed by HTML5 UP<br />
                and released for free under the Creative Commons.</p>
            <ul class="actions">
                <li><a href="images/CV_CLAUSS_Dylan.pdf" target="_blank" class="button scrolly">Télécharger mon CV</a></li>
            </ul>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2 spotlights">
        <section>
            <a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Sed ipsum dolor</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Feugiat consequat</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Ultricies aliquam</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3 fade-up">
        <div class="inner">
            <h2>Expériences / Compétences</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
            <div class="features">
                <section>
                    <span class="icon major fa-chain"></span>
                    <h3>Technicien système réseau chez APRInfo</h3>
                    <p>mai 2017 - sept. 2017 (5 mois)<br>
                        Installation et maintenance de matériaux informatiques (Linux, Windows...)<br>
                        Réalisation d'un brassage informatique</p>
                </section>
                <section>
                    <span class="icon major fa-code"></span>
                    <h3>Administration de router</h3>
                    <p>Maitrise des protocoles EIGRP, OSPF, RIP, Static, DNS, DHCP</p>
                </section>
                <section>
                    <span class="icon major fa-lock"></span>
                    <h3>Sécurité réseau</h3>
                    <p></p>
                </section>
                <section>
                    <span class="icon major fa-cog"></span>
                    <h3>Autodidacte</h3>
                    <p>Formation à la certification CCNA, Microsoft 70410, CCNP</p>
                </section>
                <section>
                    <span class="icon major fa-desktop"></span>
                    <h3>Administration des postes client</h3>
                    <p></p>
                </section>
                <section>
                    <span class="icon major fa-chain"></span>
                    <h3>Urna quis bibendum</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style1 fade-up">
        <div class="inner">

            <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
                <?php unset($_SESSION['errors']); endif; ?>
            <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été transmis !
                </div>
                <?php unset($_SESSION['success']); endif; ?>

            <h2>Contact</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
            <div class="split style1">
                <section>
                    <form method="post" action="post_contact.php">
                        <div class="field half first">
                            <label for="name">Nom Prénom</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5"></textarea>
                        </div>
                        <ul class="actions">
                            <li><a href="" class="button submit">Envoyer</a></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Address</h3>
                            <span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <a href="mailto:jeremie.esparel@ynov.com">jeremie.esparel@ynov.com</a>
                        </li>
                        <li>
                            <h3>Phone</h3>
                            <span>(000) 000-0000</span>
                        </li>
                        <li>
                            <h3>Social</h3>
                            <ul class="icons">
                                <li><a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9mie-esparel-29754b150/" class="fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li>&copy; Jérémie Esparel. Tous droits réservés</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
