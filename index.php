<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script>
    function getRandomImage(){
    var im = Math.floor(Math.random()*999);  
    document.getElementById("result").innerHTML = '<img src=group1/images/'+im+'.jpeg style="width:600px;height:600px;">'; 
    document.getElementById("im").value = im;
    }
    </script>

<style>
img {
  width: 100%;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}



div label input {
   margin-right:100px;
}
body {
    font-family:sans-serif;
}



</style>

</head>

<body onload = "getRandomImage()">
<!-- <input type="checkbox" class="hidden" name="cb" id="cb">
<label for="cb">text</label> -->


<h1>Galaxy Aquarium</h1>

<a href="classify_home.php">Classify</a>
<a href="tutorial.asp">Tutorial</a>
<a href="results.php">Results</a>


    
</body>
</html>
