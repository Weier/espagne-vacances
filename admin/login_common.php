
<div class="feature"> 
    <img src="meinebilder/smilies.gif">
    <h3>Login</h3>

<?php
  

$doLogOut = FALSE;
if (isset($_GET['action']) AND ("logOut" == $_GET['action'])  )
    $doLogOut = TRUE;

$doLogIn= FALSE;
if (isset($_GET ['action'])  AND ("logIn"== $_GET ['action']) )
   $doLogIn =TRUE;  

    
$checkLogin = FALSE;
if (isset($_POST['\"UserID\"'])  )
{
   $userId = $_POST['\"UserID\"'];
   $pswd = $_POST['Password'];
   $checkLogin =TRUE;   
}

if($doLogOut) 
{
    session_destroy();
    ?>
    <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
    url ="<?=$loginTarget?>?content=13&action=logIn&<?=SID?>"; 
    document.location.href = url    
    </SCRIPT>
    <?php 
}
  
if($doLogIn) {
    ?>
    <p>
        <?=$loginTxt ?>
    </p>
    <?php
    displayLogin($userNametxt,$selUserNameTxt,$pswdTxt,$sendTxt,$cleanTxt,$notWorkingLoginTxt,$loginTarget);
}

if($checkLogin)
{
    if (areLoginDataIO($userId,$pswd,'dbSpanien'))
    { 
        $_SESSION['ID'] = $userId; 
        session_write_close();
        ?>
        <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
        url ="<?=$loginTarget?>?content=7&<?=SID?>&#Adresse_Calpe"; 
        document.location.href = url    
        </SCRIPT>
        <?php 
    }
    else
    {
        session_destroy();
        ?>
        <p><?=$wrongLoginTxt ?></p>
        <p><?=$notWorkingLoginTxt ?></p>
        <p>
            E-mail: <a href="mailto:calpe.spain@citycable.ch">calpe.spain@citycable.ch</a>
        </p>
        <form action="<?=$loginTarget?>?content=13&action=logIn&<?=SID?>" method="post" >
        <input type="submit" value="<?=$reconnecButtonTxt?> " />
        <?php
    }
}


function displayLogin($usrNameTxt,$selUserNamTxt,$pswdTxt,$sendTxt,$cleanTxt,$notWorkingLoginTxt,$target)
{
?>
<form action="<?=$target?>?content=13&<?=SID?>" method="post" class="admin_form">
    <table
        <tr>
            <th colspan="2">
            </th>
        </tr>
        <tr>
            <td>
                <label for="Username"><?=$usrNameTxt?>:</label>
            </td>
        <td>
            <select size=\"1\" name=\"UserID\" id=\"Username\">
            <option value=\"0\" selected=\"selected\"><?=$selUserNamTxt?></option>
            <?php
            printUserNameByIDLogin()
            ?>
            </select>
        </td>
            </tr>
            <tr>
               <td>
                    <label for="password"><?=$pswdTxt?> :</label>
               </td>
              <td>
                    <input type="password" name="Password" id="password"/>
              </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="<?=$sendTxt ?>" />
                    <input type="reset" name="submit" value="<?=$cleanTxt ?>" />
                </td>
            </tr>
     </table>
</form>
    <p>
    <?=$notWorkingLoginTxt ?>
    E-mail: <a href="mailto:calpe.spain@citycable.ch">calpe.spain@citycable.ch</a>
    </p>
    <?php
}

?>
</div>