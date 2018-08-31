<script language="JavaScript">
<!-- gebuchte Daten -->
<?php 
	$row=Kalenderdaten($Jahr,'Gebucht');
	print "var gebucht=new Array($row);";
?>

<!-- vorsaison Daten -->
<?php 
	$row=Kalenderdaten($Jahr,'Vorsaison');
	print "var vorsaison=new Array($row);";
?>
if(sprache=='fr'){
	var vorsaisonpreis='CHF: appartement sup 700.-   / toute la maison 980.-';
	}
if(sprache=='de'){
	var vorsaisonpreis='CHF: Die obere Wohnung 700.-  / Das ganze Haus 980.-';
	}

<!-- hochsaison Daten -->
<?php 
	$row=Kalenderdaten($Jahr,'Hochsaison');
	print "var hochsaison=new Array($row);";
?>
if(sprache=='fr'){
	var hochsaisonpreis='CHF: appartement sup 1050.-   / toute la maison 1470.-';
	}
if(sprache=='de'){
	var hochsaisonpreis='CHF: Die obere Wohnung 1050.-  / Das ganze Haus 1470.-';
	}

<!-- nebensaison Daten -->
<?php 
	$row=Kalenderdaten($Jahr,'Nebensaison');
	print "var nebensaison=new Array($row);";
?>

if(sprache=='fr'){
	var nebensaisonpreis='Prix à discuter';
	}
if(sprache=='de'){
	var nebensaisonpreis='Preise nach Absprache';
	}
	
<!--  Monate -->
if(sprache=='de'){
var mois=new Array("Januar","Februar","M&aumlrz","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember");}
else{
	var mois=new Array("Janvier","F&eacutevrier","Mars","Avril","Mai","Juin","Juillet","Ao&ucirct","Septembre","Octobre","Novembre","D&eacutecembre");
	}

function disp(txt) { document.write(txt) }

function istgebucht(j,m) {
var nb=gebucht.length;
var test=false;
for(var i=0;i<nb;i++) {
if ((gebucht[i].substring(0,2)==j)&&(gebucht[i].substring(3,5)==m)) return true;
}
return false;
}

function istvorsaison(j,m) {
var nb=vorsaison.length;
var test=false;
for(var i=0;i<nb;i++) {
if ((vorsaison[i].substring(0,2)==j)&&(vorsaison[i].substring(3,5)==m)) return true;
}
return false;
}

function isthochsaison(j,m) {
var nb=hochsaison.length;
var test=false;
for(var i=0;i<nb;i++) {
if ((hochsaison[i].substring(0,2)==j)&&(hochsaison[i].substring(3,5)==m)) return true;
}
return false;
}

function istnebensaison(j,m) {
var nb=nebensaison.length;
var test=false;
for(var i=0;i<nb;i++) {
if ((nebensaison[i].substring(0,2)==j)&&(nebensaison[i].substring(3,5)==m)) return true;
}
return false;
}

