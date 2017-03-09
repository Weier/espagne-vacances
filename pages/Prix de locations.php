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
			<th width="220"> Appartement</th>
      <th width="180"> Avant Saison</th>
      <th width="180"> Haute Saison</th>
			<th width="180"> Hors Saison</th>
		  <tr>
			<td> Dates </td>
			<td> 
			08.04.2017 &ndash; 30.06.2017<br>
		    21.08.2017 &ndash; 22.10.2017</td>
			<td>01.07.2017 &ndash; 20.08.2017</td>
			<td> 31.10.2016 &ndash; 07.04.2017<br>
			23.10.2017 &ndash; 30.03.2018</td>
		  </tr>
			<tr>
			<td> Appartement principal<br>(max. 5 personnes)
			</td>
			<td> CHF 700.- (635&euro;) </td> 
			<td> CHF 1050.- (950&euro;) </td>
			<td> CHF 315.- (285&euro;) </td> 
			</td>
			</tr>
			<tr>
			<td> Suppl&eacute;ment pour appartement inf&eacute;rieur (max. 2 personnes)
			</td>
			<td> CHF 280.- (250&euro;)</td>
			<td> CHF 420.- (380&euro;)</td>
			<td> CHF 70.- (65&euro;) </td>
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
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2018){?> <!--das 2. Jahr --> 
			<option value="2018">2018</option>				   <!--das 2. Jahr --> 
		 	<option value="2017">2017</option> 		           <!--das 1. Jahr --> <?php
			}
			else{?> 
			<option value="2017">2017</option> 					<!--das 1. Jahr --> 
		 	<option value="2018">2018</option>					<!--das 2. Jahr --> <?php
			}?>
		  
	  </select>
		<input type="submit" name="Ok" value="Ok" />
	</form>
	</h3>
  	<p>
	<script type="text/javascript">
		var dateamf = '2017'
		var sprache = 'fr' 
	</script>
	<?php
		$Jahr='2017';
		if(isset($_POST['Jahr']) and $_POST['Jahr']== 2018)
		{		
	?>    
    <script type="text/javascript">
		dateamf = '2018';
	</script>
    <?php
		$Jahr='2018';
    	}
	?>
	
	<?php
	   include "inc/Kalender.php";	     
	?>
	<p align="center"> 
      <a href="http://www.espagne-vacances.ch/homepage_fr.php?content=5&PHPSESSID=e9651004fc01971f2d7fecb3232c11cdc"><img  src="meinebilder/top.GIF"alt="en haut" width="5%"></a></div>
 <a name="calenderLabel"></a>
 
 
 
 
 

