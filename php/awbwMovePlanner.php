<?php session_start();?>
<!-- PHP file written by Nyvelion. Make it worthwhile! -->
<html>
<head>
<link rel="icon" href="http://awbw.amarriner.com/favicon.ico" type="image/x-icon">
<title>
AWBW Move Planner by Nyvelion.
</title>

<style>
<!--
.dragme{position:relative;}
-->
</style>
<script language="JavaScript1.2">
<!--

var ie=document.all;
var nn6=document.getElementById&&!document.all;

var isdrag=false;
var x,y;
var dobj;
var placex = 0;
var placez = 32;
var placey = 0;
var adjusty = 0;
var unitz = 5000;
var aunit = 0;

function redirecta(form)
{
var link = "awbwMovePlanner.php?game=" + form.gamen.value;
window.location = link;
}
function redirectb(form)
{
var link = "awbwMovePlanner.php?map=" + form.mapn.value;
window.location = link;
}

function addunit(form)
{
 unitz = unitz + 1;
 country = form.country.value;
 unit = form.unit.value;
 adjusty = 0;
 aunit = 0;
 if(unit=="airport")
 {adjusty = 2;}
 else if(unit=="base")
 {adjusty = 9;}
 else if(unit=="city")
 {adjusty = 6;}
 else if(unit=="comtower")
 {adjusty = 9;}
 else if(unit=="hq")
 {adjusty = 15;}
 else if(unit=="lab")
 {adjusty = 8;}
 else if(unit=="port")
 {adjusty = 6;}
 else
 {unitz = unitz + 10000; aunit = 1;}
 placey = 16 - adjusty;
 placex = placex + 16;
 if(placex > 640)
 placex = 16;
 document.getElementById('newstuff').innerHTML += '<div STYLE="position:absolute; top:'+ placey +'px; left:'+ placex +'px; z-index: '+ unitz +';"><img src="http://awbw.amarriner.com/terrain/aw1/'+ country + unit +'.gif" class="dragme"></div>';
 if(aunit == 1)
 {unitz = unitz - 10000;}
}
function addthing(form)
{
 unitz = unitz + 1;
 thing = form.thing.value;
 placey = 16;
 placex = placex + 16;
 if(placex > 640)
 placex = 16;
 if(thing=="AAA")
 {
 unitz = unitz + 40000;
 document.getElementById('newstuff').innerHTML += '<div STYLE="position:absolute; top:32px; left:'+ placez +'px; z-index: '+ unitz +';"><img src="BLANK.gif" class="dragme" style="opacity:0.5;filter:alpha(opacity=5)"></div>';
 unitz = unitz - 40000;
 placez = placez + 16;
 if(placez > 160)
 placez = 32;
 }
 else
 {
 unitz = unitz + 30000;
 placex = placex + 8;
 placey = placey + 8;
 document.getElementById('newstuff').innerHTML += '<div STYLE="position:absolute; top:'+ placey +'px; left:'+ placex +'px; z-index: '+ unitz +';"><img src="http://awbw.amarriner.com/terrain/aw1/'+ thing +'.gif" class="dragme"></div>';
 unitz = unitz - 30000;
 placex = placex - 8;
 placey = placey - 8;
 }
}
function addgrid()
{
 document.getElementById('newstuff').innerHTML += '<div STYLE="position:absolute; top:31px; left:31px; z-index: 1;"><img src="http://nyvelion.110mb.com/grid.GIF" class="dragme"></div>';
}
function addcalc()
{
 document.getElementById('newstuff').innerHTML += '<div STYLE="position:absolute; top:674px; left:31px; z-index: 1;"><iframe src ="http://awbw.amarriner.com/calculator.php" width="650" height="650"></iframe></div>';
}

function movemouse(e)
{
  if (isdrag)
  {
    dobj.style.left = (nn6 ? tx + e.clientX - x : tx + event.clientX - x) - ((nn6 ? tx + e.clientX - x : tx + event.clientX - x) % 16);
    dobj.style.top  = (nn6 ? ty + e.clientY - y : ty + event.clientY - y) - ((nn6 ? ty + e.clientY - y : ty + event.clientY - y) % 16);
    return false;
  }
}