function calendar(m, a) {
var d_jour=new Date();
var d=new Date(a,m-1,1);
var dfin=new Date(a,m-1,1);
var nb_jour=31;
var aff_j="";
for(var k=32;k>27;k--) {
dfin.setMonth(m-1); //lwf
dfin.setDate(k);
if (dfin.getMonth()!=m-1) {nb_jour=k-1;}
}

var j1=d.getDay(); if (j1==0) j1=7;
var jour=0;
disp("<br><font  face=Verdana color=#FFCC00><CENTER><B>"+mois[d.getMonth()]+" "+a+"</B></CENTER></FONT>");
disp("<TABLE border=0 bgcolor='#0069B3' cellspacing=0 cellpadding='1'>");
if(sprache=='de'){
disp("<TR align='center' bgcolor='#B8C8FE'><TD width='10'><font face=Verdana>Mo</FONT></TD><TD width='10'><font face=Verdana>Di</FONT></TD><TD width='10'><font face=Verdana>Mi</FONT></TD><TD width='10'><font face=Verdana>Do</FONT></TD><TD width='10'><font face=Verdana>Fr</FONT></TD><TD width='10'><font face=Verdana>Sa</FONT></TD><TD width='10'><font face=Verdana>So</FONT></TD></TR>");}
else{
disp("<TR align='center' bgcolor='#B8C8FE'><TD width='10'><font face=Verdana>Lu</FONT></TD><TD width='10'><font face=Verdana>Ma</FONT></TD><TD width='10'><font face=Verdana>Me</FONT></TD><TD width='10'><font face=Verdana>Je</FONT></TD><TD width='10'><font face=Verdana>Ve</FONT></TD><TD width='10'><font face=Verdana>Sa</FONT></TD><TD width='10'><font face=Verdana>Di</FONT></TD></TR>");
}

for(var i=0;i<6;i++) {
disp("<TR>");
for (j=0;j<7;j++) {
jour=7*i+j-j1+2;
aff_j=jour;
if ((jour==d_jour.getDate())&&(m==d_jour.getMonth()+1)) {aff_j="<FONT  color='#CC0000' face='Verdana'>"+jour+"</FONT>";}
if ((7*i+j>=j1-1)&&(jour<=nb_jour)) {
	if (istgebucht(jour,m)) disp("<TD width='10' bgcolor='#FF0000' align='center' ><FONT face='Verdana'  color='#000000'>"+aff_j+"</FONT></TD>");
	else
	if (istvorsaison(jour,m)) disp("<TD width='10' bgcolor='#00FF00' align='center' title='"+vorsaisonpreis+"'><FONT face='Verdana'  color='#000000'>"+aff_j+"</FONT></TD>");
	else
	if (isthochsaison(jour,m)) disp("<TD width='10' bgcolor='#FFFF00' align='center'title='"+hochsaisonpreis+"'><FONT face='Verdana'  color='#000000'>"+aff_j+"</FONT></TD>");
	else
	if (istnebensaison(jour,m)) disp("<TD width='10' bgcolor='#CCFFCC' align='center'title='"+nebensaisonpreis+"'><FONT face='Verdana'  color='#000000'>"+aff_j+"</FONT></TD>");
else disp("<TD width='10' bgcolor='#FFFFFF' align='center'><FONT face='Verdana'  color='#000000'>"+aff_j+"</FONT></TD>");
}
else disp("<TD width='10' bgcolor='#FFFFFF'><FONT size=-1> </TD>");

}
disp("</TR>");
}
disp("</TABLE>");
}
function annee(an) {
disp("<TABLE cellspacing=10>");
for (var i=0;i<3;i++) {
disp("<TR>");
for (var j=0;j<4;j++) {
disp("<TD align='center'>");
calendar(i*4+j+1,an);
disp("</TD>");
}
}
disp("</TABLE>");
}
</script>
<script language="JavaScript">
if(sprache=='de'){
disp("<table width='100' border='0' cellspacing='1'><tr><td bgcolor='#FF0000' style=' border-style:solid; border-width:thin '>&nbsp;</td><td>Gebucht</td><td>&nbsp;</td><td bgcolor='#00FF00'style=' border-style:solid; border-width:thin ' title='"+vorsaisonpreis+"'>&nbsp;</td><td title='"+vorsaisonpreis+"'>Vorsaison</td><td>&nbsp;</td><td bgcolor='#FFFF00'style=' border-style:solid; border-width:thin ' title='"+hochsaisonpreis+"'>&nbsp;</td><td title='"+hochsaisonpreis+"'>Hochsaison</td><td>&nbsp;</td><td bgcolor='#CCFFCC' style=' border-style:solid; border-width:thin ' title='"+nebensaisonpreis+"'>&nbsp;</td><td title='"+nebensaisonpreis+"'>Nebensaison</td></tr></table>");}
if(sprache=='fr'){
disp("<table width='100' border='0' cellspacing='1'><tr><td bgcolor='#FF0000' style=' border-style:solid; border-width:thin '>&nbsp;</td><td>R&eacuteserv&eacute</td><td>&nbsp;</td><td bgcolor='#00FF00'style=' border-style:solid; border-width:thin ' title='"+vorsaisonpreis+"'>&nbsp;</td><td title='"+vorsaisonpreis+"'>Avant Saison</td><td>&nbsp;</td><td bgcolor='#FFFF00'style=' border-style:solid; border-width:thin '  title='"+hochsaisonpreis+"'>&nbsp;</td><td title='"+hochsaisonpreis+"'>Haute Saison</td><td>&nbsp;</td><td bgcolor='#CCFFCC' style=' border-style:solid; border-width:thin ' title='"+nebensaisonpreis+"'>&nbsp;</td><td title='"+nebensaisonpreis+"'>Hors Saison</td></tr></table>");
}

</script>


<script language="JavaScript">
annee(dateamf);
</script>
