<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      for($i=1; $i<=4; $i++){
        for($sp=1; $sp<=4-$i; $sp++){
          echo " &nbsp ";
        }
        for($j=1; $j<=(2*$i-1); $j++){
          echo "*";
        }
        echo "</br>";
      }
    ?>
  </body>
</html>
