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
      #output{
        text-align: center;
        font-style: italic;
        color: dodgerblue;
      }
      #blank{
        text-align: center;
        color: red;
      }
    </style>
  </head>
  <body>
    <h3 id="title">Check minimum and maximum</h3></br>
    <form id="minmaxform" action="#">
      <label for="text">Enter the numbers</label></br></br>
      <input id="finput" type="text" maxlength="4" placeholder="first number" style="text-align: center;">
      <input id="sinput" type="text" maxlength="4" placeholder="second number" style="text-align: center;">
      <input id="tinput" type="text" maxlength="4" placeholder="third number" style="text-align: center;"></br></br>
      <input type="submit" value="Click Here" onclick="checkMinMax()">
    </form>
    <div id="output">
      <p id="showfirst"></p>
      <p id="showsec"></p>
      <p id="showthird"></p>
    </div>
    <h4 id="blank"></h4>
    <script>
      function checkMinMax(){
        var num1 = parseInt(document.getElementById('finput').value);
        var num2 = parseInt(document.getElementById('sinput').value);
        var num3 = parseInt(document.getElementById('tinput').value);
        var max;
        alert(num1);
        alert(num2);
        alert(num3);
        document.getElementById("showfirst").innerHTML = "First number is : " + num1;
        document.getElementById("showsec").innerHTML = "Second numbr is: " + num2;
        document.getElementById("showthird").innerHTML = "Third number is : " + num3;
        if (num1 > num2 && num1 > num3){
          // alert("First number is the greatest");
          max = "First number is the greatest";
        } else if (num2 > num1 && num2 > num3){
          // alert("Second number is the greatest");
          max = "Second number is the greatest";
        } else if (num3 > num1 && num3 > num1){
          // alert("All numbers are equal");
          max = "Third number is the greatest";
        } else {
          // alert("Third number is greatest");
          max = "All the numbers are equal";
        }
        document.getElementById("blank").innerHTML = max;
      }

        // var max;
        // var check = /^[0-9]+$/;
        // if(num1 || num2 || num3 == ""){
        //     alert("Please enter all three numbers");
        // } else if(num1.match(check) && num2.match(check) && num3.match(check)){
        //     if(num1 > num2 && num1 > num3){
        //       max = "First Number is greatest";
        //     } else if (num2 > num3 && num2 > num1) {
        //       max = "First Number is greatest";
        //     } else if (num1 == num2 == num3) {
        //       max = "All are equal";
        //     } else {
        //       max = "Third number is greatest";
        //     }
        //     // document.getElementById("blank").innerHTML = max;
        //   } else {
        //     alert('Please input integers only');
        //     return false;
        //     }
        //   document.getElementById("blank").innerHTML = max;
        // }
    </script>
  </body>
</html>
