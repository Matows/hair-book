<?php
$conn = mysqli_connect("127.0.0.1:3308", "hairbook", "N9Ux46la", "hairbook");
if(isset($_POST['nom']) AND isset($_POST['username']) AND isset($_POST['mdp']))
{
  $nom = htmlspecialchars($_POST['nom']);
  $username = htmlspecialchars($_POST['username']);
  $mdp = sha1($_POST['mdp']);

  $nomlength = strlen($nom);
  if ($nomlength <= 255)
  {
      $sql = "INSERT INTO client(`id`,`id_profile`,`nom`,`passwd`,`username`) VALUES(NULL,0,'$nom','$mdp','$username');";
      mysqli_query($conn,$sql);
      $erreur="votre compte a bien été crée !";
      
  }
  else {
    $erreur = " Votre pseudo ne doit pas dépasser 255 caractères ";
    header('https://sb.sinux.sh/hairbook/index.php?page=compte');
  }
}

else {
  $erreur = "Tout les champs doivent etre completé !";
  header('Location: https://sb.sinux.sh/hairbook/index.php?page=compte');
}
echo($erreur);
header('Location: https://sb.sinux.sh/hairbook/index.php?page=accueil');
