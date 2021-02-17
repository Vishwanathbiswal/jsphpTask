<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      tr, td{
        text-align: center;
        border: 1px double black;
        /* cellpadding: 100px; */
        /* cellspacing: 30px; */
      }
    </style>
  </head>
  <body>
    <h3>Table from 1 to 20</h3>
    <table id="tble" >
    <?php
      $row=1; $col=1; $mul=1;
      for($row=1; $row<=10; $row++){
        echo "<tr>";
        for($col=1; $col<=20; $col++){
          // $mul = $col * $row;
          // echo "\t", $mul , "\n";
          echo "<td>". $row * $col. "</td>";
        }
        echo "</tr>";
        // align="left" border="1" cellpadding="3" cellspacing="0"
      }
    ?>
  </table>
  </body>
</html>
