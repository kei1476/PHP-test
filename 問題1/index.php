<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <table>
    <tr><?php for($i=1;$i<10;$i++){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=2;$i<19;$i+=2){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=3;$i<28;$i+=3){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=4;$i<37;$i+=4){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=5;$i<46;$i+=5){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=6;$i<55;$i+=6){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=6;$i<55;$i+=6){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=7;$i<64;$i+=7){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=8;$i<73;$i+=8){echo "<th>{$i}</th>";}?></tr>
    <tr><?php for($i=9;$i<82;$i+=9){echo "<th>{$i}</th>";}?></tr>
   </table> 
</body>
</html>