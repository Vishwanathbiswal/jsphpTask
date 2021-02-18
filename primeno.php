<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prime Number</title>
    <style>
      #main_container{
        text-align: center;
      }
      input[type=text]{
        border: 2px dashed tomato;
        border-radius: 2px;
      }
      #displayOutput{
        text-align: center;
        color: green;
      }
    </style>
  </head>
  <body>
    <div id="main_container">
      <h2>Check Prime Number</h2>
      <form id="prime_form" action="#">
        Please enter a number </br>
        <input id="getInput" type="text" style="text-align:center;"></br></br>
        <input id="sbt_btn" type="submit" value="Click Here" onclick="primeNo()">
      </form>
    </div>
    <h3 id="displayOutput"></h3>
    <script>
      function primeNo(){
        var i;
        var flag=0;
        var output;
        var input = document.getElementById("getInput").value;
        for(i=2; i<=input/2; i++){
          if(input % i == 0){
            flag = 1;
            break;
          }
        }
        if(input == 1){
          output = document.getElementById('displayOutput').innerHTML = "Neither prime nor composite";
        }
        else if (flag == 1) {
          output = document.getElementById('displayOutput').innerHTML = "Composite Number";
        }
        else {
          output = document.getElementById('displayOutput').innerHTML = "Prime Number";
        }
        document.getElementById("displayOutput").innerHTML =
        "You have entered : " + input + "<br>" + "<br>" + " and it is " + output;
      }
    </script>
  </body>
</html>
