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

<body onload=getRandomImage() >

<!-- Link back to home -->
<a href="index.php">Home</a>


<!-- Get an image to display, check that it has not been classified yet -->
<?php
        $directory = dirname(__FILE__).'/tracts/8278/images/';
        $files = glob( $directory ."*" );
        $ids = array_map(function($val) { return substr($val,73,-5); }, $files);
        $path = dirname(__FILE__).'/tracts/8278/' ;
        $filename=$path."/done.txt";
        $list2= file_get_contents($filename); 
        $arr = preg_split('/\s+/', $list2);
        //print_r($list2);
        $list3 = array_diff($ids, $arr); # the difference between the two arrays is the images not yet classified
        #var_dump($list3);
        $rand_key = array_rand($list3);
        $id_to_classify = $list3[$rand_key];
        #$number = array_rand($list3, $num = 1);#gives a random number from the list of available images
        #echo $id_to_classify;
        #var_dump($id_to_classify);
 ?>
 <br>


<script>
    function getRandomImage(){
    var im = <?php echo $id_to_classify ?>; 
    document.getElementById("random_image").innerHTML = '<img src=tracts/8278/images/'+im+'.jpeg style="width:500px;height:500px;">'; 
    document.getElementById("im").value = im;
    }
</script>


<!-- MAKE THE CONTAINER -->
<!-- MAKE THE CONTAINER -->
<!-- MAKE THE CONTAINER -->
<!-- MAKE THE CONTAINER -->
<!-- MAKE THE CONTAINER -->
<!-- MAKE THE CONTAINER -->
<div class="flex-container">

<!-- Fill first element with a button  -->
<!-- Fill first element with a button  -->
<!-- Fill first element with a button  -->
<div> <input type = "button" class="button" onclick="getRandomImage()" value = "New Galaxy">  </div>



<!-- Fill second element with "random_image" id -->
<!-- Fill second element with "random_image" id -->
<!-- Fill second element with "random_image" id -->
<div> 
    <span id="random_image" ></span> 
</div>



<!--  Fill third element with Classification form -->
<!--  Fill third element with Classification form -->
<!--  Fill third element with Classification form -->
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
                    <input type="checkbox" name="Irr" value="I"><span>Irr</span>
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

            <div id="ck-button"> 
                <label >
                    <input type="checkbox" name="prg" value="p" ><span>prg</span>
                </label>
            </div>


        <div >
        <label>
            <input type="submit" class="btn btn-primary">
        </label>
        </div>
    </form>
</div>
<!-- END OF FORM -->
</div>
<!-- END OF CONTAINER -->
<!-- END OF CONTAINER -->
<!-- END OF CONTAINER -->


<?php 

extract($_REQUEST);
error_reporting(0);
        $path = dirname(__FILE__).'/tracts/8278/' ;
        $filename=$path."done.txt";
        file_put_contents($filename, $galaxy_id."\r\n", FILE_APPEND);
        $filename=$path."results.txt";
        file_put_contents($filename, $galaxy_id." ".$S.$E.$Irr.$B.$r.$s0.$edge.$lsb.$prg."\r\n", FILE_APPEND);
 ?>
 


</body>
</html>