<?php

// $vendomenormal = 16;
// $reduction = 3;
// $styx = 20;
// // $prixreduit = $prix - $prix * 0.08;
// print("Le prix d'un billet normal est " . $vendomenormal . " euros.\n");
// print("Avec la reduction, le billet coute " . ($vendomenormal - $reduction) . " euros.\n");
// print("La différence de prix entre la Vendome et la Styx est " . ($vendomenormal-$styx) . " euros.");

##################################

// $long = (int)readline("What is the length (in centimetres) of the room? : ");
// $larg = (int)readline("What is the width (in centimetres) of the room? : ");

// if ($long == $larg){
//     print("The room is square!");
// }

// print("The total area of the room is " . ($long * $larg) . "square cm, or " . ($long * $larg)/10000 . "square m");

####################################

// $temp = (int)readline("What is the temperature in the room? : ");

// if($temp >=15 AND $temp <=25){
//     print("It's nice in here.");
// }
// elseif($temp > 25){
//     print("It's too hot!  Turn on the air conditioning!");
// }
// else{
//     print("It's freezing!  Turn the heat on!");
// }
// // **** prof prefers that we go from low to high splits or from high to low (to not miss anything.)
// //if temp < 15 froid, elseif temp < 25 bon, else chaud
#######################################

$samsung = 1000;
$iphone = 1500;
$huawei = 800;

$qtesamsung = (int)readline("How many samsung galaxy S24s do you want to order? : ");
$qteiphone = (int)readline("How many iphone 15s do you want to order? : ");
$qtehuawei = (int)readline("How many huawei p60 pros do you want to order? :");

$totalsamsung = ($qtesamsung*$samsung);
$totaliphone = ($qteiphone*$iphone);
$totalhuawei = ($qtehuawei*$huawei);
print ("running ttl sam :" . $totalsamsung);
print ("running ttl iph :" . $totaliphone);
print ("running ttl hua :" . $totalhuawei);

## checking to see if more than 5 were ordered of any type and applying reduction ##
if ($qtesamsung > 5){
    $totalsamsung = $totalsamsung - ($totalsamsung * 0.1); // ou $totalsamsung *= 0.9;
    print("ttl sam" . $totalsamsung);
}
if ($qteiphone > 5){
    $totaliphone = $totaliphone - ($totaliphone * 0.1);
    print("ttl iph" . $totaliphone);
}
if ($qtehuawei > 5){
    $totalhuawei = $totalhuawei - ($totalhuawei * 0.1);
    print("ttl hua" . $totalhuawei);
}
## first order subtotal 
$subtotal = ($totalsamsung + $totaliphone + $totalhuawei);
print ("subttl all: " . $subtotal);


$grandtotal = 0;

## checking if person is loyalty member to apply reduction to existing subtotal
$loyalty = (int)readline("Do you have a loyalty card? Enter 1 for yes, or 2 for no. ");

if ($loyalty ==1){
    $grandtotal = $subtotal - ($subtotal*0.2);
}
else{
    $grandtotal = $subtotal;
}
## checking delivery hope for application or not of delivery charge (depending on total of original order)
$delivery = (int)readline("Enter 0 if you want to pick up your order instore, enter 1 if you want it to be delivered. :");
#$livraison = readline("\nLivrer à la maison?");
#if (livraison == "oui"){}

if (($totalsamsung+$totaliphone+$totalhuawei) <= 3000 AND $delivery == 1){
    $subtotal = $subtotal*1.02;
}
elseif (($totalsamsung+$totaliphone+$totalhuawei) > 3000 AND $delivery == 1){
    $delivery = 0;
}
else{$delivery = 0;
}

## declaration of grand total (with affirmation of order parameters)
print ("delivery = " . $delivery);
print ("loyalty? " . $loyalty);
print("Your total to pay is :" . $grandtotal . ".");
