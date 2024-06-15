<html>
<head>
<style>
*{margin:0px;padding:0px;box-sizing:border-box;}
body{width:100%;background-image:url("back.jpg");
background-size:cover;
background-repeat:no-repeat;}
nav{width:100%;background-color:purple;height:66px;line height:75px;}
nav h1{font-size:32px;font-family:san-seriff;color:white;text-transform:upper case;float:left;padding:10px 120px;}
nav h2{font-size:22px;font-family:san-seriff;color:white;text-transform:upper case;float:right;padding:15px 120px;}
.container {
  position:relative;
}

.image-container {
  position:absolute;top:25px;left:25px;
}

.image-container img {
  width: 250px;height:250px; /* Ensure the image doesn't exceed its container */,border-radius:6px;
}

.description {
  position:absolute;top:25px;left:320px;padding:30px;;font-size:22px;text-Align:left;font-family:san-seriff;color:#000;
}

#c1{position:absolute;left:25px;top:455px;font-size:25px;}
#i2{Position:absolute;right:150px;top:455px;height:220px;width:250px;}

#p2{position:absolute;left:25px;top:573px;font-size:30px;line-height:32px;color:#FF0073;font-family:monospace;}
 .date-input {
	 position:absolute;top:450px;left:379px;width:320px;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

   
 .submit-button {
        background-color: #4CAF50; /* Green */position:absolute;top:500px;left:379px;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 8px;
    }

    .submit-button:hover {
        background-color: orange;
    }

</style>
</head>
<center>
<body>
<nav><h1>NUMEROLOGY SPEAKS</h1>
<h2>CHARITHA.R</h2></nav><br>
<h2 style="color:blue">"Shree Manjunatha Swamy Prassanna!"</h2>
<div class="container">
  <div class="image-container">
    <img src="ganesha.jpg" ></img>
  </div>
  <div class="description">
    <p><span style="font-size: 1.9em; color:#FF00FF;">"</span>Welcome to <span style="color: red;">Numerology speaks</span>, your personal guide to the ancient art of numerology! By simply entering your date of birth, you'll unlock a wealth of insights into your personality, strengths, and life path.<br><br>

Once you've entered your date of birth, Numerology speaks will calculate your Life Path Number and provide you with a personalized profile, offering a glimpse into your innate traits, potential challenges, and key opportunities.<br>

Embark on a journey of self-discovery and unlock the secrets of your destiny with Numerology speaks today!<span style="font-size: 1.9em; color:#FF00FF;">"</span></b></p>
  </div>
</div>
<img src="clock.jpg" id="i2"><img>
<form name="f1" method="post" onsubmit="return s1()">

<p id="c1"><b>Enter Your Date Of Birth Here:</b></p><br>
<input type="date"  class="date-input" name="d1" id="m1"><br>
<input type="submit" value="GET PREDICTION" class="submit-button" >
</form>
<P id="p2"><b><span style="font-size: 1.9em; color:#FF00FF;">"</span>The Universe speaks in numbers.What does it say about you? <span style="font-size: 1.9em; color:#FF00FF;">"</span></b></p>
<?php
$d1;
$name=$_POST['d1'];
// echo $name;
$name=str_replace("-","",$name);
// echo "<br>";
// echo $name;
$tot=0;$tot1=0;
while($name>0)
{
	$v=$name%10;
	$tot=$tot+$v;
    $name=$name/10;}
// echo $tot;
if($tot>=10){
	while($tot>0){
		$r=$tot%10;
		$tot1=$tot1+$r;
	$tot=$tot/10;}
// echo $tot1;}
}
	else{
	// echo $tot;}
	}
if($tot1==1){

header("Location: n1.php");
    exit(); 
}
		
if($tot1==2||$tot==2){
header("Location: n2.php");
    exit(); 

}
if($tot1==3 || $tot==3){
header("Location: n3.php");
    exit(); 		
}
if($tot1==4 || $tot==4){
header("Location: n4.php");
    exit(); 
}
if($tot1==5|| $tot==5){

header("Location: n5.php");
    exit(); 
}
if($tot1==6|| $tot==6){
header("Location: n6.php");
    exit(); 	

}
if($tot1==7 || $tot==7){
header("Location: n7.php");
    exit();
}
if($tot1==8 || $tot==8){
header("Location: n8.php");
    exit();
	
}
if($tot1==9|| $tot==9){
header("Location: n9.php");
    exit();	
}
	
	
?>
<script>
function s1(){
	var hash=document.getElementById("m1").value;
	if(hash===""){
		alert("please enter your date of birth");
	    return false;
	}
}
</script>
</body></center></html>