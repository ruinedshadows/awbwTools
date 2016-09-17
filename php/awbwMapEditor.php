<?php session_start();?>
<!-- PHP file written by Nyvelion. Make it worthwhile!-->
<html>
<head>
<link rel="icon" href="http://awbw.amarriner.com/favicon.ico" type="image/x-icon">
<title>
AWBW Map Designer by Nyvelion
</title>

<script language="JavaScript1.2">
<!--

var theMap=new Array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0");

var theNext = " ";
var theImg = "BLANK.gif";
var theVert = 0;
var theDown = 0;

var tempS = " ";
var tempT = " ";
var grid = 0;

function Bargle(wassup)
{
 tempS = "a" + wassup;
 document.getElementById(tempS).innerHTML = '<img src="'+ theImg +'" onmousedown="Bargle('+ wassup +')" onmouseup="Budapest()" onmouseover="YoYoYo('+ wassup +')">';
 theMap[wassup] = theNext;
 document.getElementById(tempS).style.top = 32 + 16*((wassup/40)-((wassup/40)%1)) - theVert;
 theDown = 1;
 //alert(wassup + "\n" + tempS + "\n" + theMap[wassup]);
}

function Clearly(wassup)
{
 tempS = "a" + wassup;
 document.getElementById(tempS).innerHTML = '<img src="BLANK.gif" onmousedown="Bargle('+ wassup +')" onmouseup="Budapest()" onmouseover="YoYoYo('+ wassup +')">';
 theMap[wassup] = "0";
 document.getElementById(tempS).style.top = 32 + 16*((wassup/40)-((wassup/40)%1));
 theDown = 1;
}

function YoYoYo(wassup)
{
 if(theDown==1)
 {
 tempS = "a" + wassup;
 document.getElementById(tempS).innerHTML = '<img src="'+ theImg +'" onmousedown="Bargle('+ wassup +')" onmouseup="Budapest()" onmouseover="YoYoYo('+ wassup +')">';
 theMap[wassup] = theNext;
 document.getElementById(tempS).style.top = 32 + 16*((wassup/40)-((wassup/40)%1)) - theVert;
 }
}

function Budapest()
{
 theDown = 0;
}

function setNext(cradle, actual, DnePotsBob)
{
 theNext = cradle;
 theImg = actual;
 if(theImg != "BLANK.gif")
 {
 theImg = "http://awbw.amarriner.com/terrain/aw2/" + theImg;
 }
 theVert = DnePotsBob;
 document.getElementById('Fill').innerHTML = '<a href="javascript: setFill(\''+ theNext +'\', \''+ theImg +'\', \''+ theVert +'\');">Fill With <img border=0 src="'+ theImg +'"></a>';
 //alert(theNext + "\n" + theImg + "\n" + theVert);
}

function setFill(yin, yang, neutral)
{
 var x = 0;
 for (x = 0; x<1600; x++)
 {
 if((x+1)%40 != 0)
 {
 if(x/40 < document.getElementById("theHHH").value && x%40 < document.getElementById("theWWW").value)
 {Bargle(x);}
 else{Clearly(x);}
 }
 }
 theDown = 0;
}

function wolffangfist()
{
 var x = 0;
 if(grid==0){grid=1;}
 else{grid=0;}
 for (x = 0; x<1600; x++)
 {
 if((x+1)%40 == 0){x = x + 1;}
 tempS = "a" + x;
 tempT = grid + "px solid grey";
 document.getElementById(tempS).style.border = tempT;
 }
}

function REEEEEEEEEEEEEEEEEEEEEFS()
{
 setNext('%', 'reef.gif', 0);
 var x = 0;
 for (x = 0; x<1600; x++)
 {
 if(theMap[x]==",")
 {
 if(Math.floor(Math.random()*25) == 2)
 {
 Bargle(x);
 }
 }
 }
 theDown = 0;
}

function Killroy()
{
 setNext('@', 'wood.gif', 0);
 var x = 0;
 for (x = 0; x<1600; x++)
 {
 if(theMap[x]==".")
 {
 if(Math.floor(Math.random()*25) == 2)
 {
 Bargle(x);
 }
 }
 }
 setNext('^', 'mountain.gif', 5);
 x = 0;
 for (x = 0; x<1600; x++)
 {
 if(theMap[x]==".")
 {
 if(Math.floor(Math.random()*25) == 2)
 {
 Bargle(x);
 }
 }
 }
 theDown = 0;
}

