<?php

function Palmares(): string
{
    $desc = "1 Mondial des clubs: 2010 (Inter)";
    $desc .= " - 1 Coupe Intercontinentale: 1998 (Real Madrid)";
    $desc .= " - 3 Champions League: 2005/06, 2008/09 (FC Barcelone), 2009/10 (Inter)";
    $desc .= " - 1 Scudetto: 2009/10 (Inter)";
    $desc .= " - 3 Championnats d’Espagne: 2004/05, 2005/06, 2008/09 (FC Barcelone)";
    $desc .= " - 2 Coupes d’Italie: 2009/10, 2010/11 (Inter)";
    $desc .= " - 2 Coupes d’Espagne: 2002/03 (Mallorca) 2008/09 (FC Barcelone)";
    $desc .= " - 1 Supercoupe d’Italie: 2010";
    $desc .= " - 2 Supercoupes d’Espagne: 2004/05, 2005/06 (FC Barcelone)";
    $desc .= " - 2  CAN: 2000, 2002 (Cameroun)";
    $desc .= " - Médaillé d’or aux J.O: 2000 (Cameroun)";

    return $desc;
}

function displayImage(string $width, string $height, string $justify, array $imageList): string
{
    $string = "";
    foreach ($imageList as $img) {
        $string .= '<article class="' . $width . " " . $height . " " . $justify . '">';
        $string .= '<article class="' . $img . '">';
        $string .= '</article></article>';
    }

    return $string;
}


function displayImageText(string $width, string $height, string $widthT, string $heightT, string $justify, array $imageTextList): string
{
    $string = "";

    foreach ($imageTextList as $img => $text) {
        $string .= '<article class="' . $width . " " . $height . " " . $justify . '">';
        $string .= '<article class="' . $img . '"></article></article>';
        $string .= '<article class="' . $width . " " . $height . " " . $justify . '">';
        $string .= '<article class="' . $widthT . " " . $heightT . " " . "h-center" . '">';
        $string .= '<article><h2>' . $text . '</h2>';
        $string .= '</article></article></article>';
    }

    return $string;
}
