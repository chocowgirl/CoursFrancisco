<?php

// while (true){
//     print("\n It's truuuuuee!!!!");
// }  note, ctrl+c to get out of the infinite loop

// $count = 10;
// while ($count != -1){
//     print ($count);
//     print ("\n");
//     $count = $count-1; //ou count --;
// }
// if (5-1 == 4){
//     print("Blastoff!");
// }

// while ($count <=10){
//     print("\n" . $count);
//     $count +=1;
// }
#The above four lines are the same as below in effect
// for ($count = 1; $count <=10; $count++){
//     print("\n" . $count);
// }

// for ($count = 30; $count <=50; $count +=1){
//     print ("-" . $count);
// }


$a =5;
$b = 2;
print("la difference est " . ($a-$b) . " euros"); // to show how to get the result of the equation to show in a concatenation situation
print("\n".$a = $b."\n");// to show that we have accidentally reaffected the value of $a to the value of $b so now they are the same value! (This is important for the below lines of code)
print("\n".$a==$b."\n"); // to show that in this case a true returns, and so we are shown a 1
print("\n".$a!=$b.""); // to show that in this case a false returns, and so we are shown nothing!
print("\n" . $a+$b . " is the new sum of a and b."); //because both a and be are equal to 2, the sum is 4