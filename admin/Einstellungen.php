<div class="feature"> 
	<h3>Einstellungen</h3>
	<p>
	Sie k&ouml;nnen auf dieser Seite Ihre pers&ouml;nlichen Daten eingeben und &auml;ndern. Alle diese Eingaben werden nicht weitergegeben und werden desshalb auch nicht f&uuml;r Span gebraucht. </p>
    <?php
	
	if(isset($_POST['submit']) AND "Speichern" == $_POST['submit']) {
			if(!preg_match('/^\w+$/', trim($_POST['name']))) {?>
				<p>
				Bitte benutzen sie einen Name nur aus alphanumerischen Zeichen (Zahlen und Buchstaben).
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
					?><p>
					Ihre Daten wurde gespeichert.
					</p><?php
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
					?><p class=error>
					Bitte geben sie ein Password ein, welches ich auch Speichern soll.
					</p><?php
				} elseif(trim($_POST['password']) != trim($_POST['password2'])) {
					?><p class=error>
					Bitte geben sie 2 gleiche Passw�rter ein.
					</p><?php
				} else {
					$sql = "UPDATE
								tbuser
							SET
								Password = MD5('".trim($_POST['password'])."')
							WHERE
								ID = '".$_SESSION['ID']."';";
					$connection = connectDB('dbSpanien');
					mysql_query($sql) OR die(mysql_error());
					mysql_close($connection);
					?><p>
					Das Password wurde gespeichert. Sie brauchen sich nicht neu einloggen.
					</p><?php
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
		$connection = connectDB('dbSpanien');
		$result = mysql_query($sql) OR die(mysql_error());
		$row = mysql_fetch_assoc($result);
		mysql_close($connection);
		//Einlesen der Daten fertig
	?>
</div> 
<div class="story"> 
	<h3>Pers&ouml;nliche Daten einstellen</h3>
	<form action="homepage_de.php?content=14&<?=SID?>" method="post" class="formular">
    		<ol>
    			<p></p>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" value="<?=$row['Name']?> "/>
				</p>
				<p>
				<label for="Vorname">Vorname</label>
				<input type="text" name="Vorname" id="Vorname" value="<?=$row['Vorname']?> "/>
				</p>
				<p>
				<label for="Strasse">Strasse</label>
				<input type="text" name="Strasse" id="Strasse" value="<?=$row['Strasse']?> "/>
				</p>
				<p>
				<label for="PLZ">PLZ</label>
				<input type="text" name="PLZ" id="PLZ" value="<?=$row['PLZ']?> "/>
				</p>
				<p>
				<label for="Ort">Ort</label>
				<input type="text" name="Ort" id="Ort" value="<?=$row['Ort']?> "/>
				</p>
				<p>
				<label for="Username">Benutzername</label>
				<input type="text" name="Username" id="Username" value="<?=$row['Username']?> "/>
				</p>
				<p>
				<label for="email">E-mail Adresse<label>
				<input type="text" name="email" id="email" value="<?=$row['Email'] ?>">
				</p>
				<p>
				<input type="submit" name="submit" value="Speichern" />
				<input type="reset" name="submit" value="Zur&uuml;cksetzen" />
				<input type="hidden" name="<?=session_name() ?>" value="<?=session_id()?>"/>
				</p>
			</ol>
		</form>
	<hr>
</div> 
<div class="story"> 
	 <h3>Passwort &auml;ndern</h3>
		<form action="homepage_de.php?content=14&<?=SID?>" method="post" class="formular">
			<ol>
				<p>
				<label for="password">Neues Password</label>
				<input type="password" name="password" id="password" />
				</p>
				<p>
				<label for="password2">Best&auml;tigung</label>
				<input type="password" name="password2" id="password2" />
				</p>
				<p>
				<input type="submit" name="submit" value="Neues Password speichern" />
				<input type="reset" name="submit" value="Zur&uuml;cksetzen" />
				<input type="hidden" name="<?=session_name() ?>" value="<?=session_id()?>" />
				</p>
			</ol>
		</form>
</div>	

