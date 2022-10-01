<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style/quisuisje.css" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <?php require_once("header.php"); ?>

    <main>

        <!-- Section principale composé d'un grid de 4 sections-->
        <section class="grid-main debug">

            <!-- 1ere section pour les palmares-->
            <section class="grid-palmares-frame">

                <article>
                    <p class="onglet">PALMARES</p>
                </article>

                <!-- Frame principale des palmares -->
                <section class="frame-palmares-parcours ">

                    <!-- Grid des 6 logos  -->
                    <section class="grid-palmares-logo">
                        <article class="grid-coppaitalia"></article>
                        <article class="grid-UAE"></article>
                        <article class="grid-championL"></article>
                        <article class="grid-copparey"></article>
                        <article class="grid-mali"></article>
                        <article class="grid-JO"></article>
                    </section>


                    <section class="titre-palmares">
                        <article>
                            <h1>2 Coupes d’Italie: 2009/10, 2010/11 (Inter)</h1>
                            <!-- &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            3 Champions League: 2005/06, 2008/09 (FC Barcelone), 2009/10 (Inter)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            3 Championnats d’Espagne: 2004/05, 2005/06, 2008/09 (FC Barcelone)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            2 Coupes d’Italie: 2009/10, 2010/11 (Inter)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            2 Coupes d’Espagne: 2002/03 (Mallorca) 2008/09 (FC Barcelone)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            1 Supercoupe d’Italie: 2010
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            2 Supercoupes d’Espagne: 2004/05, 2005/06 (FC Barcelone)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            2 CAN: 2000, 2002 (Cameroun)
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            Médaillé d’or aux J.O: 2000 (Cameroun)
                        </h3> -->
                        </article>
                    </section>

                </section>

            </section>


            <!-- Formations  -->
            <div class="grid-main-formation">
                <h3 class="onglet">FORMATIONS</h3>


                <div class="frame-formations-langues">


                    <div class="grid-formations">

                        <div class="grid-formations-cadets-logo"></div>
                        <div class="grid-formations-cadets-text">
                            <h2>Débute avec les Cadets camerounais</h2>
                        </div>

                        <div class="grid-formations-kad-logo"></div>

                        <div class="grid-formations-kad-text">
                            <h2>La Kadji Sport Academies - centre de formation sportive</h2>
                        </div>

                        <div class="grid-formations-hac-logo"></div>

                        <div class="grid-formations-hac-text">
                            <h2>Fait ses premières armes avec le footbal club du Havre</h2>
                        </div>


                    </div>

                </div>

            </div>

            <!-- Parcours  -->
            <div class="grid-main-parcours">
                <h3 class="onglet">PARCOURS</h3>

                <div class="frame-palmares-parcours">

                    <div class="grid-parcours">
                        <div class="grid-img-parcours-intermilan"></div>
                        <div class="grid-img-parcours-fcb"></div>
                        <div class="grid-img-parcours-rcd"></div>

                        <div class="grid-parcours-club">
                            <h1>INTER MILAN</h1>
                            <h2>DIVISION A</h2>
                            <h2>2011 - 2009</h3>
                        </div>

                        <div class="grid-parcours-club">
                            <h1>FCB</h1>
                            <h2>DIVISION 1</h2>
                            <h2>2009 - 2004</h3>
                        </div>

                        <div class="grid-parcours-club">
                            <h1>RCB</h1>
                            <h2>DIVISION 1</h2>
                            <h2>2004 - 1999</h3>
                        </div>

                        <div class="grid-parcours-buts">
                            <div class="grid-parcours-buts-ballon"></div>
                            <h2>77 buts</h2>
                        </div>

                        <div class="grid-parcours-buts">
                            <div class="grid-parcours-buts-ballon"></div>
                            <h2>37 buts</h2>
                        </div>

                        <div class="grid-parcours-buts">
                            <div class="grid-parcours-buts-ballon"></div>
                            <h2>33 buts</h2>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Langes  -->
            <div class="grid-main-langues debug">
                <h3 class="onglet">LANGUES</h3>

                <div class="frame-formations-langues">
                    <div class="grid-langues">

                        <div class="container-center debug1">
                            <div class="grid-langue-francais-logo"></div>
                        </div>

                        <div class="container-center">
                            <div class="grid-langue-anglais-logo"></div>
                        </div>

                        <div class="container-center">
                            <div class="grid-langue-espagnol-logo"></div>
                        </div>

                        <div class="container-center debug1">
                            <h1>FRANCAIS</h1>
                        </div>

                        <div class="container-center debug1">
                            <h1>ANGLAIS</h1>
                        </div>

                        <div class="container-center debug1">
                            <h1>ESPAGNOL</h1>
                        </div>


                    </div>
                </div>

            </div>

        </section>

    </main>

    <?php require_once("footer.php"); ?>

</body>

</html>