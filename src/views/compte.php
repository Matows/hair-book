<?php
if (!(isset($_SESSION['connected']))){
  $_SESSION['connected']=false;
}

if ($_SESSION['connected']){

  header('Location: https://sb.sinux.sh/hairbook/index.php?page=monCompte');
}
 else{
  echo(afficheFormConnect());
} 

?>
  <h3>Inscription</h3>
<form method="post" action="./src/actions/actionConnect.php">
  <table>
    <tr>
        <td align="right">
            <label for="nom"> Nom :</label>
        </td>
        <td>
          <input type="text" placeholder="votre nom" id="nom" name="nom" />
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="username">Pseudo :</label>
        </td>
        <td>
          <input type="text" placeholder="votre Pseudo" id="username" name="username" />
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="mdp"> Mot de passe :</label>
        </td>
        <td>
          <input type="password" placeholder="votre mot de passe" id="mdp" name="mdp" />
        </td>
    </tr>
  </table>
  <br/>

  <input type="submit"  value="Je m'inscris"/>

</form>
  <?php 
  if (isset($erreur))
  {
    echo $erreur;
  }
   ?>

