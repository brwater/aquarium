<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script>
    function getRandomImage(){
    var im = Math.floor(Math.random()*999);  
    document.getElementById("result").innerHTML = '<img src=images/'+im+'.jpeg>'; 
    document.getElementById("im").value = im;
    }
    </script>

</head>

<body onload = "getRandomImage()">
    <header>
        <h1>Galaxy Aquarium</h1>
    </header>
    <span id="result" > </span>  

    <form method="get" action="">
        <input name="galaxy_id" type="number" id='im' >
        <label for="galaxy_id">Don't change this number</label>
        <br/>
        <input name="disk" type="checkbox" />
        <label for="disk">disk</label>
        <br/>
        <input name="edge" type="checkbox" />
        <label for="edge">edge</label>
        <br/>
        <input name="bar" type="checkbox" />
        <label for="bar">bar</label>
        <br/>
        <input name="ring" type="checkbox" />
        <label for="ring">ring</label>
        <br/>
        <input name="s0" type="checkbox" />
        <label for="s0">s0</label>
        <br/>
        <input name="e" type="checkbox" />
        <label for="e">e</label>
        <br/>
        <input name="shell" type="checkbox" />
        <label for="shell">shell</label>
        <br/>
        <input name="mspin" type="checkbox" />
        <label for="mspin">mspin</label>
        <br/>
        <input name="stream" type="checkbox" />
        <label for="stream">stream</label>
        <br/>
        <input name="crash" type="checkbox" />
        <label for="crash">crash</label>
        <br/>
        <input name="lsb" type="checkbox" />
        <label for="lsb">lsb</label>
        <br/>
        <input type="submit" class="btn btn-primary">
    </form>



</body>
</html>
<?php
error_reporting(0);
extract($_REQUEST);
$file=fopen("form-save.txt","a");
fwrite($file,"id :");
fwrite($file,$galaxy_id."\n");
fwrite($file,"disk :");
fwrite($file,$disk."\n");
fwrite($file,"edge :");
fwrite($file,$edge."\n");
fwrite($file,"bar :");
fwrite($file,$bar."\n");
fwrite($file,"ring :");
fwrite($file,$ring."\n");
fwrite($file,"s0 :");
fwrite($file,$s0."\n");
fwrite($file,"e :");
fwrite($file,$e."\n");
fwrite($file,"shell :");
fwrite($file,$shell."\n");
fwrite($file,"mspin :");
fwrite($file,$mspin."\n");
fwrite($file,"stream :");
fwrite($file,$stream."\n");
fwrite($file,"crash :");
fwrite($file,$crash."\n");
fwrite($file,"lsb :");
fwrite($file,$lsb."\n");
fclose($file);
?>