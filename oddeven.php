<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #title{
        text-align: center;
      }
      #oddevenform{
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
    <h3 id="title">Check Odd Even Number</h3></br>
    <form id="oddevenform" action="#">
      <label for="text">Enter a number</label></br>
      <input id="getinput" type="text" maxlength="10" style="text-align: center;"></br></br>
      <input type="submit" value="Click Here" onclick="checkOddEven()">
    </form>
    <h4 id="blank"></h4>
    <script>
      function checkOddEven(){
        var num = document.getElementById('getinput').value;
        var res;
        if(num % 2 == 0){
          res = "Even Number";
        } else {
          res = "Odd Number";
        }
        document.getElementById("blank").innerHTML =  res;
      }
    </script>
  </body>
</html>
