<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
    echo gettype($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd = " ";
}

function korting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd){
        case $leeftijd <= 15: 
        echo "1 euro";
        break;
        case 16:
        echo "16 cent";
        break;
        case 17:
        echo "17 cent";
        break;
        case 18:
        echo "18 cent";
        break;
        case 19:
        echo "19 cent";
        break;
        default:
        echo "geen korting";
    }
}
?>