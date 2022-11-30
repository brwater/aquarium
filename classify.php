<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Galaxy Aquarium</title>

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
  flex-wrap: nowrap;
}

.flex-container > div {
  background-color: white;
  margin: 10px;
  padding: 20px;
  font-size: 20px;
}

div label input {
   margin-right:100px;
}
body {
    font-family:sans-serif;
}

#ck-button {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
}

#ck-button label {
    float:left;
    width:4.0em;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:checked + span {
    background-color:#911;
    color:#fff;
}

</style>

</head>

<body onload=getRandomImage()>

<!-- Link back to home -->
<a href="index.php">Home</a>


<!-- Get a random number from the unclassified list -->



<?php
        $list1= range(0,999);
        $list1 = array_map('strval', $list1);
        // print_r($list1);
        $path = dirname(__FILE__).'/group1' ;
        $filename=$path."/done.txt";
        $list2= file_get_contents($filename);
        $list2 = explode(" ",$list2);
        $list3 = array_diff($list1, $list2);
        $number = array_rand($list3, $num = 1);
        echo $number;
 ?>

<script>
    function getRandomImage(){
    var im = <?php echo $number ?>; 
    document.getElementById("random_image").innerHTML = '<img src=group1/images/'+im+'.jpeg style="width:500px;height:500px;">'; 
    document.getElementById("im").value = im;
    }
</script>

<!-- Make a flex container -->
<div class="flex-container">
<!-- Fill first element: button  -->
<div> <input type = "button" class="button" onclick = "getRandomImage()" value = "New Galaxy">  </div>
<!-- Fill second element:Random image -->
<div> 
    <span id="random_image" ></span> 
</div>
<!--  Fill third element:Classification form -->
<div> 
    <form method="get" action="">

        <input type="number" name="galaxy_id" id='im'> </input>
         <label for="galaxy_id" 
         style="font-size: 10px;">Don't change this number
        </label>
        <br/>
        <br/>
            
            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="S"  value="S"><span>S</span>
                </label>
            </div>

            <div id="ck-button"> 
                <label  >
                    <input type="checkbox" name="E" value="E" ><span>E</span>
                </label>
            </div>

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="Irr" value="Irr"><span>Irr</span>
                </label>
            </div>
            <br/><br/>

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="s0" value="0"><span>0</span>
                </label>
            </div>

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="B" value="B"><span>B</span>
                </label>
            </div>

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="r" value="r"><span>r</span>
                </label>
            </div>
            <br/><br/>
            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="edge" value="e"><span>edge-on</span>
                </label>
            </div>

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="lsb" value="L" ><span>lsb</span>
                </label>
            </div>


        <div >
        <label>
            <input type="submit" class="btn btn-primary">
        </label>
        </div>

    </form>
</div>

</div>

    
</body>
</html>

<?php
extract($_REQUEST);
error_reporting(0);
$path = dirname(__FILE__).'/group1' ;

$file=fopen($path."/results.txt","a");
fwrite($file,$galaxy_id." ".$S.$E.$Irr.$B.$r.$s0.$edge.$lsb."\n");
fclose($file);


$file=fopen($path."/done.txt","a");
fwrite($file,$galaxy_id." ");
fclose($file);
?>