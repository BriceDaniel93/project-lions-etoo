<?php require_once("src/function.php"); ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style/style.css" rel="stylesheet" type="text/css">
    <link href="Style/mobile.css" rel="stylesheet" media="screen and (max-width: 900px)">
    <link href="Style/tablet.css" rel="stylesheet" media="screen and (min-width: 901px) and (max-width: 1400px)">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700" rel="stylesheet">

    <title>Premier projet Wild Code School</title>
</head>

<body>

    <main>

        <?php require_once("header.php"); ?>

        <!-- Frame avec comme taille la window -->

        <section class="frame-main">

            <!-- Section principale composé d'un grid de 4 sections-->

            <section class="grid2r2c h-100pct">

                <!-- Frame globale palmares - Grid 1/4-->

                <section id="section_palmares" class="w-100pct h-100pct w-center h-center">

                    <!-- Frame onglet & logo & bandeau 90% -->
                    <section class="w-90pct h-90pct">

                        <!-- Frame onglet palmares -->
                        <section class="w-30pct h-10pct w-center h-center onglet">
                            <article>
                                <h1>PALMARES</h1>
                            </article>
                        </section>

                        <!-- Frame logo &  bandeau -->
                        <section class="frame-palmares-parcours w-100pct h-90pct">

                            <!-- Frame grid logo -->
                            <section class="grid2r3c h-90pct w-100pct">

                                <?php
                                $imageList = ["img-coppaitalia", "img-UAE", "img-championL", "img-copparey", "img-mali", "img-JO"];
                                echo displayImage("w-100pct", "h-100pct", "w-center h-center", $imageList);
                                ?>


                            </section>

                            <!-- bandeau affichant les resultats -->
                            <section class="w-100pct h-10pct">

                                <section class="bandeau-palmares">
                                    <article>

                                        <h1><?= palmares(); ?></h1>

                                    </article>
                                </section>

                            </section>

                        </section>

                    </section>

                </section>


                <!-- Frame globale formations - Grid 2/4-->


                <section id="section_formations" class="w-100pct h-100pct w-center h-center">

                    <!-- Frame onglet & logo & test 90% -->
                    <section class="w-90pct h-90pct">

                        <!-- Frame onglet formations -->
                        <section class="w-30pct h-10pct w-center h-center onglet">
                            <h1>FORMATIONS</h1>
                        </section>

                        <!-- Frame logo & text -->
                        <section class="frame-formations-langues w-100pct h-90pct">

                            <!-- Frame grid logo & text -->
                            <section class="grid3r2c h-100pct w-100pct">

                                <?php
                                $imageTextList = [
                                    "img-cadets" => "Débute avec les Cadets camerounais",
                                    "img-kadji" => "La Kadji Sport Academies - centre de formation sportive",
                                    "img-hac" => "Fait ses premières armes avec le football club du Havre",
                                ];
                                echo displayImageText("w-100pct", "h-100pct", "w-90pct", "h-90pct", "w-center h-center", $imageTextList);
                                ?>

                            </section>
                        </section>

                    </section>
                </section>


                <!-- Frame globale parcours - Grid 3/4-->

                <section id="section_parcours" class="w-100pct h-100pct w-center h-center">

                    <!-- Frame onglet & logo & test 90% -->
                    <section class="w-90pct h-90pct">

                        <!-- Frame onglet parcours -->
                        <section class="w-25pct h-10pct w-center h-center onglet">
                            <h1>PARCOURS</h1>
                        </section>

                        <!-- Frame logo & text -->
                        <section class="frame-palmares-parcours w-100pct h-90pct">

                            <!-- Frame grid logo & text -->
                            <section class="grid3r3c h-100pct w-100pct">

                                <?php
                                $imageList = ["img-intermilan", "img-fcb", "img-rcd"];
                                echo displayImage("w-100pct", "h-100pct", "w-center h-center", $imageList);
                                ?>

                                <article class="w-100pct h-100pct ">
                                    <h3 class="w-center">INTER MILAN</h3>
                                    <h3 class="w-center">DIVISION A</h3>
                                    <h3 class="w-center">2011 - 2009</h3>
                                </article>

                                <article class="w-100pct h-100pct">
                                    <h3 class="w-center">FCB</h3>
                                    <h3 class="w-center">DIVISION 1</h3>
                                    <h3 class="w-center">2009 - 2004</h3>
                                </article>

                                <article class="w-100pct h-100pct">
                                    <h3 class="w-center">RCB</h3>
                                    <h3 class="w-center">DIVISION 1</h3>
                                    <h3 class="w-center">2004 - 1999</h3>
                                </article>


                                <article class="w-100pct h-100pct w-center ">
                                    <article class="w-25pct h-100pct img-ballon"></article>
                                    <h4 class="w-center h-center ">77 buts</h4>
                                </article>

                                <article class="w-100pct h-100pct">
                                    <section class="w-100pct h-100pct w-center">
                                        <section class="w-25pct h-100pct img-ballon"></section>
                                        <h4 class="w-center h-center">37 buts</h4>
                                    </section>

                                </article>

                                <article class="w-100pct h-100pct">
                                    <article class="w-100pct h-100pct w-center">
                                        <article class="w-25pct h-100pct img-ballon"></article>
                                        <h4 class="w-center h-center">33 buts</h4>
                                    </article>

                                </article>

                            </section>
                        </section>

                    </section>

                </section>



                <!-- Frame globale langues - Grid 4/4-->

                <section id="section_langues" class="w-100pct h-100pct w-center h-center">

                    <!-- Frame onglet & logo & test 90% -->
                    <section class="w-90pct h-90pct">

                        <!-- Frame onglet langues -->
                        <section class="w-25pct h-10pct w-center h-center onglet">
                            <h1>LANGUES</h1>
                        </section>

                        <!-- Frame logo & text -->
                        <section class="frame-formations-langues w-100pct h-90pct">

                            <!-- Frame grid logo & text -->
                            <section class="grid2r3c h-100pct w-100pct">

                                <?php
                                $imageList = ["img-francais", "img-anglais", "img-espagnol"];
                                echo displayImage("w-100pct", "h-100pct", "w-center h-bottom", $imageList);
                                ?>

                                <article class="w-100pct h-100pct w-center h-center">
                                    <h3>FRANCAIS</h3>
                                </article>

                                <article class="w-100pct h-100pct w-center h-center">
                                    <h3>ANGLAIS</h3>
                                </article>

                                <article class="w-100pct h-100pct w-center h-center">
                                    <h3>ESPAGNOL</h3>
                                </article>


                            </section>
                        </section>

                    </section>

                </section>

            </section>

        </section>

        <?php require_once("footer.php"); ?>

    </main>

</body>

</html>