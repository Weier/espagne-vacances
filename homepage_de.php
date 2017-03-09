<?php include "inc/preamble_session.php";?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- DW6 -->
<head>
<?php
include "inc/meta.php";  
include "css/stylesheet.php";
include "inc/config.php";

?>
<title><?=$title[$language]?></title>
    <link rel="icon" HREF="meinebilder/icon.png" TYPE="image/ico">
</head>
<body> 
<?php
error_reporting(E_ALL);

// Global Variable Initialisation
$isUserLoggedIn = FALSE;
if(isset($_SESSION['ID']) and $_SESSION['ID']!=0)
    $isUserLoggedIn = TRUE;
   
$isRootLoggedIn = FALSE;
   if (rechte()=='1')
$isRootLoggedIn = TRUE;
     
//NameVariable Array
$german='DE';
$french='fr';
$language=&$german;

$title[$german] = "Ferienhaus in Calpe";
$main[$german]  = "homepage_fr.php";
$Flag[$german]  = "meinebilder/france.jpg";
$lang[$german]  = "Fran&ccedil;ais";

?>
    
<div id="masthead"> 
  <h1 id="siteName"><?=$title[$language]?><a href="homepage_de_villa_gross.jpg" target="blank"> </a></h1>
  <br>
  <div id="globalNav"> 
    <div></div>
   </div>
  <div id="breadCrumb" align="center">
     | <a href=<?=$main[$language]?>><img src=<?=$Flag[$language]?> width="15px"> <?=$lang[$language]?></a>|
	  <br>
    Aktualisiert: 15.02.2017    
</div> 
  <div id="navBar"> 
  <div class="relatedLinks"> 
    <h3>Allgemeine Informationen</h3> 
    <ul> 
      <li><a href="homepage_de.php?content=1&<?=SID?>">Home</a></li> 
      <li><a href="homepage_de.php?content=2&<?=SID?>">Das Haus</a>
	  <ul>
      	<li><a href="homepage_de.php?content=2&<?=SID?>&#Die Hauptwohnung">Die Hauptwohnung</a></li>
			<li><a href="homepage_de.php?content=2&<?=SID?>&#Die Einliegerwohnung">Die Einliegerwohnung</a></li>
		</ul>
	  </li>
	  <li><a href="homepage_de.php?content=3&<?=SID?>">Wie komme ich nach Calpe</a></li>  
      <li><a href="homepage_de.php?content=4&<?=SID?>">Lage des Hauses in Calpe</a></li> 
      <li><a href="homepage_de.php?content=5&<?=SID?>">Mietpreise</a></li> 
      <li><a href="homepage_de.php?content=6&<?=SID?>">Mietanfrage</a></li>
	  <?php
	  if($isUserLoggedIn) 
	  {?>
    	  <li><a href="homepage_de.php?content=7&<?=SID?>">Mieterinfos</a>
    	  <ul>
          	<li><a href="homepage_de.php?content=7&<?=SID?>&#Adresse_Calpe">Die Adressen in Calpe</a></li>
    		<li><a href="homepage_de.php?content=7&<?=SID?>&#Adresse_Schweiz">Kontaktadresse in der Schweiz</a></li>
    		<li><a href="homepage_de.php?content=7&<?=SID?>&#Plan_Calpe">Plan Calpe</a></li>
    		</ul>	  
    	  </li>
    	  <?php 
      }?>	    
    </ul> 
  </div> 
  <div class="relatedLinks"> 
    <h3>Freizeit</h3> 
    <ul>
	  <li><a href="homepage_de.php?content=15&<?=SID?>">Was bietet Calpe</a>
	  <ul>
      	<li><a href="homepage_de.php?content=15&<?=SID?>&#Stadt">Die Stadt</a></li>
		<li><a href="homepage_de.php?content=15&<?=SID?>&#Sport">Sport</a></li>
		<li><a href="homepage_de.php?content=15&<?=SID?>&#Ausfluege">Ausfl&uuml;ge</a></li>
		</ul>
	  </li>
      <li><a href="homepage_de.php?content=8&<?=SID?>">Photogalerie</a></li> 
      <li><a href="homepage_de.php?content=11&<?=SID?>">Links</a></li>
	  <li><a href="homepage_de.php?content=18&<?=SID?>">Downloads</a></li>  
    </ul> 
  </div> 
  <div class="relatedLinks"> 
    <h3>Loggin Section</h3> 
    <ul>
      <?php
      if($isUserLoggedIn==FALSE)
      {?>
           <li><a href="homepage_de.php?content=13&action=logIn&<?=SID?>">Login</a> </li>   
           <?php   
      }
      if($isUserLoggedIn==TRUE) 
      {?>
    	  <li><a href="homepage_de.php?content=13&action=logOut&<?=SID?>">Logout</a> </li> 
    	  
    	  <?php
      }
	  if($isRootLoggedIn==TRUE)
      {?>
           
           <?php 
      }?>
    </ul>
	</div>
  <div id="search">
	 <form action="http://www.google.com/search" name=f target="_blank">
	  	<table cellspacing=0 cellpadding=0>
			<tr><td align="left"><img alt="Google search" src="meinebilder/google.gif" width="75px" height="27px" />
			</td></tr>
			<tr>
			<td align=left>
			<input type=hidden name=hl value=en>
			<input type=hidden name=ie value="UTF-8">
			<input type=hidden name=oe value="UTF-8">
			<input maxLength=256 size=15 name=q value=""><br>
			<input type=submit value="Search" name=btnG>
			</td></tr>
		</table>
	</form> 
  </div>
