<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #title{
        text-align: center;
      }
      #leapyrform{
        text-align: center;
      }
      input[type=text]{
        border-radius: 4px;
        border: 2px dotted tomato;
      }
      #blank{
        text-align: center;
        font-style: italic;
        color: dodgerblue;
      }
    </style>
  </head>
  <body>
    <h3 id="title">Check Leap Year</h3></br>
    <form id="leapyrform" action="#">
      <label for="text">Enter the year</label></br>
      <input id="getinput" type="text" maxlength="4" style="text-align: center;"></br></br>
      <input type="submit" value="Click Here" onclick="checkLeapYear()">
    </form>
    <h4 id="blank"></h4>
    <script>
      function checkLeapYear(){
        var num = document.getElementById('getinput').value;
        var res;
        if(num % 400 == 0){
          res = "Leap Year";
        } else if (num % 100 == 0) {
          res = "Not a leap year";
        } else if (num % 4 == 0) {
          res = "Leap Year";
        } else {
          res = "Not a leap year";
        }
        document.getElementById("blank").innerHTML = "Entered year is a : " + res;
      }
    </script>
  </body>
</html>
