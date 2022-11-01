<?php
/*
generer un nombre n et par le biais de ce nbre, faire un trangle rectangle et isocèle
de nombre n de ligne et n colonne (n ligne et n colonne forment l'angle droit) 
*/
function etiole(int $x):void
{
    for($i=1;$i<=$x;$i++){
        for($j=1;$j<=$i;$j++){
            echo("*");
        }
        echo("<br>");
    }
    
}

$r=etiole(10);
echo("$r <br>");

// function etiole(int $x):void
// {
//     $i=1;
//     while($i<=$x){
//         $j=1;
//         while($j<=$i){
//             echo("*");
//         }
//         $j++;
//         echo("<br>");
//     }
//     $i++;
// }
// $r=etiole(5);
// echo($r);



?>




