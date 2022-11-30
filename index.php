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

.flex-container {
  display: flex;
  background-color: DodgerBlue;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
}
div label input {
   margin-right:100px;
}
body {
    font-family:sans-serif;
}

#ck-button {
    margin:1px;
    background-color:#EFEFEF;
    border-radius:10px;
    border: solid #D0D0D0;
    overflow:auto;
    float:left;
    width: 200px;
    height: 100px;
    font-size: 2vw;
    vertical-align: middle;
    cursor: pointer;
}

#ck-button a{display: inline-block;}

#ck-button label {
    float:center;
    width:4.0em;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
}

#ck-button label input {
    position:absolute;
    top:-20px;
    font-size: 20vw;
}

#ck-button input:checked + span {
    background-color:#911;
    color:#fff;
}

#ck-button:hover {
    background:red;
}

</style>

</head>

<body onload = "getRandomImage()">
<!-- <input type="checkbox" class="hidden" name="cb" id="cb">
<label for="cb">text</label> -->


<h1>Galaxy Aquarium</h1>

<a href="classify.php">Classify</a>
<a href="tutorial.asp">Tutorial</a>
<a href="results.php">Results</a>


    
</body>
</html>
