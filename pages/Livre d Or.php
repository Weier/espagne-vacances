<div class="feature"> 
	<h3>Livre d'Or </h3>
	
    <p>
     
    </p> 
</div> 
<div class="story"> 
	<h3></h3> 
	<p>

	<form action="homepage_fr.php?content=10&<?=SID?>&action=2" method="post">
		<?php
		if(isset($_GET['action']) AND $_GET['action'] == 2)
		{
			$resultValue = saveMessageInDB(); //sagt, ob gespeichert oder fehler, wenn fehler, die nummer des feldes
			switch($resultValue)
			{
			case 0;
			?>
			<p>Votre nom : <br>
			  <input type="text" name="name" /></p>
			<p>Votre pr&eacute;nom: <br>
	  <input type="text" name="prename" /></p>
			<p>Votre Texte <br>
			<textarea name="text" ROWS="8" COLS="30" ></TEXTAREA></p>
			<p>Votre adresse e-mail: <br>
	  <input type="text" name="mail" /></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Enregistrement de votre message &eacute;ffectu&eacute;. </font>
			<?php
			break;
			case 1;
			?>
			<p>Votre nom: <br><input type="text" name="name" /></p>
			<p>Votre pr&eacute;nom: <br><input type="text" name="prename" value="<?=$_POST['prename']?>"/></p>
			<p>Votre Texte:<br>
			<textarea name="text" ROWS="8" COLS="30"  ><?=$_POST['text']?></TEXTAREA></p>
			<p>Votre adresse e-mail: <br><input type="text" name="mail" value="<?=$_POST['mail']?>"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Nom trop long </font>
			<?php
			break;
			case 2;
			?>
			<p>Ihr Name: <br><input type="text" name="name" value="<?=$_POST['name']?>" /></p>
			<p>Votre pr&eacute;nom:<br>
	  <input type="text" name="prename"/></p>
			<p>Votre Texte:<br>
	  <textarea name="text" ROWS="8" COLS="30" ><?=$_POST['text']?></TEXTAREA></p>
			<p>Votre adresse e-mail: <br><input type="text" name="mail" value="<?=$_POST['mail']?>"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Pr&eacute;nom trop long</font>
			<?php
			break;
			case 3;
			?>
			<p>Votre nom:<br><input type="text" name="name" value="<?=$_POST['name']?>" /></p>
			<p>Votre pr&eacute;nom:<br><input type="text" name="prename" <?=$_POST['prename']?>/></p>
			<p>Votre Texte:<br>
			<textarea name="text" ROWS="8" COLS="30"><?=$_POST['text']?></TEXTAREA></p>
			<p>Votre adresse e-mail: <br><input type="text" name="mail"/></p>
			<p><input type="submit" /></p>
			<font color="#FF0000">Adresse e-mail trop longue</font>
			<?php
			break;
			}
		}
		else
		{
		?>
			<p>Votre nom:<br><input type="text" name="name" /></p>
			<p>Votre pr&eacute;nom:<br><input type="text" name="prename" /></p>
			<p>Votre Texte:<br>
			<textarea name="text" ROWS="8" COLS="30" ></TEXTAREA></p>
			<p>Votre adresse e-mail: <br><input type="text" name="mail" /></p>
			<p><input type="submit" /></p>
		<?php
		}
		?>		  	
  </form>
		<hr>
		<?php
		loadMessagesFromDB('dbSpanien')
		?>
	 
	</p> 
	<p>
	 
	</p>
	 
</div>
