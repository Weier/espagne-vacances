<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
if (navigator.appName == 'Netscape')
   var language = navigator.language;
else
   var language = navigator.browserLanguage;

var code = language.substring(0,2);

if ((code == 'fr') || (code == 'de') )
{
if (code == 'fr') url ="homepage_fr.php";
if (code == 'de') url ="homepage_de.php";
}
else {url ="homepage_de.php";}
document.location.href = url
</script>