function MirrorMode(fargo, tenet)
{
 var x = 0;
 var tempAA = 0;
 var tempBB = 0;
 var tempCC = " ";
 if(fargo==1)
 {
 for(x = 0; x < (document.getElementById("theHHH").value - 1) / 2; x++)
 {
 for(y = 0; y < document.getElementById("theWWW").value; y++)
 {
 if(tenet==1)
 {
 tempAA = ((document.getElementById("theHHH").value - 1 - x) * 40 + y);
 tempBB = x*40 + y;
 }
 else if(tenet==2)
 {
 tempAA = ((document.getElementById("theHHH").value - 1 - x) * 40 + (document.getElementById("theWWW").value - 1 - y));
 tempBB = x*40 + y;
 }
 theMap[tempAA] = theMap[tempBB];
 tempS = "a" + tempAA;
 tempT = "a" + tempBB;
 document.getElementById(tempS).innerHTML = document.getElementById(tempT).innerHTML;
 tempCC = parseInt(document.getElementById(tempS).style.top) + ((16- (parseInt(document.getElementById(tempS).style.top) % 16))%16) - ((16- (parseInt(document.getElementById(tempT).style.top) % 16))%16);
 document.getElementById(tempS).style.top = tempCC;
 }
 }
 }
 if(fargo==2)
 {
 for(x = 0; x < document.getElementById("theHHH").value; x++)
 {
 for(y = 0; y < (document.getElementById("theWWW").value - 1) / 2; y++)
 {
 if(tenet==1)
 {
 tempAA = x * 40 + (document.getElementById("theWWW").value - 1 - y);
 tempBB = x*40 + y;
 }
 else if(tenet==2)
 {
 tempAA = ((document.getElementById("theHHH").value - 1 - x) * 40 + (document.getElementById("theWWW").value - 1 - y));
 tempBB = x*40 + y;
 }
 theMap[tempAA] = theMap[tempBB];
 tempS = "a" + tempAA;
 tempT = "a" + tempBB;
 document.getElementById(tempS).innerHTML = document.getElementById(tempT).innerHTML;
 tempCC = parseInt(document.getElementById(tempS).style.top) + ((16- (parseInt(document.getElementById(tempS).style.top) % 16))%16) - ((16- (parseInt(document.getElementById(tempT).style.top) % 16))%16);
 document.getElementById(tempS).style.top = tempCC;
 }
 }
 }
 if(fargo==3)
 {
 for(x = 0; x < (document.getElementById("theHHH").value - 1) / 2; x++)
 {
 for(y = 0; y < (document.getElementById("theHHH").value - 1) / 2; y++)
 {
 tempAA = (document.getElementById("theHHH").value - 1 - x) * 40 + (document.getElementById("theWWW").value - 1 - y);
 tempBB = x*40 + y;
 theMap[tempAA] = theMap[tempBB];
 tempS = "a" + tempAA;
 tempT = "a" + tempBB;
 document.getElementById(tempS).innerHTML = document.getElementById(tempT).innerHTML;
 tempCC = parseInt(document.getElementById(tempS).style.top) + ((16- (parseInt(document.getElementById(tempS).style.top) % 16))%16) - ((16- (parseInt(document.getElementById(tempT).style.top) % 16))%16);
 document.getElementById(tempS).style.top = tempCC;

 tempAA = y * 40 + (document.getElementById("theWWW").value - 1 - x);
 tempBB = x*40 + y;
 theMap[tempAA] = theMap[tempBB];
 tempS = "a" + tempAA;
 tempT = "a" + tempBB;
 document.getElementById(tempS).innerHTML = document.getElementById(tempT).innerHTML;
 tempCC = parseInt(document.getElementById(tempS).style.top) + ((16- (parseInt(document.getElementById(tempS).style.top) % 16))%16) - ((16- (parseInt(document.getElementById(tempT).style.top) % 16))%16);
 document.getElementById(tempS).style.top = tempCC;

 tempAA = (document.getElementById("theHHH").value - 1 - y) * 40 + x;
 tempBB = x*40 + y;
 theMap[tempAA] = theMap[tempBB];
 tempS = "a" + tempAA;
 tempT = "a" + tempBB;
 document.getElementById(tempS).innerHTML = document.getElementById(tempT).innerHTML;
 tempCC = parseInt(document.getElementById(tempS).style.top) + ((16- (parseInt(document.getElementById(tempS).style.top) % 16))%16) - ((16- (parseInt(document.getElementById(tempT).style.top) % 16))%16);
 document.getElementById(tempS).style.top = tempCC;
 }
 }
 }
 roads();
 save();
 load();
}

function save()
{
 var x = 0;
 var Wingman = "";
 for (x = 0; x<1599; x++)
 {
 if((x+1)%40 == 0)
 {Wingman += "\n";}
 else
 {Wingman += theMap[x];}
 }
 document.getElementById('mapcode').value = Wingman;
}

