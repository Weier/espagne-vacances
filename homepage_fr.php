<?php include "inc/preamble_session.php"; ?>

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
<title>Maison de vacances &agrave; Espagne/Calpe</title>
<link rel="icon" HREF="meinebilder/icon.png" TYPE="image/ico">
</head>
<body> 
<?php
   error_reporting(E_ALL);
    
    // Local Variable Initialisation
   $isUserLoggedIn = FALSE;
   if(isset($_SESSION['ID']))
    $isUserLoggedIn = TRUE;
   
   $isRootLoggedIn = FALSE;
   if (rechte()=='1')
    $isRootLoggedIn = TRUE;
?>

<div id="masthead"> 
  <h1 id="siteName">Maison de vacances &agrave; Calpe<a href="homepage_fr_villa_gross.jpg" target="blank"> </a></h1>
  <br>
  <div id="globalNav"> 
    <div></div>
  </div> 
  <div id="breadCrumb" align="center">
  	| <a href="homepage_de.php"><img src="meinebilder/germany-flag.gif" width="15px" > Deutsch </a> | 
  	 <br>
	  Mise &agrave; jour: 15.02.2017  
  </div> 
  <div id="navBar"> 
   
  <div class="relatedLinks">
    <h3> Informations g&eacute;n&eacute;rales</h3> 
	<ul> 
      <li><a href="homepage_fr.php?content=1&<?=SID?>">Home</a></li> 
      <li><a href="homepage_fr.php?content=2&<?=SID?>">La maison</a>
	  	<ul>
      		<li><a href="homepage_fr.php?content=2&<?=SID?>&#Appartement principal">Appartement principal</a></li>
			<li><a href="homepage_fr.php?content=2&<?=SID?>&#Appartement inf&eacute;rieur">Appartement inf&eacute;rieur</a></li>
		</ul>
	  </li>
	  <li><a href="homepage_fr.php?content=3&<?=SID?>">Comment arriver &agrave; Calpe </a></li>  
      <li><a href="homepage_fr.php?content=4&<?=SID?>">Situation de la villa &agrave; Calpe </a></li> 
      <li><a href="homepage_fr.php?content=5&<?=SID?>">Prix de location </a></li> 
      <li><a href="homepage_fr.php?content=6&<?=SID?>">Demande de location</a></li>
	  <?php 
	  if($isUserLoggedIn) 
	  {?>
    	  <li><a href="homepage_fr.php?content=7&<?=SID?>">Infos Locataire </a>
    	    <ul>
          	<li><a href="homepage_fr.php?content=7&<?=SID?>&#Adresse_Calpe">L'adresse &agrave; Calpe</a></li>
    		<li><a href="homepage_fr.php?content=7&<?=SID?>&#Contact_Suisse">Votre contact en Suisse</a></li>
    		<li><a href="homepage_fr.php?content=7&<?=SID?>&#Plan_Calpe">Plan Calpe</a></li>
    		</ul>	  
    	  </li>
    	 <?php
	  }?>	    
    </ul> 
  </div> 
  <div class="relatedLinks"> 
    <h3>Divertissement</h3> 
    <ul>
	  <li><a href="homepage_fr.php?content=15&<?=SID?>">Que propose Calpe?</a>
	    <ul>
      	<li><a href="homepage_fr.php?content=15&<?=SID?>&#Stadt">La ville</a></li>
		<li><a href="homepage_fr.php?content=15&<?=SID?>&#Sport">Sport</a></li>
		<li><a href="homepage_fr.php?content=15&<?=SID?>&#Ausfluege">Excursions</a></li>
		</ul>
	  </li>
      <li><a href="homepage_fr.php?content=8&<?=SID?>">Galerie Photo </a></li> 
      <li><a href="homepage_fr.php?content=11&<?=SID?>">Liens</a></li>
	  <li><a href="homepage_fr.php?content=18&<?=SID?>">T&eacute;l&eacute;chargements</a></li>  
    </ul> 
  </div> 
  <div class="relatedLinks"> 
    <h3>Secteur Priv&eacute;</h3> 
    <ul>
	  <?php
      if($isUserLoggedIn==FALSE)
      {?>
    	  <li><a href="homepage_fr.php?content=13&action=logIn&<?=SID?>">Se connecter</a> </li>
    	  <?php
	  }
	  if($isUserLoggedIn==TRUE) 
      {?>
          <li><a href="homepage_fr.php?content=13&action=logOut&<?=SID?>">Se d&eacute;connecter</a> </li> 
          
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
<!--end navBar div --> 
<div id="headlines"> 
  <h3>Informations</h3> 
  <div id="advert"> 
    <a onClick="window.open(this.href, '_blank','width=768,height=512,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0');return false" href="meinebilder/villa_gross.jpg" ><img  src="meinebilder/villa_klein.jpg"  alt="La maison" width="75%"></a>	<br>
	E-mail: <a href="mailto:calpe.spain@citycable.ch" style="font-size:100%">calpe.spain@citycable.ch</a>
  <br>
	T&eacute;l.:
	<br>
	+41 (0)21 781 23 36
  </div>
 
    
</div> 
<!--end headlines --> 
<div id="content">
	<?php
	if(isset($_GET['content']))	{
		switch($_GET['content'])
		{
		case 1:
			include "pages/Home.php";	
		break;
		case 2:
			include "pages/La maison.php";	
		break;
		case 3:
			include "pages/Comment arriver a Calpe.php";
		break;
		case 4:
			include "pages/Situation de la villa a Calpe.php";
		break;
		case 5:
			include "pages/Prix de locations.php";
		break;
		case 6:
			include "pages/Demande de location.php";	
		break;
		case 7:
			include "pages/Inforamtions clientele.php";
		break;
		case 8:
			include "pages/Photogallery.php";
		break;
		case 9:
			include "pages/Film.php";
		break;
		case 10:
			include "pages/Livre d Or.php";
		break;
		case 11:
			include "pages/Liens.php";
		break;
		case 12:
			include "";//not asserted
		break;
		case 13:
			include "admin/login_fr.php";
		break;
		case 14:
			include "admin/Configuration.php";
		break;
		case 15:
			include "pages/Que propose Calpe.php";
		break;
		case 16:
			include "";//not asserted
		break;
		case 17:
			include "admin/admin_wash.php";
		break;
		case 18:
			include "pages/Telechargements.php";
		break;
		}
		}
		else {include "pages/Home.php";}
		?>
</div> 
<!--end content --> 
<div id="siteInfo"> 
  <img src="meinebilder/calpe_stadtstrand.jpg" width="44" height="22">|<a href="mailto:calpe.spain@citycable.ch">Contact</a> | &copy;2006
  www.espagne-vacances.ch
</div> 
<br> 
</body>
</html>
