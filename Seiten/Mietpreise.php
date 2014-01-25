<style type="text/css">
<!--
.Stil1 {color: #FF0000}
-->
</style>
<div class="feature"> 
	<h3>Die Mietpreise </h3>
</div> 
<div class="story"> 
	<h3>Mietpreise pro Woche</h3> 
	<p>
	<table border="1" cellspacing="1" cellpadding="5">
			<tr>
			<th width="200"> Wohnung</th>
      <th width="120"> Vorsaison</th>
      <th width="120"> Hochsaison</th>
			<th width="120"> Nebensaison</th>
		  <tr>
			<td> Datum </td>
			<td>
			23.3.13 &ndash; 5.7.13<br>
		    24.8.13 &ndash; 25.10.13</td>
			<td>6.7.13 &ndash; 23.8.13</td>
			<td> 27.10.12 – 22.3.13<br>
			26.10.13 &ndash; 11.4.14</td>
  </tr>
			<tr>
			<td> Hauptwohnung (max.5 Personen) </td>
			<td> CHF 700.- (560&euro;) </td> 
			<td> CHF 1050.- (840&euro;) </td>
			<td> CHF 210.- (168&euro;) </td> 
			</td>
			</tr>
			<tr>
			<td> Zusatzpreis für Einliegerwohnung<br> 
			(max. 2 Personen) </td>
			<td> CHF 280.- (224&euro;)</td>
			<td> CHF 420.- (336&euro;)</td>
			<td> CHF 70.- (56&euro;) </td>
			</tr>
	</table> 
</div>
<div class="story"> 
	<h3>Endreinigung und W&auml;sche obligatorisch (bei Schl&uuml;ssel&uuml;bergabe direkt der Verwaltung in Calpe zu bezahlen)</h3> 
	<p>
	 - 12 &euro; /Person f&uuml;r 1x Bettw&auml;sche, Handt&uuml;cher und K&uuml;chent&uuml;cher <br>
 	 - 80 &euro; Endreinigung f&uuml;r Hauptwohnung <br>
  - 65 &euro; Endreinigung f&uuml;r Einliegerwohnung    
</div>
<div class="story" style=" background-color:"> 
	<h3>Buchungskalender
	<form action="homepage_de.php?content=5&<?=SID?>&#KalenderLabel" method="post">
      <select name="Jahr">
        <?php
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2014){?>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <?php
			}
			else{?>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <?php
			}?>
      </select>		
      <input type="submit" name="Ok" value="Ok" />
	</form>
	</h3>
  	<p>
	<script type="text/javascript">
	var dateamf = '2013'
	var sprache = 'de' 
	</script>
	<?php
	$Jahr='2013';
	if(isset($_POST['Jahr']) and $_POST['Jahr']== 2014)
		{?>
	<script type="text/javascript">
	dateamf = '2014';
	</script>
	<?php
	$Jahr='2014';
		}
	?>
	<?php
	   include "inc/Kalender.php";	     
	?>
	<p align="center"> 
     <a href="http://www.espagne-vacances.ch/homepage_de.php?content=5&PHPSESSID=e016c1cab69adfb5fec4a81fe9875c44"><img  src="meinebilder/top.GIF"alt="Top" width="5%"></a></p>
</div>
 <a name="KalenderLabel"></a>
 
 