</div> 
<div id="headlines"> 
  <h3>Informationen</h3> 
  <div id="advert"> 
   <a onclick="window.open(this.href, '_blank','width=768,height=512,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0');return false" href="meinebilder/villa_gross.jpg" ><img src="meinebilder/villa_klein.jpg" alt="Das Haus" width="85%"></a> 
	  <br>
	E-mail: <a href="mailto:calpe.spain@citycable.ch">calpe.spain@citycable.ch</a>
	<br>
	Tel.:
	<br>
	+41 (0)21 781 23 36
	</div>
  </div> 
<div id="content">
	<?php
	if(isset($_GET['content']))	{
		switch($_GET['content'])
		{
		case 1:
			include "Seiten/Home.php";	
		break;
		case 2:
			include "Seiten/Das Haus.php";	
		break;
		case 3:
			include "Seiten/Wie komme ich nach Calpe.php";
		break;
		case 4:
			include "Seiten/Lage des Hauses in Calpe.php";
		break;
		case 5:
			include "Seiten/Mietpreise.php";
		break;
		case 6:
			include "Seiten/Mietanfrage.php";	
		break;
		case 7:
			include "Seiten/Mieterinfos.php";
		break;
		case 8:
			include "Seiten/Photogalerie.php";
		break;
		case 9:
			include "Seiten/Filme.php";
		break;
		case 10:
			include "Seiten/Gaestebuch.php";
		break;
		case 11:
			include "Seiten/Links.php";
		break;
		case 12:
			include "";//not asserted
		break;
		case 13:
			include "admin/login_de.php";
		break;
		case 14:
			include "admin/Einstellungen.php";
		break;
		case 15:
			include "Seiten/Was bietet Calpe.php";
		break;
		case 16:
			include "";//not asserted
		break;
		case 17:
			include "admin/admin_wash.php";
		break;
		case 18:
			include "Seiten/Downloads.php";
		break;
		}
		}
		else {include "Seiten/Home.php";}
		?>
</div> 
<!--end content --> 
<div id="siteInfo"> 
  <img src="meinebilder/calpe_stadtstrand.jpg" width="44" height="22">|<a href="mailto:calpe.spain@citycable.ch">Kontakt</a> | &copy;2014
  www.espagne-vacances.ch
</div> 
<br> 
</body>
</html>

