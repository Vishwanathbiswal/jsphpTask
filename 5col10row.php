<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
        <?php
          $sindex = 1;
          while ($sindex <= 100) {
            echo "$sindex  ";
            if($sindex % 5 == 0){
              echo "</br>";
            }
            // echo "$sindex";
            $sindex++;
          }
        ?>
    </table>
  </body>
</html>
