
<?php
    function array_stripslashes(&$var)
    {
        if(is_string($var)) {
            $var = stripslashes($var);
        } else {
            if(is_array($var)) {
                foreach($var AS $key => $value) {
                    array_stripslashes($var[$key]);
                }
            }
        }
    }


function areLoginDataIO($id, $pass,$datebank)
{   
    $query = "SELECT   COUNT(*) as Anzahl
              FROM     tbuser
              WHERE ID = '$id' AND Password = MD5('$pass')";
    $mysqli = connectDB($datebank);
    $res = $mysqli->query($query) OR die(mysql_error());
    $row = $res->fetch_assoc() OR die(mysql_error());
    $res->free();
    $nbrOfMaches=$row['Anzahl'];
    if ($nbrOfMaches == 1)
        return TRUE;
    else 
        return FALSE;
}

function saveMessageInDB()
{
	$name = $_POST['name'];
	$prename = $_POST['prename'];
	$message = $_POST['text'];
	$mail = $_POST['mail'];
	

	//Falls der User die L�nge der Textbox �berschreitet, wird die Nummer des Textfeldes zur�ckgegeben
	if(strlen($name) >= 50)
	{
		return 1;
	}
	
	if(strlen($prename) >= 50)
	{
		return 2;
	}
	
	if(strlen($mail) >= 50)
	{
		return 3;
	}
	
	$query = "INSERT INTO tbgaestebuch 
	                  (      prename ,       name ,       message ,        mail, dateTime ) 
	           VALUES ('".$prename."', '".$name."', '".$message."', '".$mail."', NOW()    )";
	
	$mysqli = connectDB('dbSpanien');
    $res = $mysqli->query($query) OR die(mysql_error());        
    $row = $res->fetch_assoc();
    $mysqli->close();
    
	return 0;
}


function connectDB($datebank)
{
    $mysqli = new mysqli("localhost", "weierand", "3Aw030785", $datebank);
    if ($mysqli->connect_errno) 
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    return $mysqli;   
}
    

 
function loadMessagesFromDB($datebank)
{
	$query = "SELECT * 
	          FROM tbgaestebuch 
	          ORDER BY dateTime DESC";
              
	$mysqli = connectDB('dbSpanien');
    $res = $mysqli->query($query) OR die(mysql_error());        
    
	while($row = $res->fetch_assoc())		//schlaufenweise werden nun die w�rter mit dem test und dem titel verglichen
	{
		?>
		<div id="Message">
		From: <?=$row['name']?> <?=$row['prename']?>  <?=$row['dateTime']?> <br>
		<?=$row['mail']?>
		<p><?=$row['message']?>
		</p>
		</div>
		<br>
		<hr>
		<?php
	}	
	$mysqli->close();
}



function rechte()
{
    if(isset($_SESSION['ID']))
    {
    	$id= $_SESSION['ID'];  
    	$query = "SELECT `Rechte`
                 FROM   `tbuser`
                 WHERE ID='".$id."'";
        
        $mysqli = connectDB('dbSpanien');
        $res = $mysqli->query($query) OR die(mysql_error());        
        $row = $res->fetch_assoc();
    	$mysqli->close();
    	return $row['Rechte'];
	}
}


function printUserNameByIDLogin()
{
        $query = "SELECT   `ID`,`Username`
                  FROM     `tbuser`
                  ORDER BY `Name` ASC;";
                  
        $mysqli = connectDB('dbSpanien');
        $res = $mysqli->query($query) OR die(mysql_error());
        while($row = $res->fetch_assoc()) {
            echo "<option value=".$row['ID'].">".$row['Username']."</option>\n";}
        $mysqli->close();
}



function Kalenderdaten($Jahr,$Saison){
	$query ="SELECT `Vorsaison`,`Hochsaison`,`Nebensaison`,`Gebucht`
			FROM	`tbkalender`
			WHERE Jahr='".$Jahr."'";
    $mysqli = connectDB('dbSpanien');
    $res = $mysqli->query($query) OR die(mysql_error());        
    $row = $res->fetch_assoc();
    $mysqli->close();
	return $row[$Saison];
	}


?>