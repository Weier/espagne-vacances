<style type="text/css">
<!--
.Stil1 {color: #FF0000}
-->
</style>
<div class="feature"> 
	<h3>Les prix de locations</h3>
</div> 
<div class="story"> 
	<h3>Prix de location par semaine</h3>
	<table border="1" cellspacing="1" cellpadding="5">
			<tr>
			<th width="260"> Appartement</th>
      <th width="120"> Avant Saison</th>
      <th width="120"> Haute Saison</th>
			<th width="120"> Hors Saison</th>
		  <tr>
			<td> Dates </td>
			<td> 
			23.3.13 &ndash; 5.7.13<br>
		    24.8.13 &ndash; 25.10.13</td>
			<td>6.7.13 &ndash; 23.8.13</td>
			<td> 27.10.12 – 22.3.13<br>
			26.10.13 &ndash; 11.4.14</td>
		  </tr>
			<tr>
			<td> Appartement principal (max. 5 personnes)
			</td>
			<td> CHF 700.- (560&euro;) </td> 
			<td> CHF 1050.- (840&euro;) </td>
			<td> CHF 210.- (168&euro;) </td> 
			</td>
			</tr>
			<tr>
			<td> Supplément pour appartement inf&eacute;rieur<br>
			     (max. 2 personnes)</td>
			<td> CHF 280.- (224&euro;)</td>
			<td> CHF 420.- (336&euro;)</td>
			<td> CHF 70.- (56&euro;) </td>
			</tr>
				</table>
</div> 
<div class="story"> 
	<h3>Nettoyage final et linges obligatoire &agrave; payer sur place lors de la remise des clefs</h3> 
	<p>
	 - 12 &euro; /p.p. et par change pour serviettes de bain, linges de lit et linges de cuisine<br>
 	 - 80 &euro; nettoyage final de l'appartement principal<br>
     - 65 &euro; nettoyage final de l'appartement inf&eacute;rieur. 
</div>
<div class="story" style=" background-color:"> 
	<h3>Calendrier de locations
	<form action="homepage_fr.php?content=5&<?=SID?>&#calenderLabel" method="post">
		<select name="Jahr">
		<?php
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2014){?> <!--das 2. Jahr --> 
			<option value="2014">2014</option>				   <!--das 2. Jahr --> 
		 	<option value="2013">2013</option> 		           <!--das 1. Jahr --> <?php
			}
			else{?> 
			<option value="2013">2013</option> 					<!--das 1. Jahr --> 
		 	<option value="2014">2014</option>					<!--das 2. Jahr --> <?php
			}?>
		  
	  </select>
		<input type="submit" name="Ok" value="Ok" />
	</form>
	</h3>
  	<p>
	<script type="text/javascript">
		var dateamf = '2013'
		var sprache = 'fr' 
	</script>
	<?php
		$Jahr='2013';
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2014)
		{		
	?>    
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
      <a href="http://www.espagne-vacances.ch/homepage_fr.php?content=5&PHPSESSID=e9651004fc01971f2d7fecb3232c11cdc"><img  src="meinebilder/top.GIF"alt="en haut" width="5%"></a></div>
 <a name="calenderLabel"></a>
 
 
 
 
 

