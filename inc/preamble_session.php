<?php

// Session starten und testen ob kein Fake dabei ist.
	
	session_start();
	//(ini_get('register_globals') == 1) or die("you must disable register_globals in php value for this script to function.");
    $serverID=$_SERVER['REMOTE_ADDR'];
    
	if(!isset($_SESSION['IP'])) {
	   $_SESSION['IP'] = $serverID;
	}
	if($_SESSION['IP'] != $serverID) {
		?>
	   <p>
	   Sie d�rfen nicht die Session von einem<br>
	   anderen user ben&uuml;tzen. Bitte benutzen sie<br>
	   folgenden Link um zur Homepage zu gelangen.<br>
	   <a href=%22homepage.php%22>Zur�ck zur Homepage</a><br>
	   </p>
	   <?php
	   die(); // Aus Sicherheitsgr�nden die Abarbeitung sofort beenden
}

   if(get_magic_quotes_gpc()) {
       array_stripslashes($_GET);
       array_stripslashes($_POST);
       array_stripslashes($_COOKIE);
   }
   
?>