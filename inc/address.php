<?php 

class AdressTxt
{
    public $content   = 0 ;
    public $visibility= 0 ;
    public $post1     = '';
    public $post2     = '';
    public $txtGerman = '';
    public $txtFrench = '';
    
    // method declaration
    function __construct($_content,$_visibility, $_post1, $_post2, $_txtGerman, $_txtFrench)
    {
        $this->content   = $_content;
        $this->visibility= $_visibility;
        $this->post1     = $_post1;
        $this->post2     = $_post2;
        $this->txtGerman = $_txtGerman;
        $this->txtFrench = $_txtFrench ;   
    }
}

class AdressPhys
{
    public $content   = 0;
    public $group     = 0;
    public $addGerman = '';
    public $addFrench = '';
    
    // method declaration
    function __construct($_content,$_group, $_addGerman, $_addFrench)
    {
        $this->content  = $_content;
        $this->group    = $_addFrench;
        $this->addGerman= $_addGerman;
        $this->addFrench= $_addFrench;         
    }
}


                              
             //content  Visibility  Post1       Post2                 Txt_German                       Txt_French
$adressTxt = array(                        
new AdressTxt(1 ,0,     '<?=SID?>'  , ''                      ,'Home                         ',  ''),   
new AdressTxt(2 ,0,     '<?=SID?>'  , ''                      ,'Das Haus                     ',  ''),   
new AdressTxt(2 ,0,     '<?=SID?>'  , '#Die Hauptwohnung     ','Die Hauptwohnung             ',  ''),   
new AdressTxt(2 ,0,     '<?=SID?>'  , '#Die Einliegerwohnung ','Die Einliegerwohnung         ',  ''),   
new AdressTxt(3 ,0,     '<?=SID?>'  , ''                      ,'Wie komme ich nach Calpe     ',  ''),   
new AdressTxt(4 ,0,     '<?=SID?>'  , ''                      ,'Lage des Hauses in Calpe     ',  ''),   
new AdressTxt(5 ,0,     '<?=SID?>'  , ''                      ,'Mietpreise                   ',  ''),   
new AdressTxt(6 ,0,     '<?=SID?>'  , ''                      ,'Mietanfrage                  ',  ''),   
new AdressTxt(7 ,1,     '<?=SID?>'  , ''                      ,'Mieterinfos                  ',  ''),   
new AdressTxt(7 ,1,     '<?=SID?>'  , '#Adresse_Calpe        ','Die Adressen in Calpe        ',  ''),    
new AdressTxt(7 ,1,     '<?=SID?>'  , '#Adresse_Schweiz      ','Kontaktadresse in der Schweiz',  ''),    
new AdressTxt(7 ,1,     '<?=SID?>'  , '#Plan_Calpe           ','Plan Calpe                   ',  ''),                       
new AdressTxt(8 ,0,     '<?=SID?>'  , ''                      ,'Photogalerie                 ',  ''),    
new AdressTxt(11,0,     '<?=SID?>'  , ''                      ,'Links                        ',  ''),    
new AdressTxt(13,0,     '<?=SID?>'  , 'action=logIn          ','Login                        ',  ''),    
new AdressTxt(13,0,     '<?=SID?>'  , 'action=logOut         ','Logout                       ',  ''),    
new AdressTxt(14,1,     '<?=SID?>'  , ''                      ,'Einstellungen                ',  ''),    
new AdressTxt(15,0,     '<?=SID?>'  , ''                      ,'Was bietet Calpe             ',  ''),    
new AdressTxt(15,0,     '<?=SID?>'  , '#Stadt                ','Die Stadt                    ',  ''),    
new AdressTxt(15,0,     '<?=SID?>'  , '#Sport                ','Sport                        ',  ''),    
new AdressTxt(15,0,     '<?=SID?>'  , '#Ausfluege            ','Ausfl&uuml;ge                ',  ''),    
new AdressTxt(17,2,     '<?=SID?>'  , ''                      ,'Gaestebuch bearbeiten        ',  ''),    
new AdressTxt(18,0,     '<?=SID?>'  , ''                      ,'Downloads                    ',  ''),
);

                // content Group Adresse_german  Adresse_French       GROUP               
$adressPhys = array(
new AdressPhys(1 ,1,'Seiten/Home.php                    ', ''),
new AdressPhys(2 ,1,'Seiten/Das Haus.php                ', ''),
new AdressPhys(3 ,1,'Seiten/Wie komme ich nach Calpe.php', ''),
new AdressPhys(4 ,1,'Seiten/Lage des Hauses in Calpe.php', ''),
new AdressPhys(5 ,1,'Seiten/Mietpreise.php              ', ''),
new AdressPhys(6 ,1,'Seiten/Mietanfrage.php             ', ''),
new AdressPhys(7 ,1,'Seiten/Mieterinfos.php             ', ''),
new AdressPhys(8 ,2,'Seiten/Photogalerie.php            ', ''),
new AdressPhys(11,2,'Seiten/Links.php                   ', ''),
new AdressPhys(13,3,'admin/login_de.php                 ', ''),
new AdressPhys(14,3,'admin/Einstellungen.php            ', ''),
new AdressPhys(15,2,'Seiten/Was bietet Calpe.php        ', ''),
new AdressPhys(17,3,'admin/admin_wash.php               ', ''),
new AdressPhys(18,2,'Seiten/Downloads.php               ', ''),
);

$group = array(


?> 