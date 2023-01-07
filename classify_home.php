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
<!-- Link back to home -->
<a href="index.php">Home</a> <br> <br> <br>



<a href="classify_8278.php">8278</a>

<?php
        #get number classified so far: $number_done
        $path = dirname(__FILE__).'/tracts/8278/' ;
        $filename=$path."/done.txt";
        $list2= file_get_contents($filename); 
        $arr = preg_split('/\s+/', $list2);
        $number_done = count($arr);
        #get total number: $number_total
        $directory = dirname(__FILE__).'/tracts/8278/images/';
        $files2 = glob( $directory ."*" );
        if( $files2 ) {
            $number_total = count($files2);
        }
        echo $number_done; echo "/";echo $number_total;
 ?>  <br> 

<a href="classify_8279.php">8279</a> 
<?php
        #get number classified so far: $number_done
        $path = dirname(__FILE__).'/tracts/8279/' ;
        $filename=$path."/done.txt";
        $list2= file_get_contents($filename); 
        $arr = preg_split('/\s+/', $list2);
        $number_done = count($arr);
        #get total number: $number_total
        $directory = dirname(__FILE__).'/tracts/8279/images/';
        $files2 = glob( $directory ."*" );
        if( $files2 ) {
            $number_total = count($files2);
        }
        echo $number_done; echo "/";echo $number_total;
 ?> 
<br> 

<a href="classify_8280.php">8280</a> <br> 
<a href="classify_8281.php">8281</a> <br> 
<a href="classify_8282.php">8282</a> <br> 
<a href="classify_8283.php">8283</a> <br> 
<a href="classify_8284.php">8284</a> <br> 
<a href="classify_8285.php">8285</a> <br> 
<a href="classify_8520.php">8520</a>

    
</body>
</html>