function selectmouse(e)
{
  var fobj       = nn6 ? e.target : event.srcElement;
  var topelement = nn6 ? "HTML" : "BODY";

  while (fobj.tagName != topelement && fobj.className != "dragme")
  {
    fobj = nn6 ? fobj.parentNode : fobj.parentElement;
  }

  if (fobj.className=="dragme")
  {
    isdrag = true;
    dobj = fobj;
    tx = parseInt(dobj.style.left+0);
    ty = parseInt(dobj.style.top+0);
    x = nn6 ? e.clientX : event.clientX;
    y = nn6 ? e.clientY : event.clientY;
    document.onmousemove=movemouse;
    return false;
  }
}

document.onmousedown=selectmouse;
document.onmouseup=new Function("isdrag=false");

//-->
</script>

</head>
<body bgcolor="#4D4D4D">

<?php
extract($_GET);

      class UrlGrabber {
         function _get($url) {
            $this->content="";
            $this->info="";
            $ch = curl_init ();
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)");
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
            $this->content = curl_exec ($ch);
            // Check for success, if anything weird happened append a note
            $this->info = curl_getinfo($ch);
            if ($this->content === false || $this->info['http_code'] != 200) {
               if($this->content !== false )
                  $this->content .= "\n\n";
               $this->content .= "HTTP status was abnormal for $url [". $this->info['http_code']. "]";
               if (curl_error($ch))
                  $this->content .= "\n". curl_error($ch);
            }
            curl_close ($ch);
            return($this->content);
         }

         function _post($url,$vars) {
            $this->content="";
            $ch = curl_init ();
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_HEADER, 0);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)");
            curl_setopt ($ch, CURLOPT_POST, 1);
            curl_setopt ($ch, CURLOPT_POSTFIELDS, $vars);
            curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
            $this->content = curl_exec ($ch);
            // Check for success, if anything weird happened append a note
            $this->info = curl_getinfo($ch);
            if ($this->content === false || $this->info['http_code'] != 200) {
               if($this->content !== false )
                  $this->content .= "\n\n";
               $this->content .= "HTTP status was abnormal for $url [". $this->info['http_code']. "]";
               if (curl_error($ch))
                  $this->content .= "\n". curl_error($ch);
            }
            curl_close ($ch);
            return($this->content);
         }

         function _normalize($url) {
            // is the url absolute?
            if(preg_match("/^https?:\/\//", $url)) {
               return($url);
            } // is the url locally absolute?
            elseif(preg_match("/^\//", $url)) {
               $url_root = $_SERVER["HTTPS"] == "on" ? "https://" : "http://";
               $url_root .= isset($_SERVER['HTTP_HOST']) && strlen($_SERVER['HTTP_HOST'])>0 ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
               return($url_root . $url);
            } // the url must be relative
            else {
               $slash = '/';
               $url_root = $_SERVER["HTTPS"] == "on" ? "https://" : "http://";
               $url_root .= $_SERVER['HTTP_HOST'];
               $self = $_SERVER['PHP_SELF'];
               $self = str_replace('\\', $slash, $self);
               $phys_path = getcwd();
               $phys_path = str_replace('\\', $slash, $phys_path);
               $file_path_array = explode ($slash, $self);
               $file_name = array_pop($file_path_array);
               $cwd_path_array = explode ($slash, $phys_path);
               $self_dir_path_array = array_values (array_intersect ($file_path_array, $cwd_path_array));
               $self_dir_path = implode("/", $self_dir_path_array)."/";
               $cwd_url = $url_root . '/' . $self_dir_path;
               return($cwd_url . $url);
            }
         }
      }






