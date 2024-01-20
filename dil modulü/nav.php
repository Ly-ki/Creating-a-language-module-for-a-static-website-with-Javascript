<?php
$urlNew = 'https://' . $_SERVER['SERVER_NAME'];

switch ($_GET['lang']) {
    case 'en':
        $urlData = "lang=en";
        $urlNewData = "?lang=tr";
        $urlText = "<img width='25' height='25' src='https://img.icons8.com/color/25/turkey.png' alt='turkey'/>";
        $urlTextNew = "<img width='25' height='25' src='https://img.icons8.com/color/25/great-britain.png' alt='great-britain'/>";
        break;
    case 'tr':
        $urlData = "lang=tr";
        $urlNewData = "?lang=en";
        $urlText = "<img width='25' height='25' src='https://img.icons8.com/color/25/great-britain.png' alt='great-britain'/>";
        $urlTextNew = "<img width='25' height='25' src='https://img.icons8.com/color/25/turkey.png' alt='turkey'/>";
        break;

    default:
        $urlData = "lang=tr";
        $urlNewData = "?lang=en";
        $urlText = "<img width='25' height='25' src='https://img.icons8.com/color/25/great-britain.png' alt='great-britain'/>";
        $urlTextNew = "<img width='25' height='25' src='https://img.icons8.com/color/25/turkey.png' alt='turkey'/>";
        break;
}

//Menü link kontrolü