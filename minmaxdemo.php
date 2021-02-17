<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #title{
        text-align: center;
      }
      #minmaxform{
        text-align: center;
      }
      input[type=text]{
        border-radius: 4px;
        border: 2px solid green;
        width: 100px;
      }
      #blank{
        text-align: center;
        font-style: italic;
        color: dodgerblue;
      }
      #maxshow{
        text-align: center;
        color: red;
      }
      #minshow{
        text-align: center;
        color: blue;
      }
    </style>
  </head>
  <body>
    <h3 id="title">Check minimum and maximum</h3></br>
    <form id="minmaxform" action="#">
      <label for="text">Enter the numbers</label></br></br>
      <input id="finput" type="text" maxlength="4" style="text-align: center;">
      <input id="sinput" type="text" maxlength="4" style="text-align: center;">
      <input id="tinput" type="text" maxlength="4" style="text-align: center;"></br></br>
      <input type="submit" value="Click Here" onclick="checkMinMax()">
    </form>
    <h4 id="maxshow"></h4>
    <h4 id="minshow"></h4>
    <script>
      function checkMinMax(){
        var num1 = document.getElementById('finput').value;
        var num2 = document.getElementById('sinput').value;
        var num3 = document.getElementById('tinput').value;
        // var maxRes;
        // if(num1 > num2 && num1 > num3){
        //   maxRes = "First Number is greatest";
        // } else if (num2 > num3 && num2 > num1) {
        //   maxRes = "First Number is greatest";
        // } else if (num1 == num2 == num3) {
        //   maxRes = "All are equal";
        // } else {
        //   maxRes = "Third number is greatest";
        // }
        document.getElementById("maxshow").innerHTML = "Maximum is : " + Math.max(num1, num2, num3);
        document.getElementById("minshow").innerHTML = "Minimum is : " + Math.min(num1, num2, num3);
      }
    </script>
  </body>
</html>
