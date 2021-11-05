<?php
$included = true;
include 'medlem.php';

$memberPrefix = "medlem.php?m=";
$medlemmer = $medlemmer ?? array();

?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>ASCII - Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Til toppen</button>
        <script>
            var mybutton = document.getElementById("myBtn");
            
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }

            $().ready(()=>{
                console.log("Ready");
                $("#introCarousel").height( $("#introCarousel").height() );
            });
        </script>

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">ASCII</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#about">Om gruppa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#medlemmer">Medlemmer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#fokus">Mål og Fokus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontakt">Kontakt oss</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>


        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="top-text">
                            <p class="top-title">ASCII</p>
                            <p class="running-text">3 studenter ved Universitet i Agder.</p>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div id="introCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div id="slide-1">
                                        <p class="slide-title">Hvem er vi?</p>
                                        <p class="slide-text">
                                            Vi er en gruppe på tre studenter som alle går siste året på bacheloren
                                            IT og Informasjonssystemer ved Universitetet i Agder. Gjennom studiet har vi
                                            tilegnet oss mye erfaring med å jobbe sammen som gruppe og er vant til å 
                                            måtte samarbeide for å nå målene vi har satt oss. Våre kunnskaper innen 
                                            faget er både sterke og varierte. Vi har kunnskaper innen flere backend- og 
                                            frontend-programmeringsspråk samt design av tjenester og applikasjoner. 
                                            I tillegg har vi erfaring fra videoredigering og medieproduksjon. UiA setter 
                                            det å jobbe nøye med agile rammeverk veldig høyt og som resultat er vi blitt 
                                            veldig vant til å bruke det i våre prosjekter.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div id="slide-2">
                                        <p class="slide-title">Interesser</p>
                                        <p class="slide-text">
                                            Vår gruppe brenner for å kunne bruke våre kunnskaper og erfaringer på reelle 
                                            prosjekter ute i arbeidslivet og tar enhver utfordring på strak arm. Vi har et bredt
                                            spekter av interesser i gruppa, blant annet front- og backendutvikling, UX/UI design
                                            og medieproduksjon. 
                                        </p>                                    
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div id="slide-3">
                                        <p class="slide-title">Ønsker</p>
                                        <p class="slide-text">
                                            Våre ønsker er å danne et godt samarbeid med en bedriftspartner og sammen jobbe
                                            mot et resultat i form av et produkt eller en tjeneste, eller annet bidrag. 
                                            Vi ønsker også å utvikle oss selv i samarbeidet med en eventuell samarbeidsparter og
                                            satser på å sitte igjen med mye god lærdom og nye erfaringer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#introCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#introCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div> 
                </div>
            </div>
        </section>

        <section id="medlemmer">
            <div class="container-fluid" id="medlem-container">
                <div id="member-top">
                    <h1 id="info-title">Medlemmer</h1>
                    <h1 id="info-text"><span>Klikk på et medlem for å bli bedre kjent</span></h1>
                </div>

                <div class="row m-3">

                                        <div class="col members" style="">
                            <!--<div class="member-box" id="member-0">
                                <img class="img-fluid" src="images/tor_inge_crop.png" alt="Tor Inge">
                                <h1 class="member-title">Tor Inge</h1>
                            </div>-->

                        <div class="card" style="width: 12rem; margin: auto;">
                            <a href="./toringe" class="card-link stretched-link">
                                <img class="card-img-top" src="images/tor_inge_crop.png" alt="Tor Inge">
                            </a>
                                <h5 class="card-title member-title">Tor Inge</h5>
                        </div>
                    </div>

                                        <div class="col members" style="">
                            <!--<div class="member-box" id="member-1">
                                <img class="img-fluid" src="images/anders.jpg" alt="Anders">
                                <h1 class="member-title">Anders</h1>
                            </div>-->

                        <div class="card" style="width: 12rem; margin: auto;">
                            <a href="./anders" class="card-link stretched-link">
                                <img class="card-img-top" src="images/anders.jpg" alt="Anders">
                            </a>
                                <h5 class="card-title member-title">Anders</h5>
                        </div>
                    </div>

                                        <div class="col members" style="">
                            <!--<div class="member-box" id="member-2">
                                <img class="img-fluid" src="images/espen_crop.PNG" alt="Espen">
                                <h1 class="member-title">Espen</h1>
                            </div>-->

                        <div class="card" style="width: 12rem; margin: auto;">
                            <a href="./espen" class="card-link stretched-link">
                                <img class="card-img-top" src="images/espen_crop.PNG" alt="Espen">
                            </a>
                                <h5 class="card-title member-title">Espen</h5>
                        </div>
                    </div>

                                    </div>
            </div>
        </section>

        <section id="mål">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p id="mål-title">Mål og Fokus</p>
                        <p id="mål-text">
                            Ved vårt bachelorprosjekt har vi som mål å kunne jobbe med og utvikle et praktisk og nyttig produkt ved bruk av gode prosesser og arbeidsmetoder. Vi er en gruppe som satser høyt og ønsker 
                            en bedrift hvor vi kan utfordre oss og sette våre kunnskaper på spissen. Samtidig har vi også en sterk målsetting om å tilegne oss erfaring og læring fra prosjektet som vi kan bruke videre i våre 
                            karrierer. For oss er det viktig med et solid samarbeid med de ansatte i bedriften for å utvikle oss selv, men også for å sikre et godt og trivelig arbeidsmiljø.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontakt">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 footer-title">
                        <h1 id="footer-title">Kontakt oss</h1>
                    </div>
                    <div class="col-md-6 footer-text">
                        <h1 id="footer-text">Anders Korsnes: andersko@uia.no</h1>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
