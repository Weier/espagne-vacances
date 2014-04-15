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
	<table border="1" cellspacing="1" cellpadding="5">
			<tr>
			<th width="200"> Wohnung</th>
      <th width="200"> Vorsaison</th>
      <th width="200"> Hochsaison</th>
			<th width="200"> Nebensaison</th>
		  <tr>
			<td> Datum </td>
			<td>
			12.04.2014 &ndash; 04.07.2014<br>
		    25.08.2014 &ndash; 26.10.2014</td>
			<td>05.07.2014 &ndash; 24.08.2014</td>
			<td> 28.10.2013 &ndash; 11.04.2014<br>
			27.10.2013 &ndash; 02.04.2015</td>
  </tr>
			<tr>
			<td> Hauptwohnung<br>(max.5 Personen) </td>
			<td> CHF 700.- (560&euro;) </td> 
			<td> CHF 1050.- (840&euro;) </td>
			<td> CHF 315.- (250&euro;) </td> 
			</td>
			</tr>
			<tr>
			<td> Zusatzpreis f&uuml;r Einliegerwohnung<br> 
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
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2015){?>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <?php
			}
			else{?>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <?php
			}?>
      </select>		
      <input type="submit" name="Ok" value="Ok" />
	</form>
	</h3>
  	<p>
	<script type="text/javascript">
	var dateamf = '2014'
	var sprache = 'de' 
	</script>
	<?php
	$Jahr='2014';
	if(isset($_POST['Jahr']) and $_POST['Jahr']== 2015)
		{
	?>
	<script type="text/javascript">
	dateamf = '2015';
	</script>
	<?php
	$Jahr='2015';
		}
	?>
	<?php
	   include "inc/Kalender.php";	     
	?>
	<p align="center"> 
     <a href="http://www.espagne-vacances.ch/homepage_de.php?content=5&PHPSESSID=e016c1cab69adfb5fec4a81fe9875c44"><img  src="meinebilder/top.GIF"alt="Top" width="5%"></a></div>
 <a name="KalenderLabel"></a>
 
 