function load()
{
 var MitsuhideAkechi = document.getElementById('mapcode').value;
 MitsuhideAkechi.replace("\n","0");
 var x = 0;
 for (x = 0; x<1600; x++)
 {
 theMap[x] = MitsuhideAkechi.charAt(x);
 if(theMap[x]=="a"){ setNext('a', 'neutralcity.gif', 6); Bargle(x);}
 else if(theMap[x]=="b"){ setNext('b', 'neutralbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="c"){ setNext('c', 'neutralairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="d"){ setNext('d', 'neutralport.gif', 6); Bargle(x);}
 else if(theMap[x]=="e"){ setNext('e', 'orangestarcity.gif', 6); Bargle(x);}
 else if(theMap[x]=="f"){ setNext('f', 'orangestarbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="g"){ setNext('g', 'orangestarairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="h"){ setNext('h', 'orangestarport.gif', 6); Bargle(x);}
 else if(theMap[x]=="i"){ setNext('i', 'orangestarhq.gif', 15); Bargle(x);}
 else if(theMap[x]=="j"){ setNext('j', 'bluemooncity.gif', 6); Bargle(x);}
 else if(theMap[x]=="l"){ setNext('l', 'bluemoonbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="m"){ setNext('m', 'bluemoonairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="n"){ setNext('n', 'bluemoonport.gif', 6); Bargle(x);}
 else if(theMap[x]=="o"){ setNext('o', 'bluemoonhq.gif', 15); Bargle(x);}
 else if(theMap[x]=="p"){ setNext('p', 'greenearthcity.gif', 6); Bargle(x);}
 else if(theMap[x]=="q"){ setNext('q', 'greenearthbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="r"){ setNext('r', 'greenearthairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="s"){ setNext('s', 'greenearthport.gif', 6); Bargle(x);}
 else if(theMap[x]=="t"){ setNext('t', 'greenearthhq.gif', 15); Bargle(x);}
 else if(theMap[x]=="u"){ setNext('u', 'yellowcometcity.gif', 6); Bargle(x);}
 else if(theMap[x]=="v"){ setNext('v', 'yellowcometbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="w"){ setNext('w', 'yellowcometairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="x"){ setNext('x', 'yellowcometport.gif', 6); Bargle(x);}
 else if(theMap[x]=="y"){ setNext('y', 'yellowcomethq.gif', 15); Bargle(x);}
 else if(theMap[x]=="1"){ setNext('1', 'blackholecity.gif', 6); Bargle(x);}
 else if(theMap[x]=="2"){ setNext('2', 'blackholebase.gif', 9); Bargle(x);}
 else if(theMap[x]=="3"){ setNext('3', 'blackholeairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="4"){ setNext('4', 'blackholeport.gif', 6); Bargle(x);}
 else if(theMap[x]=="5"){ setNext('5', 'blackholehq.gif', 15); Bargle(x);}
 else if(theMap[x]=="U"){ setNext('U', 'redfirecity.gif', 6); Bargle(x);}
 else if(theMap[x]=="T"){ setNext('T', 'redfirebase.gif', 9); Bargle(x);}
 else if(theMap[x]=="S"){ setNext('S', 'redfireairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="R"){ setNext('R', 'redfireport.gif', 6); Bargle(x);}
 else if(theMap[x]=="Q"){ setNext('Q', 'redfirehq.gif', 15); Bargle(x);}
 else if(theMap[x]=="Z"){ setNext('Z', 'greyskycity.gif', 6); Bargle(x);}
 else if(theMap[x]=="Y"){ setNext('Y', 'greyskybase.gif', 9); Bargle(x);}
 else if(theMap[x]=="X"){ setNext('X', 'greyskyairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="W"){ setNext('W', 'greyskyport.gif', 6); Bargle(x);}
 else if(theMap[x]=="V"){ setNext('V', 'greyskyhq.gif', 15); Bargle(x);}
 else if(theMap[x]=="6"){ setNext('6', 'browndesertcity.gif', 4); Bargle(x);}
 else if(theMap[x]=="7"){ setNext('7', 'browndesertbase.gif', 9); Bargle(x);}
 else if(theMap[x]=="8"){ setNext('8', 'browndesertairport.gif', 2); Bargle(x);}
 else if(theMap[x]=="9"){ setNext('9', 'browndesertport.gif', 6); Bargle(x);}
 else if(theMap[x]=="_"){ setNext('_', 'amberblazecomtower.gif', 9); Bargle(x);}
 else if(theMap[x]=="."){ setNext('.', 'plain.gif', 0); Bargle(x);}
 else if(theMap[x]=="@"){ setNext('@', 'wood.gif', 0); Bargle(x);}
 else if(theMap[x]=="^"){ setNext('^', 'mountain.gif', 5); Bargle(x);}
 else if(theMap[x]==","){ setNext(',', 'sea.gif', 0); Bargle(x);}
 else if(theMap[x]=="%"){ setNext('%', 'reef.gif', 0); Bargle(x);}
 else if(theMap[x]=="("){ setNext('(', 'hshoaln.gif', 0); Bargle(x);}
 else if(theMap[x]==")"){ setNext(')', 'vshoale.gif', 0); Bargle(x);}
 else if(theMap[x]=="<"){ setNext('<', 'hshoal.gif', 0); Bargle(x);}
 else if(theMap[x]==">"){ setNext('>', 'vshoal.gif', 0); Bargle(x);}
 else if(theMap[x]=="-"){ setNext('-', 'hroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="="){ setNext('=', 'vroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="A"){ setNext('A', 'esroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="B"){ setNext('B', 'swroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="C"){ setNext('C', 'wnroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="D"){ setNext('D', 'neroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="E"){ setNext('E', 'eswroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="F"){ setNext('F', 'swnroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="G"){ setNext('G', 'wneroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="H"){ setNext('H', 'nesroad.gif', 0); Bargle(x);}
 else if(theMap[x]=="+"){ setNext('+', 'croad.gif', 0); Bargle(x);}
 else if(theMap[x]=="{"){ setNext('{', 'hriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="}"){ setNext('}', 'vriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="I"){ setNext('I', 'esriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="J"){ setNext('J', 'swriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="K"){ setNext('K', 'wnriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="L"){ setNext('L', 'neriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="M"){ setNext('M', 'eswriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="N"){ setNext('N', 'swnriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="O"){ setNext('O', 'wneriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="P"){ setNext('P', 'nesriver.gif', 0); Bargle(x);}
 else if(theMap[x]=="~"){ setNext('~', 'criver.gif', 0); Bargle(x);}
 else if(theMap[x]=="["){ setNext('[', 'hbridge.gif', 0); Bargle(x);}
 else if(theMap[x]=="]"){ setNext(']', 'vbridge.gif', 0); Bargle(x);}
 else if(theMap[x]=="0"){ setNext('0', 'BLANK.gif', 0); Bargle(x);}
 }
 theDown = 0;
}
function roads()
{
   var MapA = 0;
   var MapB = 0;
   var MapC = 0;
   var MapD = 0;
   for (x = 0; x<1600; x++)
   {
      MapA = 0;
      MapB = 0;
      MapC = 0;
      MapD = 0;
      if((x+1)%40 == 0){x = x + 1;}
      if(theMap[x] == '(' || theMap[x] == ')' || theMap[x] == '<' || theMap[x] == '>')
      {
         if(x >= 40 && (theMap[x-40] != '{' && theMap[x-40] != '}' && theMap[x-40] != '~' && theMap[x-40] != 'I' && theMap[x-40] != 'J'
          && theMap[x-40] != 'K' && theMap[x-40] != 'L' && theMap[x-40] != 'M' && theMap[x-40] != 'N' && theMap[x-40] != 'O' && theMap[x-40] != 'P'
            && theMap[x-40] != ',' && theMap[x-40] != '%' && theMap[x-40] != '0'
          && theMap[x-40] != '(' && theMap[x-40] != ')' && theMap[x-40] != '<' && theMap[x-40] != '>'))
         {MapA = 1;}
         if(x%40 != 0 && (theMap[x-1] != '{' && theMap[x-1] != '}' && theMap[x-1] != '~' && theMap[x-1] != 'I' && theMap[x-1] != 'J'
          && theMap[x-1] != 'K' && theMap[x-1] != 'L' && theMap[x-1] != 'M' && theMap[x-1] != 'N' && theMap[x-1] != 'O' && theMap[x-1] != 'P'
            && theMap[x-1] != ',' && theMap[x-1] != '%' && theMap[x-1] != '0'
          && theMap[x-1] != '(' && theMap[x-1] != ')' && theMap[x-1] != '<' && theMap[x-1] != '>'))
         {MapB = 1;}
         if((x+1)%40 != 0 && (theMap[x+1] != '{' && theMap[x+1] != '}' && theMap[x+1] != '~' && theMap[x+1] != 'I' && theMap[x+1] != 'J'
          && theMap[x+1] != 'K' && theMap[x+1] != 'L' && theMap[x+1] != 'M' && theMap[x+1] != 'N' && theMap[x+1] != 'O' && theMap[x+1] != 'P'
            && theMap[x+1] != ',' && theMap[x+1] != '%' && theMap[x+1] != '0'
          && theMap[x+1] != '(' && theMap[x+1] != ')' && theMap[x+1] != '<' && theMap[x+1] != '>'))
         {MapC = 1;}
         if(x < 1560 && (theMap[x+40] != '{' && theMap[x+40] != '}' && theMap[x+40] != '~' && theMap[x+40] != 'I' && theMap[x+40] != 'J'
          && theMap[x+40] != 'K' && theMap[x+40] != 'L' && theMap[x+40] != 'M' && theMap[x+40] != 'N' && theMap[x+40] != 'O' && theMap[x+40] != 'P'
            && theMap[x+40] != ',' && theMap[x+40] != '%' && theMap[x+40] != '0'
          && theMap[x+40] != '(' && theMap[x+40] != ')' && theMap[x+40] != '<' && theMap[x+40] != '>'))
         {MapD = 1;}

         if(x%40 != 0 && (theMap[x-1] == '(' || theMap[x-1] == '<') 
            || x%40 != 39 && (theMap[x+1] == '(' || theMap[x+1] == '<'))
         {
            if(MapA == 1)      {setNext('<', 'hshoal.gif', 0); Bargle(x);}
            else if(MapD == 1)   {setNext('(', 'hshoaln.gif', 0); Bargle(x);}
            else if(MapB == 1)   {setNext(')', 'vshoale.gif', 0); Bargle(x);}
            else if(MapC == 1)   {setNext('>', 'vshoal.gif', 0); Bargle(x);}
         }
         else
         {
            if(MapB == 1)      {setNext(')', 'vshoale.gif', 0); Bargle(x);}
            else if(MapC == 1)   {setNext('>', 'vshoal.gif', 0); Bargle(x);}
            else if(MapA == 1)   {setNext('<', 'hshoal.gif', 0); Bargle(x);}
            else if(MapD == 1)   {setNext('(', 'hshoaln.gif', 0); Bargle(x);}
         }
      }
      if(theMap[x] == '-' || theMap[x] == '=' || theMap[x] == '+' || theMap[x] == 'A' || theMap[x] == 'B'
          || theMap[x] == 'C' || theMap[x] == 'D' || theMap[x] == 'E' || theMap[x] == 'F' || theMap[x] == 'G' || theMap[x] == 'H')
      {
         if(x >= 40 && (theMap[x-40] == '-' || theMap[x-40] == '=' || theMap[x-40] == '+' || theMap[x-40] == 'A' || theMap[x-40] == 'B'
          || theMap[x-40] == 'C' || theMap[x-40] == 'D' || theMap[x-40] == 'E' || theMap[x-40] == 'F' || theMap[x-40] == 'G' || theMap[x-40] == 'H'
          || theMap[x-40] == 'a' || theMap[x-40] == 'b' || theMap[x-40] == 'c' || theMap[x-40] == 'd'
          || theMap[x-40] == 'e' || theMap[x-40] == 'f' || theMap[x-40] == 'g' || theMap[x-40] == 'h' || theMap[x-40] == 'i'
          || theMap[x-40] == 'j' || theMap[x-40] == 'l' || theMap[x-40] == 'm' || theMap[x-40] == 'n' || theMap[x-40] == 'o'
          || theMap[x-40] == 'p' || theMap[x-40] == 'q' || theMap[x-40] == 'r' || theMap[x-40] == 's' || theMap[x-40] == 't'
          || theMap[x-40] == 'u' || theMap[x-40] == 'v' || theMap[x-40] == 'w' || theMap[x-40] == 'x' || theMap[x-40] == 'y'
          || theMap[x-40] == '1' || theMap[x-40] == '2' || theMap[x-40] == '3' || theMap[x-40] == '4' || theMap[x-40] == '5'
          || theMap[x-40] == 'U' || theMap[x-40] == 'T' || theMap[x-40] == 'S' || theMap[x-40] == 'R' || theMap[x-40] == 'Q'
          || theMap[x-40] == 'Z' || theMap[x-40] == 'Y' || theMap[x-40] == 'X' || theMap[x-40] == 'W' || theMap[x-40] == 'V'
          || theMap[x-40] == '6' || theMap[x-40] == '7' || theMap[x-40] == '8' || theMap[x-40] == '9' || theMap[x-40] == '_'
          || theMap[x-40] == '[' || theMap[x-40] == ']'))
         {MapA = 1;}
         if(x%40 != 0 && (theMap[x-1] == '-' || theMap[x-1] == '=' || theMap[x-1] == '+' || theMap[x-1] == 'A' || theMap[x-1] == 'B'
          || theMap[x-1] == 'C' || theMap[x-1] == 'D' || theMap[x-1] == 'E' || theMap[x-1] == 'F' || theMap[x-1] == 'G' || theMap[x-1] == 'H'
          || theMap[x-1] == 'a' || theMap[x-1] == 'b' || theMap[x-1] == 'c' || theMap[x-1] == 'd'
          || theMap[x-1] == 'e' || theMap[x-1] == 'f' || theMap[x-1] == 'g' || theMap[x-1] == 'h' || theMap[x-1] == 'i'
          || theMap[x-1] == 'j' || theMap[x-1] == 'l' || theMap[x-1] == 'm' || theMap[x-1] == 'n' || theMap[x-1] == 'o'
          || theMap[x-1] == 'p' || theMap[x-1] == 'q' || theMap[x-1] == 'r' || theMap[x-1] == 's' || theMap[x-1] == 't'
          || theMap[x-1] == 'u' || theMap[x-1] == 'v' || theMap[x-1] == 'w' || theMap[x-1] == 'x' || theMap[x-1] == 'y'
          || theMap[x-1] == '1' || theMap[x-1] == '2' || theMap[x-1] == '3' || theMap[x-1] == '4' || theMap[x-1] == '5'
          || theMap[x-1] == 'U' || theMap[x-1] == 'T' || theMap[x-1] == 'S' || theMap[x-1] == 'R' || theMap[x-1] == 'Q'
          || theMap[x-1] == 'Z' || theMap[x-1] == 'Y' || theMap[x-1] == 'X' || theMap[x-1] == 'W' || theMap[x-1] == 'V'
          || theMap[x-1] == '6' || theMap[x-1] == '7' || theMap[x-1] == '8' || theMap[x-1] == '9' || theMap[x-1] == '_'
          || theMap[x-1] == '[' || theMap[x-1] == ']'))
         {MapB = 1;}
         if((x+1)%40 != 0 && (theMap[x+1] == '-' || theMap[x+1] == '=' || theMap[x+1] == '+' || theMap[x+1] == 'A' || theMap[x+1] == 'B'
          || theMap[x+1] == 'C' || theMap[x+1] == 'D' || theMap[x+1] == 'E' || theMap[x+1] == 'F' || theMap[x+1] == 'G' || theMap[x+1] == 'H'
          || theMap[x+1] == 'a' || theMap[x+1] == 'b' || theMap[x+1] == 'c' || theMap[x+1] == 'd'
          || theMap[x+1] == 'e' || theMap[x+1] == 'f' || theMap[x+1] == 'g' || theMap[x+1] == 'h' || theMap[x+1] == 'i'
          || theMap[x+1] == 'j' || theMap[x+1] == 'l' || theMap[x+1] == 'm' || theMap[x+1] == 'n' || theMap[x+1] == 'o'
          || theMap[x+1] == 'p' || theMap[x+1] == 'q' || theMap[x+1] == 'r' || theMap[x+1] == 's' || theMap[x+1] == 't'
          || theMap[x+1] == 'u' || theMap[x+1] == 'v' || theMap[x+1] == 'w' || theMap[x+1] == 'x' || theMap[x+1] == 'y'
          || theMap[x+1] == '1' || theMap[x+1] == '2' || theMap[x+1] == '3' || theMap[x+1] == '4' || theMap[x+1] == '5'
          || theMap[x+1] == 'U' || theMap[x+1] == 'T' || theMap[x+1] == 'S' || theMap[x+1] == 'R' || theMap[x+1] == 'Q'
          || theMap[x+1] == 'Z' || theMap[x+1] == 'Y' || theMap[x+1] == 'X' || theMap[x+1] == 'W' || theMap[x+1] == 'V'
          || theMap[x+1] == '6' || theMap[x+1] == '7' || theMap[x+1] == '8' || theMap[x+1] == '9' || theMap[x+1] == '_'
          || theMap[x+1] == '[' || theMap[x+1] == ']'))
         {MapC = 1;}
         if(x < 1560 && (theMap[x+40] == '-' || theMap[x+40] == '=' || theMap[x+40] == '+' || theMap[x+40] == 'A' || theMap[x+40] == 'B'
          || theMap[x+40] == 'C' || theMap[x+40] == 'D' || theMap[x+40] == 'E' || theMap[x+40] == 'F' || theMap[x+40] == 'G' || theMap[x+40] == 'H'
          || theMap[x+40] == 'a' || theMap[x+40] == 'b' || theMap[x+40] == 'c' || theMap[x+40] == 'd'
          || theMap[x+40] == 'e' || theMap[x+40] == 'f' || theMap[x+40] == 'g' || theMap[x+40] == 'h' || theMap[x+40] == 'i'
          || theMap[x+40] == 'j' || theMap[x+40] == 'l' || theMap[x+40] == 'm' || theMap[x+40] == 'n' || theMap[x+40] == 'o'
          || theMap[x+40] == 'p' || theMap[x+40] == 'q' || theMap[x+40] == 'r' || theMap[x+40] == 's' || theMap[x+40] == 't'
          || theMap[x+40] == 'u' || theMap[x+40] == 'v' || theMap[x+40] == 'w' || theMap[x+40] == 'x' || theMap[x+40] == 'y'
          || theMap[x+40] == '1' || theMap[x+40] == '2' || theMap[x+40] == '3' || theMap[x+40] == '4' || theMap[x+40] == '5'
          || theMap[x+40] == 'U' || theMap[x+40] == 'T' || theMap[x+40] == 'S' || theMap[x+40] == 'R' || theMap[x+40] == 'Q'
          || theMap[x+40] == 'Z' || theMap[x+40] == 'Y' || theMap[x+40] == 'X' || theMap[x+40] == 'W' || theMap[x+40] == 'V'
          || theMap[x+40] == '6' || theMap[x+40] == '7' || theMap[x+40] == '8' || theMap[x+40] == '9' || theMap[x+40] == '_'
          || theMap[x+40] == '[' || theMap[x+40] == ']'))
         {MapD = 1;}

         if(MapA == 1 && MapB == 1 && MapC == 1 && MapD == 1){setNext('+', 'croad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1 && MapC == 1)   {setNext('G', 'wneroad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1 && MapD == 1)   {setNext('F', 'swnroad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapC == 1 && MapD == 1)   {setNext('H', 'nesroad.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapC == 1 && MapD == 1)   {setNext('E', 'eswroad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1)         {setNext('C', 'wnroad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapC == 1)         {setNext('D', 'neroad.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapD == 1)         {setNext('=', 'vroad.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapC == 1)         {setNext('-', 'hroad.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapD == 1)         {setNext('B', 'swroad.gif', 0); Bargle(x);}
         else if(MapC == 1 && MapD == 1)         {setNext('A', 'esroad.gif', 0); Bargle(x);}
         else if(MapA == 1 || MapD == 1)         {setNext('=', 'vroad.gif', 0); Bargle(x);}
         else if(MapB == 1 || MapC == 1)         {setNext('-', 'hroad.gif', 0); Bargle(x);}
      }

      if(theMap[x] == '{' || theMap[x] == '}' || theMap[x] == '~' || theMap[x] == 'I' || theMap[x] == 'J'
          || theMap[x] == 'K' || theMap[x] == 'L' || theMap[x] == 'M' || theMap[x] == 'N' || theMap[x] == 'O' || theMap[x] == 'P')
      {
         if(x >= 40 && (theMap[x-40] == '{' || theMap[x-40] == '}' || theMap[x-40] == '~' || theMap[x-40] == 'I' || theMap[x-40] == 'J'
          || theMap[x-40] == 'K' || theMap[x-40] == 'L' || theMap[x-40] == 'M' || theMap[x-40] == 'N' || theMap[x-40] == 'O' || theMap[x-40] == 'P'
            || theMap[x-40] == '[' || theMap[x-40] == ']'))
         {MapA = 1;}
         if(x%40 != 0 && (theMap[x-1] == '{' || theMap[x-1] == '}' || theMap[x-1] == '~' || theMap[x-1] == 'I' || theMap[x-1] == 'J'
          || theMap[x-1] == 'K' || theMap[x-1] == 'L' || theMap[x-1] == 'M' || theMap[x-1] == 'N' || theMap[x-1] == 'O' || theMap[x-1] == 'P'
            || theMap[x-1] == '[' || theMap[x-1] == ']'))
         {MapB = 1;}
         if((x+1)%40 != 0 && (theMap[x+1] == '{' || theMap[x+1] == '}' || theMap[x+1] == '~' || theMap[x+1] == 'I' || theMap[x+1] == 'J'
          || theMap[x+1] == 'K' || theMap[x+1] == 'L' || theMap[x+1] == 'M' || theMap[x+1] == 'N' || theMap[x+1] == 'O' || theMap[x+1] == 'P'
            || theMap[x+1] == '[' || theMap[x+1] == ']'))
         {MapC = 1;}
         if(x < 1560 && (theMap[x+40] == '{' || theMap[x+40] == '}' || theMap[x+40] == '~' || theMap[x+40] == 'I' || theMap[x+40] == 'J'
          || theMap[x+40] == 'K' || theMap[x+40] == 'L' || theMap[x+40] == 'M' || theMap[x+40] == 'N' || theMap[x+40] == 'O' || theMap[x+40] == 'P'
            || theMap[x+40] == '[' || theMap[x+40] == ']'))
         {MapD = 1;}

         if(MapA == 1 && MapB == 1 && MapC == 1 && MapD == 1){setNext('~', 'criver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1 && MapC == 1)   {setNext('O', 'wneriver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1 && MapD == 1)   {setNext('N', 'swnriver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapC == 1 && MapD == 1)   {setNext('P', 'nesriver.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapC == 1 && MapD == 1)   {setNext('M', 'eswriver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapB == 1)         {setNext('K', 'wnriver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapC == 1)         {setNext('L', 'neriver.gif', 0); Bargle(x);}
         else if(MapA == 1 && MapD == 1)         {setNext('}', 'vriver.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapC == 1)         {setNext('{', 'hriver.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapD == 1)         {setNext('J', 'swriver.gif', 0); Bargle(x);}
         else if(MapC == 1 && MapD == 1)         {setNext('I', 'esriver.gif', 0); Bargle(x);}
         else if(MapA == 1 || MapD == 1)         {setNext('}', 'vriver.gif', 0); Bargle(x);}
         else if(MapB == 1 || MapC == 1)         {setNext('{', 'hriver.gif', 0); Bargle(x);}
      }
      if(theMap[x] == '[' || theMap[x] == ']')
      {
         if(x >= 40 && (theMap[x-40] == '{' || theMap[x-40] == '}' || theMap[x-40] == '~' || theMap[x-40] == 'I' || theMap[x-40] == 'J'
          || theMap[x-40] == 'K' || theMap[x-40] == 'L' || theMap[x-40] == 'M' || theMap[x-40] == 'N' || theMap[x-40] == 'O' || theMap[x-40] == 'P'
            || theMap[x-40] == '[' || theMap[x-40] == ']'))
         {MapA = 1;}
         if(x%40 != 0 && (theMap[x-1] == '{' || theMap[x-1] == '}' || theMap[x-1] == '~' || theMap[x-1] == 'I' || theMap[x-1] == 'J'
          || theMap[x-1] == 'K' || theMap[x-1] == 'L' || theMap[x-1] == 'M' || theMap[x-1] == 'N' || theMap[x-1] == 'O' || theMap[x-1] == 'P'
            || theMap[x-1] == '[' || theMap[x-1] == ']'))
         {MapB = 1;}
         if((x+1)%40 != 0 && (theMap[x+1] == '{' || theMap[x+1] == '}' || theMap[x+1] == '~' || theMap[x+1] == 'I' || theMap[x+1] == 'J'
          || theMap[x+1] == 'K' || theMap[x+1] == 'L' || theMap[x+1] == 'M' || theMap[x+1] == 'N' || theMap[x+1] == 'O' || theMap[x+1] == 'P'
            || theMap[x+1] == '[' || theMap[x+1] == ']'))
         {MapC = 1;}
         if(x < 1560 && (theMap[x+40] == '{' || theMap[x+40] == '}' || theMap[x+40] == '~' || theMap[x+40] == 'I' || theMap[x+40] == 'J'
          || theMap[x+40] == 'K' || theMap[x+40] == 'L' || theMap[x+40] == 'M' || theMap[x+40] == 'N' || theMap[x+40] == 'O' || theMap[x+40] == 'P'
            || theMap[x+40] == '[' || theMap[x+40] == ']'))
         {MapD = 1;}

         if(MapA == 1 && MapD == 1)         {setNext('[', 'hbridge.gif', 0); Bargle(x);}
         else if(MapB == 1 && MapC == 1)         {setNext(']', 'vbridge.gif', 0); Bargle(x);}
         else if(MapA == 1 || MapD == 1)         {setNext('[', 'hbridge.gif', 0); Bargle(x);}
         else if(MapB == 1 || MapC == 1)         {setNext(']', 'vbridge.gif', 0); Bargle(x);}
      }
   }
   theDown = 0;
}

//-->
</script>

</head>
<body bgcolor="#4F4F4F" onmouseup="Budapest()">

<?php
extract($_GET);

echo"
<div style=\"position:absolute; top: 750; left: 50px;\"><h1>AWBW Map Editor by Nyvelion</h1></div>
<DIV STYLE=\"position:absolute; top:32px; left:696px;\">
<form>

<a href=\"javascript: setNext('a', 'neutralcity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neutralcity.gif'></a>
<a href=\"javascript: setNext('b', 'neutralbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neutralbase.gif'></a>
<a href=\"javascript: setNext('c', 'neutralairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neutralairport.gif'></a>
<a href=\"javascript: setNext('d', 'neutralport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neutralport.gif'></a>
<BR>
<a href=\"javascript: setNext('e', 'orangestarcity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/orangestarcity.gif'></a>
<a href=\"javascript: setNext('f', 'orangestarbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/orangestarbase.gif'></a>
<a href=\"javascript: setNext('g', 'orangestarairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/orangestarairport.gif'></a>
<a href=\"javascript: setNext('h', 'orangestarport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/orangestarport.gif'></a>
<a href=\"javascript: setNext('i', 'orangestarhq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/orangestarhq.gif'></a>
<BR>
<a href=\"javascript: setNext('j', 'bluemooncity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/bluemooncity.gif'></a>
<a href=\"javascript: setNext('l', 'bluemoonbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/bluemoonbase.gif'></a>
<a href=\"javascript: setNext('m', 'bluemoonairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/bluemoonairport.gif'></a>
<a href=\"javascript: setNext('n', 'bluemoonport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/bluemoonport.gif'></a>
<a href=\"javascript: setNext('o', 'bluemoonhq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/bluemoonhq.gif'></a>
<BR>
<a href=\"javascript: setNext('p', 'greenearthcity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greenearthcity.gif'></a>
<a href=\"javascript: setNext('q', 'greenearthbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greenearthbase.gif'></a>
<a href=\"javascript: setNext('r', 'greenearthairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greenearthairport.gif'></a>
<a href=\"javascript: setNext('s', 'greenearthport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greenearthport.gif'></a>
<a href=\"javascript: setNext('t', 'greenearthhq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greenearthhq.gif'></a>
<BR>
<a href=\"javascript: setNext('u', 'yellowcometcity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/yellowcometcity.gif'></a>
<a href=\"javascript: setNext('v', 'yellowcometbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/yellowcometbase.gif'></a>
<a href=\"javascript: setNext('w', 'yellowcometairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/yellowcometairport.gif'></a>
<a href=\"javascript: setNext('x', 'yellowcometport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/yellowcometport.gif'></a>
<a href=\"javascript: setNext('y', 'yellowcomethq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/yellowcomethq.gif'></a>
<BR>
<a href=\"javascript: setNext('1', 'blackholecity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/blackholecity.gif'></a>
<a href=\"javascript: setNext('2', 'blackholebase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/blackholebase.gif'></a>
<a href=\"javascript: setNext('3', 'blackholeairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/blackholeairport.gif'></a>
<a href=\"javascript: setNext('4', 'blackholeport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/blackholeport.gif'></a>
<a href=\"javascript: setNext('5', 'blackholehq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/blackholehq.gif'></a>
<BR>
<a href=\"javascript: setNext('U', 'redfirecity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/redfirecity.gif'></a>
<a href=\"javascript: setNext('T', 'redfirebase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/redfirebase.gif'></a>
<a href=\"javascript: setNext('S', 'redfireairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/redfireairport.gif'></a>
<a href=\"javascript: setNext('R', 'redfireport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/redfireport.gif'></a>
<a href=\"javascript: setNext('Q', 'redfirehq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/redfirehq.gif'></a>
<BR>
<a href=\"javascript: setNext('Z', 'greyskycity.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greyskycity.gif'></a>
<a href=\"javascript: setNext('Y', 'greyskybase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greyskybase.gif'></a>
<a href=\"javascript: setNext('X', 'greyskyairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greyskyairport.gif'></a>
<a href=\"javascript: setNext('W', 'greyskyport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greyskyport.gif'></a>
<a href=\"javascript: setNext('V', 'greyskyhq.gif', 15);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/greyskyhq.gif'></a>
<BR>
<a href=\"javascript: setNext('6', 'browndesertcity.gif', 4);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/browndesertcity.gif'></a>
<a href=\"javascript: setNext('7', 'browndesertbase.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/browndesertbase.gif'></a>
<a href=\"javascript: setNext('8', 'browndesertairport.gif', 2);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/browndesertairport.gif'></a>
<a href=\"javascript: setNext('9', 'browndesertport.gif', 6);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/browndesertport.gif'></a>
<BR>
<a href=\"javascript: setNext('_', 'amberblazecomtower.gif', 9);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/amberblazecomtower.gif'></a>
<BR>
<a href=\"javascript: setNext('.', 'plain.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/plain.gif'></a>
<a href=\"javascript: setNext('@', 'wood.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/wood.gif'></a>
<a href=\"javascript: setNext('^', 'mountain.gif', 5);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/mountain.gif'></a>
<a href=\"javascript: setNext(',', 'sea.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/sea.gif'></a>
<a href=\"javascript: setNext('%', 'reef.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/reef.gif'></a>
<BR>
<a href=\"javascript: setNext('(', 'hshoaln.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/hshoaln.gif'></a>
<a href=\"javascript: setNext(')', 'vshoale.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/vshoale.gif'></a>
<a href=\"javascript: setNext('<', 'hshoal.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/hshoal.gif'></a>
<a href=\"javascript: setNext('>', 'vshoal.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/vshoal.gif'></a>
<BR>
<a href=\"javascript: setNext('-', 'hroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/hroad.gif'></a>
<a href=\"javascript: setNext('=', 'vroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/vroad.gif'></a>
<a href=\"javascript: setNext('A', 'esroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/esroad.gif'></a>
<a href=\"javascript: setNext('B', 'swroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/swroad.gif'></a>
<a href=\"javascript: setNext('C', 'wnroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/wnroad.gif'></a>
<a href=\"javascript: setNext('D', 'neroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neroad.gif'></a>
<a href=\"javascript: setNext('E', 'eswroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/eswroad.gif'></a>
<a href=\"javascript: setNext('F', 'swnroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/swnroad.gif'></a>
<a href=\"javascript: setNext('G', 'wneroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/wneroad.gif'></a>
<a href=\"javascript: setNext('H', 'nesroad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/nesroad.gif'></a>
<a href=\"javascript: setNext('+', 'croad.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/croad.gif'></a>
<BR>
<a href=\"javascript: setNext('{', 'hriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/hriver.gif'></a>
<a href=\"javascript: setNext('}', 'vriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/vriver.gif'></a>
<a href=\"javascript: setNext('I', 'esriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/esriver.gif'></a>
<a href=\"javascript: setNext('J', 'swriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/swriver.gif'></a>
<a href=\"javascript: setNext('K', 'wnriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/wnriver.gif'></a>
<a href=\"javascript: setNext('L', 'neriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/neriver.gif'></a>
<a href=\"javascript: setNext('M', 'eswriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/eswriver.gif'></a>
<a href=\"javascript: setNext('N', 'swnriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/swnriver.gif'></a>
<a href=\"javascript: setNext('O', 'wneriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/wneriver.gif'></a>
<a href=\"javascript: setNext('P', 'nesriver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/nesriver.gif'></a>
<a href=\"javascript: setNext('~', 'criver.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/criver.gif'></a>
<BR>
<a href=\"javascript: setNext('[', 'hbridge.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/hbridge.gif'></a>
<a href=\"javascript: setNext(']', 'vbridge.gif', 0);\"><img border=0 src='http://awbw.amarriner.com/terrain/aw2/vbridge.gif'></a>
<BR>
<a href=\"javascript: setNext('0', 'BLANK.gif', 0);\">(Black Square/Delete)</a>
</form>
</DIV>

";

for ($arnold = 0; $arnold < 40; $arnold += 1)
{
for ($waxman = 0; $waxman < 39; $waxman += 1)
{
$RepoBob = $arnold * 40 + $waxman;
$PaperAl = 32 + 16 * $waxman;
$DekuStu = 32 + 16 * $arnold;
echo '<div STYLE="border: 0px solid grey; position:absolute; top:'. $DekuStu .'px; left:'. $PaperAl .'px; z-index: 5;" id="a'. $RepoBob .'">
   <img src="BLANK.gif" onmousedown="Bargle('. $RepoBob. ')" onmouseup="Budapest()" onmouseover="YoYoYo('. $RepoBob. ')"></div>';
}
echo'<BR>';
}

echo'<div STYLE="position:absolute; top:32px; left:850px; z-index: 1;">
<INPUT TYPE="button" NAME="CurlyJoe" Value="Save" onClick="save()">
<INPUT TYPE="button" NAME="LarryMoe" Value="Load" onClick="load()">
<textarea id="mapcode" cols="40" rows="5"></textarea>
</div>';

echo'<div STYLE="position:absolute; top:200px; left:850px; z-index: 1;">
<INPUT TYPE="button" NAME="Cleric" Value="Road/River/Bridge/Shoal Fixer" onClick="roads()">
</div>';
echo'<div STYLE="position:absolute; top:200px; left:1074px; z-index: 1;">
<INPUT TYPE="button" NAME="Fighter" Value="Some Reefs" onClick="REEEEEEEEEEEEEEEEEEEEEFS()">
</div>';
echo'<div STYLE="position:absolute; top:225px; left:850px; z-index: 1;">
<INPUT TYPE="button" NAME="Rouge" Value="Toggle Gridline" onClick="wolffangfist()">
</div>';
echo'<div STYLE="position:absolute; top:225px; left:1000px; z-index: 1;">
<INPUT TYPE="button" NAME="Sorcerer" Value="Some Forests/Mountains" onClick="Killroy()">
</div>';
echo'<div STYLE="position:absolute; top:260px; left:850px; z-index: 1;">
<FONT COLOR="WHITE">Map Height (1-40):</FONT><BR>
<input type="text" id="theHHH" value=40><BR>
<FONT COLOR="WHITE">Map Width (1-39):</FONT><BR>
<input type="text" id="theWWW" value=39><BR>
<div id=\'Fill\'><a href="javascript: setFill(\'0\', \'BLANK.gif\', 0);">Fill With <img border=0 src="BLANK.gif"></a></div>

</div>';
echo'<div STYLE="position:absolute; top:260px; left:1000px; z-index: 1;">
<FONT COLOR="WHITE">Symmetry (Set size first):</FONT><BR>
<INPUT TYPE="button" NAME="Timmy" Value="Top -> Bottom (Flip)" onClick="MirrorMode(1, 1)"><BR>
<INPUT TYPE="button" NAME="Sarah" Value="Top -> Bottom (Diagonal)" onClick="MirrorMode(1, 2)"><BR>
<INPUT TYPE="button" NAME="Lester" Value="Left -> Right (Flip)" onClick="MirrorMode(2, 1)"><BR>
<INPUT TYPE="button" NAME="Bill" Value="Left -> Right (Diagonal)" onClick="MirrorMode(2, 2)"><BR>
<INPUT TYPE="button" NAME="Cassandra" Value="TopLeft -> All (Rotate)" onClick="MirrorMode(3, 1)">
</div>';
?>
</body>
</html>