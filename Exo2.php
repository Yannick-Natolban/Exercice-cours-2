<!-- /*
generer un nbre de n>0. afficher la table de multiplication de n jusqu'a 10
le faire dans une table html (les tableaux dis-donc!)
*/ -->
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>

    
</head>
<body>

<?php
Function multiplication():void{
echo' <style>
table,th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
    width: 300px;
    text-align:center;
    margin-left: 40%;
    margin-top: 1%;
    
   
  

  }
</style>
';
$n=rand(1,10);
for($i=1;$i<=10;$i++){
    $r=$n*$i
?>

<table>
<tr>
<td><?php echo("$n   *   $i") ?></td>
<td><?php echo("$r" )?></td>
</tr>
</table>

<?php
}
}
$s=multiplication();

?>

</body>
</html>