if(isset($game))
{
 $url = "http://awbw.amarriner.com/game.php?games_id=". $game;
}
else if(isset($map))
{
 $url = "http://awbw.amarriner.com/prevmaps.php?maps_id=". $map;
}
if(isset($url))
{
$urlScoop = new UrlGrabber;
$rawhtml=($urlScoop->_get($urlScoop->_normalize($url)));

$newlines = array("\t","\n","\r","\x20\x20","\0","\x0B");
$content = str_replace($newlines, "", html_entity_decode($rawhtml));

$start = strpos($content,'http://awbw.amarriner.com/maps/C') + 32;
$end = strpos($content,'.png',$start);
$mapid = substr($content,$start,$end-$start);

echo'<DIV STYLE="position:absolute; top:32px; left:32px; z-index: 0;"><IMG SRC="http://awbw.amarriner.com/maps/C'. $mapid .'.png"></DIV>';

$start=$end + 25;
$theunits = 0;
$unitz = 1;

while(strpos($content,'http://awbw.amarriner.com/terrain/aw1/',$start)!=0 &&
 strpos($content,'http://awbw.amarriner.com/terrain/aw1/ds',$start) != strpos($content,'http://awbw.amarriner.com/terrain/aw1/',$start) &&
 strpos($content,'http://awbw.amarriner.com/terrain/aw1/',$start) > $lstart)
{
 while(strpos($content,'Turn on Gridlines',$start)!=0 &&
 strpos($content,'Turn on Gridlines',$start) < strpos($content,'http://awbw.amarriner.com/terrain/aw1/',$start))
 {
 $start = $start + 9;
 $theunits = 1;
 $tstart = strpos($content,'top:', $start) + 4;
 $checkfake = strpos($content,'z-index:120;\'></span>',$tstart);
 $checkreal = strpos($content,'.gif',$tstart);
 while( $checkfake < $checkreal && $checkfake > 1 )
 {
 $start = $tstart + 20;
 $tstart = strpos($content,'top:', $start) + 4;
 $checkfake = strpos($content,'z-index:120;\'></span>',$tstart);
 $checkreal = strpos($content,'.gif',$tstart);
 }
 $tend = strpos($content,'px',$tstart);
 $placeyy = intval(substr($content,$tstart,$tend-$tstart));
 $placeyy = $placeyy - 124;
 }
 $unitz = $unitz + 1;
 $lstart = strpos($content,'left:', $start) + 5;
 if ($theunits == 1)
 {
 $checkfake = strpos($content,'z-index:120;\'></span>',$lstart);
 $checkreal = strpos($content,'.gif',$lstart);
 while( $checkfake < $checkreal && $checkfake > 1 )
 {
 $start = $lstart + 20;
 $lstart = strpos($content,'left:', $start) + 5;
 $checkfake = strpos($content,'z-index:120;\'></span>',$lstart);
 $checkreal = strpos($content,'.gif',$lstart);
 }
 }
 $lend = strpos($content,'px',$lstart);
 $left = substr($content,$lstart,$lend-$lstart);
 $tstart = strpos($content,'top:', $lend) + 4;
 $tend = strpos($content,'px',$tstart);
 $top = intval(substr($content,$tstart,$tend-$tstart));
 $start = strpos($content,'http://awbw.amarriner.com/terrain/aw1/',$tend);
 $end = strpos($content,'.gif',$start) + 4;
 $thingid = substr($content,$start,$end-$start);
 if($start!=0)
 {
 $top = $top - 124;
 $left = $left - 124;
 if(is_int($top) && $theunits == 1)
 {
 $unitz = $unitz + 10000;
 echo'<DIV STYLE="position:absolute; top:'. $top .'px; left:'. $left .'px; z-index: '. $unitz .';"><IMG SRC="'. $thingid .'" class="dragme"></DIV>';
 $unitz = $unitz - 10000;
 }
 else if(is_int($top))
 {
 echo'<DIV STYLE="position:absolute; top:'. $top .'px; left:'. $left .'px; z-index: '. $unitz .';"><IMG SRC="'. $thingid .'" class="dragme"></DIV>';
 }
 }
 $start = $start + 30;
}

//echo'<BR>START: '. $start;
//echo'<BR>END: '. $end;
//echo'<BR>mapid: '. $mapid;
//echo'<BR>rawhtml: '. $rawhtml;
//echo'<BR>TYPErawhtml: '. gettype($rawhtml);
//echo'<BR>CONTENT: '. $content;
//echo'<BR>TYPECONTENT: '. gettype($content);

echo'
<DIV STYLE="position:absolute; top:32px; left:680px;">
<form>
<select name = "country" size="14">
 <option selected="selected" value="os">Orange Star</option>
 <option value="bm">Blue Moon</option>
 <option value="ge">Green Earth</option>
 <option value="yc">Yellow Comet</option>
 <option value="bh">Black Hole</option>
 <option value="rf">Red Fire</option>
 <option value="gs">Grey Sky</option>
 <option value="bd">Brown Desert</option>
 <option value="ab">Amber Blaze</option>
 <option value="js">Jade Sun</option>
 <option value="ci">Cobalt Ice</option>
 <option value="pc">Pink Cosmos</option>
 <option value="tg">Teal Galazy</option>
 <option value="pl">Purple Lightning</option>
</select>
<select name = "unit" size="25">
 <option value="anti-air">Anti-Air</option>
 <option value="apc">APC</option>
 <option value="artillery">Artillery</option>
 <option value="b-copter">B-Copter</option>
 <option value="battleship">Battleship</option>
 <option value="blackboat">Black Boat</option>
 <option value="blackbomb">Black Bomb</option>
 <option value="bomber">Bomber</option>
 <option value="carrier">Carrier</option>
 <option value="cruiser">Cruiser</option>
 <option value="fighter">Fighter</option>
 <option selected="selected" value="infantry">Infantry</option>
 <option value="lander">Lander</option>
 <option value="mdtank">Md.Tank</option>
 <option value="mech">Mech</option>
 <option value="megatank">Mega Tank</option>
 <option value="missile">Missile</option>
 <option value="neotank">Neotank</option>
 <option value="piperunner">Piperunner</option>
 <option value="recon">Recon</option>
 <option value="rocket">Rocket</option>
 <option value="stealth">Stealth</option>
 <option value="sub">Sub</option>
 <option value="t-copter">T-Copter</option>
 <option value="tank">Tank</option>
</select><BR>
<INPUT TYPE="button" NAME="button" Value="Add Unit" onClick="addunit(this.form)">
</form></DIV>
<DIV STYLE="position:absolute; top:32px; left:680px;">
<form>
<select name = "thing" size="10">
 <option selected="selected" value="0">0HP</option>
 <option value="1">1HP</option>
 <option value="2">2HP</option>
 <option value="3">3HP</option>
 <option value="4">4HP</option>
 <option value="5">5HP</option>
 <option value="6">6HP</option>
 <option value="7">7HP</option>
 <option value="8">8HP</option>
 <option value="9">9HP</option>
 <option value="capture">Capture</option>
 <option value="load">Load</option>
 <option value="AAA">Darken</option>
</select>
<INPUT TYPE="button" NAME="button" Value="Add" onClick="addthing(this.form)">
</form></DIV>

<DIV STYLE="position:absolute; top:192px; left:916px;">
<form>
<select name = "country" size="15">
 <option selected="selected" value="neutral">Neutral</option>
 <option value="orangestar">Orange Star</option>
 <option value="bluemoon">Blue Moon</option>
 <option value="greenearth">Green Earth</option>
 <option value="yellowcomet">Yellow Comet</option>
 <option value="blackhole">Black Hole</option>
 <option value="redfire">Red Fire</option>
 <option value="greysky">Grey Sky</option>
 <option value="browndesert">Brown Desert</option>
 <option value="amberblaze">Amber Blaze</option>
 <option value="jadesun">Jade Sun</option>
 <option value="cobaltice">Cobalt Ice</option>
 <option value="pinkcosmos">Pink Cosmos</option>
 <option value="tealgalaxy">Teal Galazy</option>
 <option value="purplelightning">Purple Lightning</option>
</select>
<select name = "unit" size="7">
 <option value="airport">Airport</option>
 <option value="base">Base</option>
 <option selected="selected" value="city">City</option>
 <option value="comtower">Com Tower</option>
 <option value="hq">HQ</option>
 <option value="lab">Lab</option>
 <option value="port">Port</option>
</select><BR>
<INPUT TYPE="button" NAME="button" Value="Add Property" onClick="addunit(this.form)">
</form></DIV>

<DIV STYLE="position:absolute; top:470px; left:680px;">
<FORM NAME="Calc">
<TABLE BORDER=4>
<TR>
<TD>
<INPUT TYPE="text"   NAME="Input" Size="16">
<br>
</TD>
</TR>
<TR>
<TD>
<INPUT TYPE="button" NAME="one"   VALUE="  1  " OnClick="Calc.Input.value += \'1\'">
<INPUT TYPE="button" NAME="two"   VALUE="  2  " OnCLick="Calc.Input.value += \'2\'">
<INPUT TYPE="button" NAME="three" VALUE="  3  " OnClick="Calc.Input.value += \'3\'">
<INPUT TYPE="button" NAME="plus"  VALUE="  +  " OnClick="Calc.Input.value += \' + \'">
<br>
<INPUT TYPE="button" NAME="four"  VALUE="  4  " OnClick="Calc.Input.value += \'4\'">
<INPUT TYPE="button" NAME="five"  VALUE="  5  " OnCLick="Calc.Input.value += \'5\'">
<INPUT TYPE="button" NAME="six"   VALUE="  6  " OnClick="Calc.Input.value += \'6\'">
<INPUT TYPE="button" NAME="minus" VALUE="  -  " OnClick="Calc.Input.value += \' - \'">
<br>
<INPUT TYPE="button" NAME="seven" VALUE="  7  " OnClick="Calc.Input.value += \'7\'">
<INPUT TYPE="button" NAME="eight" VALUE="  8  " OnCLick="Calc.Input.value += \'8\'">
<INPUT TYPE="button" NAME="nine"  VALUE="  9  " OnClick="Calc.Input.value += \'9\'">
<INPUT TYPE="button" NAME="times" VALUE="  x  " OnClick="Calc.Input.value += \' * \'">
<br>
<INPUT TYPE="button" NAME="clear" VALUE="  c  " OnClick="Calc.Input.value = \'\'">
<INPUT TYPE="button" NAME="zero"  VALUE="  0  " OnClick="Calc.Input.value += \'0\'">
<INPUT TYPE="button" NAME="DoIt"  VALUE="  =  " OnClick="Calc.Input.value = eval(Calc.Input.value)">
<INPUT TYPE="button" NAME="div"   VALUE="  /  " OnClick="Calc.Input.value += \' / \'">
<br>
</TD>
</TR>
</TABLE>
</FORM>
</DIV>

<div id="newstuff"></div>
';
}
echo'
<DIV STYLE="position:absolute; top:32px; left:916px;">
<form>
<FONT COLOR="WHITE">Game ID:</FONT><BR>
<input type="text" name="gamen">
<INPUT TYPE="button" NAME="button" Value="Go" onClick="redirecta(this.form)">
<BR><A HREF="http://awbw.amarriner.com/calculator.php">Damage Calculator</A>
<BR><INPUT TYPE="button" NAME="Baxter Stockman" Value="Use Grid" onClick="addgrid()">
<BR><BR>IFrame Damage Calculator
<BR><INPUT TYPE="button" NAME="HAHAHAHAHAHAHAHAHAHA" Value="Iframe Calc" onClick="addcalc()">
</form>
';
/*echo'
<form>
<FONT COLOR="WHITE">Map ID:</FONT><BR>
<input type="text" name="mapn">
<INPUT TYPE="button" NAME="button" Value="Go" onClick="redirectb(this.form)">
</form>
';*/
echo'
</DIV>
';
?>

</body>
</html>