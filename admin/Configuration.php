<div class="feature"> 
	<h3>Configuration</h3>
	<p>
	Sur cette page vous pouvez entrer vos donn�es personelles. Celle-ci sont cript�es et ne sont pas utilis�e � des fins publicitaires. </p>
    <?php
    if(isset($_POST['submit']) AND "Speichern" == $_POST['submit']) {
        if(!preg_match('/^\w+$/', trim($_POST['name']))) {?>
            <p>
            N'utiliser que des caract�res alphanum�riques(chiffres et lettres).
            </p>
			<?php
			} else {
				// ggf. eine Emailadresse �berpr�fung
				// siehe dazu http://www.php-faq.de/ > Regex
				$connection = connectDB('dbSpanien');
				if("3"==$_SESSION['ID'] OR "4"==$_SESSION['ID']){
					$sql = "INSERT INTO
								tbuser
							SET
								Name = '".trim($_POST['name'])."',
								Vorname = '".trim($_POST['Vorname'])."',
								Strasse = '".trim($_POST['Strasse'])."',
								PLZ = '".trim($_POST['PLZ'])."',
								Ort = '".trim($_POST['Ort'])."',
								Username = '".trim($_POST['Username'])."',
								Email = '".addslashes(trim($_POST['email']))."',
								Password = MD5('lacanuta13a')
								";
				}
				else{
					$sql = "UPDATE
								tbuser
							SET
								Name = '".trim($_POST['name'])."',
								Vorname = '".trim($_POST['Vorname'])."',
								Strasse = '".trim($_POST['Strasse'])."',
								PLZ = '".trim($_POST['PLZ'])."',
								Ort = '".trim($_POST['Ort'])."',
								Username = '".trim($_POST['Username'])."',
								Email = '".addslashes(trim($_POST['email']))."'
							WHERE
								ID = '".$_SESSION['ID']."';";
					// bei Name kein addslashes(), da Name eh
					// nur \w+ sein kann.
					}
					mysql_query($sql) OR die(mysql_error());
					mysql_close($connection);
			?>
			<p>
            Vos donn&eacute;es ont &eacute;t&eacute; enregistr&eacute;es.</p>
			<?php
        }
    }
    if(isset($_POST['submit']) AND "Neues Password speichern" == $_POST['submit']) {
        if($_SESSION['ID']=="3" OR$_SESSION['ID']=="4"){
			?>	<p class=error>
					Bitte geben sie zuerst einen neuen Benutzername ein bevor Sie das Passwort �ndern
				</p><?php
			}
			else{
			
			
			if(trim($_POST['password']) == "") {
				?>
				<p class=error>
				Le mot de passe &agrave; enregistrer est manquant. Veuillez saisir un mot de passe. </p>
				<?php
			} elseif(trim($_POST['password']) != trim($_POST['password2'])) {
				?>
				<p class=error>
				Veuillez entrez deux mot de passe identique. </p>
				<?php
			} else {
				$sql = "UPDATE
							tbuser
						SET
							Password = MD5('".trim($_POST['password'])."')
						WHERE
							ID = '".$_SESSION['ID']."';";
				$mysqli = connectDB('dbSpanien');
                $res = $mysqli->query($sql) OR die(mysql_error());        
                $row = $res->fetch_assoc();
                $mysqli->close();
				?>
				<p>
				Votre mot de passe &agrave; &eacute;t&eacute; enregistr&eacute;. Vous n'avez pas &agrave; vous reconnecter.</p>
				<?php
			}
		}
    }
    $sql = "SELECT
                Name,
				Vorname,
				Strasse,
				PLZ,
				Ort,
				Username,
                Email
            FROM
                tbuser
            WHERE
                ID = '".$_SESSION['ID']."';";
	$mysqli = connectDB('dbSpanien');
    $res = $mysqli->query($sql) OR die(mysql_error());        
    $row = $res->fetch_assoc();
    $mysqli->close();
	//Einlesen der Daten fertig
	?>
</div> 
<div class="story"> 
	<h3>Configurer ses donn&eacute;es personelles. </h3>
	<form action="homepage_fr.php?content=14&<?=SID?>" method="post" class="formular">
    		<ol>
    			<p></p>
				<label for="name">Nom</label>
				<input type="text" name="name" id="name" value="<?=$row['Name']?> "/>
				</p>
				<p>
				<label for="Vorname">Pr&eacute;nom:</label>
				<input type="text" name="Vorname" id="Vorname" value="<?=$row['Vorname']?> "/>
				</p>
				<p>
				<label for="Strasse">Adresse:</label>
				<input type="text" name="Strasse" id="Strasse" value="<?=$row['Strasse']?> "/>
				</p>
				<p>
				<label for="PLZ">PLZ:</label>
				<input type="text" name="PLZ" id="PLZ" value="<?=$row['PLZ']?> "/>
				</p>
				<p>
				<label for="Ort">Adresse:</label>
				<input type="text" name="Ort" id="Ort" value="<?=$row['Ort']?> "/>
				</p>
				<p>
				<label for="Username">Nom d' utilisateur:</label>
				<input type="text" name="Username" id="Username" value="<?=$row['Username']?> "/>
				</p>
				<p>
				<label for="email">Adresse e-mail: <label>
				<input type="text" name="email" id="email" value="<?=$row['Email'] ?>">
				</p>
				<p>
				<input type="submit" name="submit" value="Enregistrer" />
				<input type="reset" name="submit" value="Effacer" />
				<input type="hidden" name="<?=session_name() ?>" value="<?=session_id()?>"/>
				</p>
			</ol>
		</form>
	<hr>
</div> 
<div class="story"> 
	 <h3>Modifier le mot de passe </h3>
		<form action="homepage_fr.php?content=14&<?=SID?>" method="post" class="formular">
			<ol>
				<p>
				<label for="password">Nouveau mot de passe: </label>
				<input type="password" name="password" id="password" />
				</p>
				<p>
				<label for="password2">Confirmation du mot de passe: </label>
				<input type="password" name="password2" id="password2" />
				</p>
				<p>
				<input type="submit" name="submit" value="Enregistrer le nouveau mot de passe" />
				<input type="reset" name="submit" value="Effacer" />
				<input type="hidden" name="<?=session_name() ?>" value="<?=session_id()?>" />
				</p>
			</ol>
		</form>
</div>	

